<?php

namespace App\Http\Livewire\UserSpace\Candidates;

use App\Models\Education;
use App\Models\OtherEducation;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class Configurations extends Component
{
    use WithFileUploads;

    public $photo;

    public array $about_state = [];

    public array $education_state = [];

    public $config = "a-propos";

    public array $roadmap = [
        "a-propos" => "about",
        "contact" => "contact",
        "disponibilité" => "availability",
        "diplômes-et-formations" => "education",
        "expériences" => "experiences",
        "projets" => "projects",
        "compétences" => "skills",
        "langues" => "languages",
        "centres-d'intérêts" => "hobbies",
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
        $user = Auth::guard("candidates")->user();
        $imageName = Auth::user()->id . ".png";
        $path = "storage/candidate/" . $imageName;
        $this->photo->storeAs("public/candidate", $imageName);
        File::delete($this->photo->getRealPath());
        $user->update(["photo" => $path]);
        Auth::guard("candidates")->user()->refresh();
        return redirect(route('user-space.configurations', ["config" => "a-propos"]))->with("success", __("Photo de profil modifiée avec succès."));
    }


    public function saveAbout()
    {
        $user = Auth::guard("candidates")->user();
        Validator::make($this->about_state, [
            "linkedin" => "required|url|unique:candidates,linkedin,{$user->id},id|regex:/^https:\\/\\/[a-z]{2,3}\\.linkedin\\.com\\/.*$/i",
            "about" => "required|min:8",
        ])->validate();
        $user->update($this->about_state);
        session()->flash("success", __("Mise à jour effectuée avec succès."));
    }


    public function saveEducation()
    {
        $state = $this->education_state["education_form"];
        Validator::make($state, [
            "year" => "required|numeric|min_digits:4|min:1900|max:" . \Carbon\Carbon::now()->year,
            "level" => "required|min:4",
            "domain" => "required|min:4",
            "institute" => "required|min:4",
            "country" => "required|min:2",
        ])->validate();
        $user = Auth::guard("candidates")->user();
        $state["candidate_id"] = $user->id;
        Education::create($state);
        $this->education_state["education_form"] = [];
        $this->reload();
        session()->flash("success", __("Nouveau diplôme/formation ajouté avec succès."));
    }

    public function updateEducation()
    {
        $user = Auth::guard("candidates")->user();
        $educations = $user->educations;
        for ($i = 0; $i < count($educations); $i++) {
            $educations[$i]->update($this->education_state["education"][$i]);
        }
        $remove_ids = explode(" ", $this->education_state["education_remove"]);
        try {
            Education::destroy($remove_ids);
        } catch (\Throwable $th) {
        }
        $user->refresh();
        $this->reload();
        session()->flash("success", __("Modifications sauvegardées avec succès."));
    }

    public function saveOtherEducation()
    {
        $state = $this->education_state["other_form"];
        Validator::make($state, [
            "type" => "required|in:ongoing_training,certification,accredidation",
            "title" => "required|min:2",
            "description" => "required|min:20",
        ])->validate();
        $type = [
            "ongoing_training" => "formation continue",
            "certification" => "certification",
            "accredidation" => "accrédidation",
        ][$state["type"]];
        $user = Auth::guard("candidates")->user();
        $state["candidate_id"] = $user->id;
        OtherEducation::create($state);
        $this->education_state["other_form"] = [];
        $this->reload();
        session()->flash("success", __("Nouvelle :type ajoutée avec succès.", ["type" => $type]));
    }

    public function updateOtherEducation()
    {
        $user = Auth::guard("candidates")->user();
        $educations = $user->other_educations;
        for ($i = 0; $i < count($educations); $i++) {
            $educations[$i]->update($this->education_state["other"][$i]);
        }
        $remove_ids = explode(" ", $this->education_state["other_remove"]);
        try {
            OtherEducation::destroy($remove_ids);
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
        $user = Auth::guard("candidates")->user();
        if ($this->config == "a-propos") {
            $this->about_state = [
                "linkedin" => $user->linkedin,
                "about" => $user->about,
            ];
        } elseif ($this->config == "diplômes-et-formations") {
            $this->education_state = [
                "education" => $user->educations->toArray(),
                "education_form" => ["country" => "Togo"],
                "education_remove" => "",
                "other" => $user->other_educations->toArray(),
                "other_form" => ["type" => "certification"],
                "other_remove" => "",
            ];
        }
    }

    public function render()
    {
        return view(".user-space.candidates.configurations." . $this->roadmap[$this->config])
            ->extends("user-space.layouts.base")
            ->section("user-space.base.body")
            ->layoutData([
                "user_space_title" => [
                    "a-propos" => "A Propos",
                    "contact" => "Contact",
                    "disponibilité" => "Disponibilité",
                    "diplômes-et-formations" => "Diplômes Et Formations",
                    "expériences" => "Expériences",
                    "projets" => "Projets",
                    "compétences" => "Compétences",
                    "langues" => "Langues",
                    "centres-d'intérêts" => "Centres d'Intérêts",
                ][$this->config],
            ]);
    }
}
