<?php

namespace App\Http\Livewire\Admin;

use App\Models\Config;
use App\Models\Expert;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Question;
use App\Models\Webinary;
use Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class Configurations extends Component
{
    use WithFileUploads;

    public $photo, $model_photo, $model_movie;


    public string $password = "";

    public array $model_form = [];

    public array $config_form = [];

    public string $current_model = "", $current_id = "";

    #[Url(keep: true)]
    public $tab = 0;


    #[Url(except: "")]
    public $search = "";

    public $config = "profil";

    public array $roadmap = [
        "profil" => "profil",
        "experts" => "experts",
        "faqs" => "faqs",
        "questions" => "questions",
        "webinaries" => "webinaries",
        "posts" => "posts",
        "advanced" => "advanced",
    ];


    public function mount()
    {
        if (!array_key_exists($this->config, $this->roadmap))
        {
            abort(404);
        }
        $this->reload();
    }

    public function updatedPhoto()
    {
        if (!Str::endsWith(strtolower($this->photo->getRealPath()), ["jpeg", "png", "jpg"]))
        {
            session()->flash("error", __("Type d'image invalide."));
            return;
        }
        $user = Auth::guard("web")->user();
        $imageName = Auth::user()->id . ".png";
        $path = "storage/user/" . $imageName;
        $this->photo->storeAs("public/user", $imageName);
        File::delete($this->photo->getRealPath());
        $user->update(["photo" => $path]);
        $user->refresh();
        return redirect(route('admin-space.configurations', ["config" => "profil"]))->with("success", __("Photo de profil modifiée avec succès."));
    }

    public function updatedModelPhoto()
    {
        if (!Str::endsWith(strtolower($this->model_photo->getRealPath()), ["jpeg", "png", "jpg"]))
        {
            session()->flash("error", __("Type d'image invalide."));
            return;
        }
        $model = $this->current_model::find($this->current_id);
        if ($model)
        {
            $imageName = "$model->id.png";
            $cls = explode("\\", $this->current_model);
            $path = "storage/model/" . strtolower(end($cls));
            $this->model_photo->storeAs(str_replace("storage/", "public/", $path), $imageName);
            File::delete($this->model_photo->getRealPath());
            $model->update(["photo" => "$path/$imageName"]);
            $model->refresh();
            return redirect(route('admin-space.configurations', ["config" => $this->config]))
                ->with("success", __("Photo modifiée avec succès."));
        }
    }

    public function updatedModelMovie()
    {
        $this->validate([
            "model_movie" => "mimetypes:video/*|max:102400"
        ], [], ["model_movie" => "movie"]);
        $model = $this->current_model::find($this->current_id);
        if ($model)
        {
            $movieName = "$model->id.mp4";
            $cls = explode("\\", $this->current_model);
            $path = "storage/model/" . strtolower(end($cls));
            $this->model_movie->storeAs(str_replace("storage/", "public/", $path), $movieName);
            File::delete($this->model_movie->getRealPath());
            $model->update(["movie" => "$path/$movieName"]);
            $model->refresh();
            return redirect(route('admin-space.configurations', ["config" => $this->config]))
                ->with("success", __("Vidéo modifiée avec succès."));
        }
    }

    public function savePassword()
    {
        $this->validate([
            "password" => [
                "required",
                "confirmed",
                Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(),
            ],
        ]);
        Auth::user()->update(["password" => bcrypt($this->password)]);
        $this->password = "";
        $this->password_confirmation = "";
        session()->flash('success', __('Mot de passe modifié avec succès.'));
    }

    public function addOrUpdateExpert()
    {
        $model = $this->current_model::find($this->current_id);
        if ($model)
        {
            Validator::make($this->model_form, [
                "lastname" => "required|min:2|max:30",
                "firstname" => "required|min:2|max:30",
                "speciality" => "required|min:2|max:30",
                "facebook" => "url|unique:experts,facebook,{$model->id},id",
                "linkedin" => "url|unique:experts,linkedin,{$model->id},id",
                "tweeter" => "url|unique:experts,tweeter,{$model->id},id",
            ])->validate();
            $model->update($this->model_form);
            session()->flash('success', __('Modification effectuée avec succès.'));
        } else
        {
            Validator::make($this->model_form, [
                "lastname" => "required|min:2|max:30",
                "firstname" => "required|min:2|max:30",
                "speciality" => "required|min:2|max:30",
                "facebook" => "url|unique:experts,facebook",
                "linkedin" => "url|unique:experts,linkedin",
                "tweeter" => "url|unique:experts,tweeter",
            ])->validate();
            $model = $this->current_model::create([
                "photo" => "storage/user/default.png",
                ...$this->model_form,
            ]);
            session()->flash('success', __('Enregistrement effectué avec succès.'));
        }
        $this->reload();
    }

    public function addOrUpdatePost()
    {
        $model = $this->current_model::find($this->current_id);
        if ($model)
        {
            Validator::make($this->model_form, [
                "title" => "required|min:4|max:120|unique:posts,title,{$model->id},id",
                "description" => "required",
            ])->validate();
            $model->update($this->model_form);
            session()->flash('success', __('Modification effectuée avec succès.'));
        } else
        {
            Validator::make($this->model_form, [
                "title" => "required|min:4|max:120|unique:posts,title",
                "description" => "required",
            ])->validate();
            $model = $this->current_model::create([
                "photo" => "storage/user/default.png",
                ...$this->model_form,
            ]);
            session()->flash('success', __('Enregistrement effectué avec succès.'));
        }
        $this->reload();

    }

    public function addOrUpdateModel()
    {
        $model = $this->current_model::find($this->current_id);
        if ($model)
        {
            $model->update($this->model_form);
            session()->flash('success', __('Modification effectuée avec succès.'));
        } else
        {
            $model = $this->current_model::create([
                "photo" => "storage/user/default.png",
                ...$this->model_form,
            ]);
            session()->flash('success', __('Enregistrement effectué avec succès.'));
        }
        $this->reload();
    }

    public function updatedCurrentId()
    {
        $model = $this->current_model::find($this->current_id);
        if ($model)
        {
            $this->model_form = $model->toArray();
            if ($this->config == "posts")
            {
                $this->dispatch("quillReload", ["contents" => $model->description]);
            }
        }
    }

    public function deleteModel($id)
    {
        $model = $this->current_model::find($id);
        if ($model)
        {
            $this->current_model::destroy($id);
            try
            {
                $oldPath = str_replace("storage", "public", $model->photo);
                if (Storage::fileExists($oldPath) and !str_contains($oldPath, "default"))
                    File::delete($model->photo);
                $oldPath = str_replace("storage", "public", $model->movie);
                if (Storage::fileExists($oldPath) and !str_contains($oldPath, "default"))
                    File::delete($model->movie);
            } catch (\Exception $ex)
            {
            }
            session()->flash('success', __('Suppression effectuée avec succès.'));
        }
    }

    public function toggleDelete($id, $state, $key)
    {
        $remove = trim(($this->$state)[$key] ?? "");
        if (str_contains($remove, $id))
            ($this->$state)[$key] = str_replace($id, "", $remove);
        else
            ($this->$state)[$key] .= " $id";
        ($this->$state)[$key] = trim(($this->$state)[$key]);
    }

    public function saveConfig()
    {
        if (Hash::check($this->password, Auth::user()->getAuthPassword()))
        {
            foreach ($this->config_form as $label => $value)
            {
                Config::firstWhere("label", $label)?->update(["value" => $value]);
            }
            session()->flash('success', 'Configurations sauvegardées avec succès.');
            return;
        }
        session()->flash('error', 'Mot de passe erronné.');
    }


    public function loadData()
    {
        $models = $this->current_model::all();
        if (strlen(trim($this->search)))
        {
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            });
        }
        return $this->current_model::paginate(15);
    }

    public function reload()
    {
        if ($this->config == "experts")
        {
            $this->current_model = Expert::class;
        } elseif ($this->config == "faqs")
        {
            $this->current_model = Faq::class;
        } elseif ($this->config == "questions")
        {
            $this->current_model = Question::class;
        } elseif ($this->config == "webinaries")
        {
            $this->current_model = Webinary::class;
        } elseif ($this->config == "posts")
        {
            $this->current_model = Post::class;
            $this->dispatch("quillReload", ["contents" => ""]);
        } elseif ($this->config == "advanced")
        {
            $this->current_model = Config::class;
            $this->config_form = [
                "min_year" => Config::retreive("min_year"),
                "cantidate_cautious" => Config::retreive("cantidate_cautious"),
                "entreprise_cautious" => Config::retreive("entreprise_cautious"),
                "max_references_upload" => Config::retreive("max_references_upload"),
                "max_realisations_upload" => Config::retreive("max_realisations_upload"),
                "max_links" => Config::retreive("max_links"),
                "candidate_privacy_policy" => Config::retreive("candidate_privacy_policy"),
                "candidate_terms" => Config::retreive("candidate_terms"),
                "entreprise_privacy_policy" => Config::retreive("entreprise_privacy_policy"),
                "entreprise_terms" => Config::retreive("entreprise_terms"),
                "linkedin" => Config::retreive("linkedin"),
                "facebook" => Config::retreive("facebook"),
                "tweeter" => Config::retreive("tweeter"),
            ];
        }
        $this->current_id = "";
        $this->model_form = [];
    }

    public function render()
    {
        return view(".admin.configurations." . $this->roadmap[$this->config])
            ->extends("admin.layouts.base")
            ->section("admin.base.body")
            ->layoutData([
                "admin_space_title" => [
                    "profil" => "Profil",
                    "experts" => "Experts KAPI",
                    "faqs" => "FAQs",
                    "questions" => "Questions Réponses",
                    "webinaries" => "Webinaires",
                    "posts" => "Blog",
                    "advanced" => "Avancées",
                ][$this->config],
            ]);
    }
}
