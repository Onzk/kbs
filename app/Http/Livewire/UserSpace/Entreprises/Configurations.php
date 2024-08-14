<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use App\Models\Position;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class Configurations extends Component
{
    use WithFileUploads;

    public $photo;

    public $movie;

    public array $about_state = [];

    public array $profil_state = [];

    #[Url(keep: true)]
    public $tab = 0;

    public $config = "a-propos";

    public array $roadmap = [
        "a-propos" => "about",
        "contact" => "contact",
        "profils-recherchés" => "searched-profils",
    ];


    public function mount()
    {
        if (!array_key_exists($this->config, $this->roadmap)) {
            abort(404);
        }
        $this->reload();
    }

    public function updatedPhoto()
    {
        if (!Str::endsWith(strtolower($this->photo->getRealPath()), ["jpeg", "png", "jpg"])) {
            session()->flash("error", __("Type d'image invalide."));
            return;
        }
        $user = Auth::guard("entreprises")->user();
        $imageName = Auth::user()->id . ".png";
        $path = "storage/entreprise/" . $imageName;
        $this->photo->storeAs("public/entreprise", $imageName);
        File::delete($this->photo->getRealPath());
        $user->update(["photo" => $path]);
        Auth::guard("entreprises")->user()->refresh();
        return redirect(route('entreprise-space.configurations', ["config" => "a-propos"]))->with("success", __("Photo de profil modifiée avec succès."));
    }
    public function updatedMovie()
    {
        if (!Str::endsWith(strtolower($this->movie->getRealPath()), ["mp4", "avi"])) {
            session()->flash("error", __("Type de vidéo invalide."));
            return;
        }
        $this->validate([
            "movie" => "mimetypes:video/*|max:102400"
        ]);
        $user = Auth::guard("entreprises")->user();
        $movieName = Auth::user()->id . ".mp4";
        $path = "storage/entreprise/movies/" . $movieName;
        $this->movie->storeAs("public/entreprise/movies/", $movieName);
        File::delete($this->movie->getRealPath());
        $user->update(["presentation_movie" => $path]);
        Auth::guard("entreprises")->user()->refresh();
        return redirect(route('entreprise-space.configurations', ["config" => "a-propos"]))->with("success", __("Vidéo de présentation définie avec succès."));
    }

    public function saveLink()
    {
        $state = $this->about_state["link_form"];
        Validator::make($state, [
            "link" => "required|url",
        ])->validate();
        $user = Auth::guard("entreprises")->user();
        $this->about_state["link"][] = $state;
        $this->about_state["link"] =  array_values($this->about_state["link"]);
        $user->update(["links" => json_encode($this->about_state["link"], true)]);
        $user->refresh();
        $this->about_state["link_form"] = [];
        $this->reload();
        session()->flash("success", __("Lien ajouté avec succès."));
    }

    public function updateLink()
    {
        $user = Auth::guard("entreprises")->user();
        $remove_ids = explode(" ", $this->about_state["link_remove"]);
        foreach ($remove_ids as $id) {
            unset($this->about_state["link"][$id]);
        }
        $this->about_state["link"] =  array_values($this->about_state["link"]);
        $user->update(["links" => json_encode($this->about_state["link"], true)]);
        $user->refresh();
        $this->reload();
        session()->flash("success", __("Modifications sauvegardées avec succès."));
    }

    public function saveAbout()
    {
        $user = Auth::guard("entreprises")->user();
        Validator::make($this->about_state, [
            "name" => "required|min:3",
            "sector" => "required|min:3",
            "size" => "required|numeric",
            "hq_address" => "required|min:5|unique:entreprises,hq_address,{$user->id},id",
            "website" => "url|min:2|unique:entreprises,website,{$user->id},id",
            "email" => "required|email|unique:entreprises,email,{$user->id},id|unique:candidates,email",
            "description" => "required|min:8|max:255",
            "diversity_policy" => "required|min:8|max:255",
        ])->validate();
        $user->update($this->about_state);
        session()->flash("success", __("Mise à jour effectuée avec succès."));
    }

    public function saveProfil()
    {
        $state = $this->profil_state["profil_form"];
        Validator::make($state, [
            "title" => "required|min:4",
            "skills" => "required|min:4",
            "experiences" => "required|min:4",
            "remuneration" => "required|min:4|in:salary_range,package",
            "workplace" => "required|min:2",
            "description" => "required|min:4",
        ])->validate();
        $user = Auth::guard("entreprises")->user();
        $state["entreprise_id"] = $user->id;
        Position::create($state);
        $this->profil_state["profil_form"] = [];
        $this->reload();
        session()->flash("success", __("Nouveau profil ajouté avec succès."));
    }

    public function updateProfil()
    {
        $user = Auth::guard("entreprises")->user();
        $profils = $user->positions ?? [];
        for ($i = 0; $i < count($profils); $i++) {
            $profils[$i]->update($this->profil_state["profil"][$i]);
        }
        $remove_ids = explode(" ", $this->profil_state["profil_remove"]);
        try {
            Position::destroy($remove_ids);
        } catch (\Throwable $th) {
        }
        $user->refresh();
        $this->reload();
        session()->flash("success", __("Modifications sauvegardées avec succès."));
    }

    public function toggleDelete($id, $state, $key)
    {
        $remove = trim(($this->$state)[$key] ?? "");
        if (str_contains($remove, $id)) ($this->$state)[$key] = str_replace($id, "", $remove);
        else ($this->$state)[$key] .= " $id";
        ($this->$state)[$key] = trim(($this->$state)[$key]);
    }

    public function reload()
    {
        $user = Auth::guard("entreprises")->user();
        if ($this->config == "a-propos") {
            $this->about_state = [
                ...$user->toArray(),
                "link" => $user->get_links(),
                "link_form" => [],
                "link_remove" => "",
            ];
        }elseif($this->config == "profils-recherchés"){
            $this->profil_state = [
                "profil" => $user->positions?->toArray() ?? [],
                "profil_form" => ["remuneration" => "salary_range"],
                "profil_remove" => "",
            ];
        }
    }
    public function render()
    {
        return view(".user-space.entreprises.configurations." . $this->roadmap[$this->config])
            ->extends("user-space.layouts.base")
            ->section("user-space.base.body")
            ->layoutData([
                "user_space_title" => [
                    "a-propos" => "A Propos",
                    "contact" => "Contact",
                    "profils-recherchés" => "Profils Recherchés",
                ][$this->config],
            ]);
    }
}
