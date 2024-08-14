<?php

namespace App\Http\Livewire\UserSpace\Candidates;

use App\Models\Document;
use Livewire\Component;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use App\Models\OtherEducation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Configurations extends Component
{
    use WithFileUploads;

    public $photo;

    public $cv;

    public $refdocs = [];

    public $refdoc_id;

    public $realdocs = [];

    public $realdoc_id;

    public array $about_state = [];

    public array $education_state = [];

    public array $exp_state = [];

    public array $expgov_state = [];

    public array $doc_state = [];

    public array $lang_state = [];

    #[Url(keep: true)]
    public $tab = 0;

    public $config = "a-propos";

    public array $roadmap = [
        "a-propos" => "about",
        // "contact" => "contact",
        // "disponibilité" => "availability",
        "diplômes-et-certifications" => "education",
        "expériences-professionnelles" => "experiences",
        "expériences-en-gouvernance" => "exp-governance",
        "documents-et-références" => "documents",
        "langues" => "languages",
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
        return redirect(route('candidate-space.configurations', ["config" => "a-propos"]))->with("success", __("Photo de profil modifiée avec succès."));
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

    public function updateExp()
    {
        $state = $this->exp_state;
        Validator::make($state, [
            "actual_position" => "max:255",
            "actual_entreprise" => "max:255",
            "description" => "required|min:50",
        ])->validate();
        $user = Auth::guard("candidates")->user();
        $exp = Experience::init($user);
        $exp->update($state);
        $user->refresh();
        session()->flash("success", __("Expériences sauvegardées avec succès."));
    }

    public function saveSkillOrDomain($type)
    {
        $state = $this->exp_state[$type . "_form"];
        Validator::make($state, [
            "label" => "required|min:4",
            "percentage" => "required|numeric|min:1|max:100",
        ])->validate();
        $user = Auth::guard("candidates")->user();
        $this->exp_state[$type][] = $state;
        $this->exp_state[$type] =  array_values($this->exp_state[$type]);
        $exp = Experience::init($user);
        $exp->update([$type => json_encode($this->exp_state[$type], true)]);
        $user->refresh();
        $this->exp_state[$type . "_form"] = [];
        $this->reload();
        session()->flash("success", __("Ajout effectué avec succès."));
    }

    public function updateSkillOrDomain($type)
    {
        $user = Auth::guard("candidates")->user();
        $remove_ids = explode(" ", $this->exp_state[$type . "_remove"]);
        foreach ($remove_ids as $id) {
            unset($this->exp_state[$type][$id]);
        }
        $this->exp_state[$type] =  array_values($this->exp_state[$type]);
        $exp = Experience::init($user);
        $exp->update([$type => json_encode($this->exp_state[$type], true)]);
        $user->refresh();
        $this->reload();
        session()->flash("success", __("Modifications sauvegardées avec succès."));
    }

    public function updateExpGov()
    {
        $state = $this->expgov_state;
        Validator::make($state, [
            "governance_experience" => "required|min:50",
            "motivation" => "required|min:50",
        ])->validate();
        $user = Auth::guard("candidates")->user();
        $exp = Experience::init($user);
        $exp->update($state);
        $user->refresh();
        session()->flash("success", __("Expériences en matière de gouvernance, sauvegardées avec succès."));
    }

    public function updatedCv()
    {
        $this->validate([
            'cv' => 'max:4096', // 4MB Max
        ]);
        if (!Str::endsWith(strtolower($this->cv->getRealPath()), ["pdf"])) {
            session()->flash("error", __("Type de document invalide. Format PDF uniquement."));
            return;
        }
        $user = Auth::guard("candidates")->user();
        $docname = $user->id . ".pdf";
        $path = "storage/candidate/cv/" . $docname;
        $this->cv->storeAs("public/candidate/cv", $docname);
        Document::init($user)->update(["cv" => $path]);
        File::delete($this->cv->getRealPath());
        $user->refresh();
        session()->flash("success", __("CV chargé avec succès."));
    }

    public function updatedRefdocs()
    {
        $this->validate([
            "refdocs.{$this->refdoc_id}" => "max:4096", // 4MB Max
        ]);
        if (!Str::endsWith(strtolower($this->refdocs[$this->refdoc_id]->getRealPath()), ["pdf"])) {
            session()->flash("error", __("Type de document invalide. Format PDF uniquement."));
            return;
        }
        $user = Auth::guard("candidates")->user();
        $references = $user->get_references();
        $docname = $this->refdocs[$this->refdoc_id]->getClientOriginalName();
        $path = "storage/candidate/references/{$user->id}/{$docname}";
        $id = array_search($path, $references);
        if (gettype($id) == "integer" and $id !== $this->refdoc_id) {
            session()->flash("error", __("This file has already been uploaded."));
            return;
        }
        $this->refdocs[$this->refdoc_id]->storeAs("public/candidate/references/{$user->id}", $docname);
        $doc = Document::init($user);
        if (isset($references[$this->refdoc_id])) {
            $oldPath = str_replace("storage", "public", $references[$this->refdoc_id]);
            if (Storage::fileExists($oldPath)) File::delete($references[$this->refdoc_id]);
        }
        $references[$this->refdoc_id] = $path;
        $doc->update(["references" => json_encode($references, true)]);
        try {
            File::delete($this->refdocs[$this->refdoc_id]->getRealPath());
        } catch (\Exception $ex) {
        }
        $user->refresh();
        session()->flash("success", __("Document chargé avec succès."));
    }

    public function updatedRealdocs()
    {
        $this->validate([
            "realdocs.{$this->realdoc_id}" => "max:4096", // 4MB Max
        ]);
        if (!Str::endsWith(strtolower($this->realdocs[$this->realdoc_id]->getRealPath()), ["pdf"])) {
            session()->flash("error", __("Type de document invalide. Format PDF uniquement."));
            return;
        }
        $user = Auth::guard("candidates")->user();
        $realisations = $user->get_realisations();
        $docname = $this->realdocs[$this->realdoc_id]->getClientOriginalName();
        $path = "storage/candidate/realisations/{$user->id}/{$docname}";
        $id = array_search($path, $realisations);
        if (gettype($id) == "integer" and $id !== $this->realdoc_id) {
            session()->flash("error", __("This file has already been uploaded."));
            return;
        }
        $this->realdocs[$this->realdoc_id]->storeAs("public/candidate/realisations/{$user->id}", $docname);
        $doc = Document::init($user);
        if (isset($realisations[$this->realdoc_id])) {
            $oldPath = str_replace("storage", "public", $realisations[$this->realdoc_id]);
            if (Storage::fileExists($oldPath)) File::delete($realisations[$this->realdoc_id]);
        }
        $realisations[$this->realdoc_id] = $path;
        $doc->update(["realisations" => json_encode($realisations, true)]);
        try {
            File::delete($this->realdocs[$this->realdoc_id]->getRealPath());
        } catch (\Exception $ex) {
        }
        $user->refresh();
        session()->flash("success", __("Document chargé avec succès."));
    }

    public function deleteDoc($type, $id_val)
    {
        try {
            $user = Auth::guard("candidates")->user();
            $doc = Document::init($user);
            $docs = $user->{"get_$type"}();
            $id = $this->{$id_val . "doc_id"};
            if (isset($docs[$id])) {
                $oldPath = str_replace("storage", "public", $docs[$id]);
                if (Storage::fileExists($oldPath)) File::delete($docs[$id]);
            }
            unset($docs[$id]);
            $doc->update([$type => json_encode($docs, true)]);
            $user->refresh();
            session()->flash("success", __("Doucment supprimé avec succès."));
        } catch (\Exception $ex) {
        }
    }

    public function saveLink()
    {
        $state = $this->doc_state["link_form"];
        Validator::make($state, [
            "link" => "required|url",
        ])->validate();
        $user = Auth::guard("candidates")->user();
        $this->doc_state["link"][] = $state;
        $this->doc_state["link"] =  array_values($this->doc_state["link"]);
        $doc = Document::init($user);
        $doc->update(["links" => json_encode($this->doc_state["link"], true)]);
        $user->refresh();
        $this->doc_state["link_form"] = [];
        $this->reload();
        session()->flash("success", __("Lien ajouté avec succès."));
    }

    public function updateLink()
    {
        $user = Auth::guard("candidates")->user();
        $remove_ids = explode(" ", $this->doc_state["link_remove"]);
        foreach ($remove_ids as $id) {
            unset($this->doc_state["link"][$id]);
        }
        $this->doc_state["link"] =  array_values($this->doc_state["link"]);
        $doc = Document::init($user);
        $doc->update(["links" => json_encode($this->doc_state["link"], true)]);
        $user->refresh();
        $this->reload();
        session()->flash("success", __("Modifications sauvegardées avec succès."));
    }


    public function saveLang()
    {
        $state = $this->lang_state["lang_form"];
        Validator::make($state, [
            "title" => "required|min:2",
            "speaking" => "required|numeric",
            "reading" => "required|numeric",
            "writing" => "required|numeric",
        ])->validate();
        $user = Auth::guard("candidates")->user();
        Language::create(["candidate_id" => $user->id, ...$state]);
        $user->refresh();
        $this->reload();
        session()->flash("success", __("Langue ajoutée avec succès."));
    }

    public function updateLang()
    {
        $user = Auth::guard("candidates")->user();
        $languages = $user->languages;
        for ($i = 0; $i < count($languages); $i++) {
            $languages[$i]->update($this->lang_state["lang"][$i]);
        }
        $remove_ids = explode(" ", $this->lang_state["lang_remove"]);
        try {
            Language::destroy($remove_ids);
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
        } elseif ($this->config == "diplômes-et-certifications") {
            $this->education_state = [
                "education" => $user->educations->toArray(),
                "education_form" => ["country" => "Togo"],
                "education_remove" => "",
                "other" => $user->other_educations->toArray(),
                "other_form" => ["type" => "certification"],
                "other_remove" => "",
            ];
        } elseif ($this->config == "expériences-professionnelles") {
            $this->exp_state = [
                "actual_position" => $user->experience()?->actual_position,
                "actual_entreprise" => $user->experience()?->actual_entreprise,
                "description" => $user->experience()?->description,
                "skills" => $user->skills(),
                "skills_form" => [],
                "skills_remove" => "",
                "domains" => $user->domains(),
                "domains_form" => [],
                "domains_remove" => "",
            ];
            $this->dispatch("quillReload", ["contents" =>  $this->exp_state['description']]);
        } elseif ($this->config == "expériences-en-gouvernance") {
            $this->expgov_state = [
                "governance_experience" => $user->experience()?->governance_experience,
                "motivation" => $user->experience()?->motivation,
            ];
            $this->dispatch("multiQuillReload", [
                "contents0" =>  $this->expgov_state['governance_experience'],
                "contents1" =>  $this->expgov_state['motivation'],
            ]);
        } elseif ($this->config == "documents-et-références") {
            $this->doc_state = [
                "link" => $user->get_links(),
                "link_form" => [],
                "link_remove" => "",
            ];
        }elseif($this->config == "langues"){
            $this->lang_state = [
                "lang" => $user->languages?->toArray() ?? [],
                "lang_form" => [
                    "title" => "French (fre)",
                    "speaking" => 3,
                    "reading" => 3,
                    "writing" => 3,
                ],
                "lang_remove" => "",
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
                    "diplômes-et-certifications" => "Diplômes Et Formations",
                    "expériences-professionnelles" => "Expériences Professionnelles",
                    "expériences-en-gouvernance" => "Projets",
                    "documents-et-références" => "Documents",
                    "langues" => "Langues",
                    "centres-d'intérêts" => "Centres d'Intérêts",
                ][$this->config],
            ]);
    }
}
