<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Config;
use Livewire\Component;
use App\Models\Candidate;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CandidateBoard extends Component
{

    public array $state = [];

    public string $current_id = "";


    #[Url(except: "")]
    public $search = "";

    public function mount()
    {
        $this->reload();
    }


    public function updateCandidate()
    {
        $model = Candidate::find($this->current_id);
        if ($model)
        {
            Validator::make($this->state, [
                "lastname" => "required|min:3",
                "firstname" => "required|min:3",
                "email" => "required|email|unique:candidates,email,{$model->id},id|unique:entreprises,email",
                "tel" => "required|min:8|unique:candidates,tel,{$model->id},id",
                "country" => "required|min:2",
                "domain" => "required|min:2",
            ])->validate();
            unset($this->state["default_rate"]);
            unset($this->state["default_comment"]);
            $model->update($this->state);
            $this->reload();
            session()->flash('success', __('Modification effectuée avec succès.'));
        }
        $this->reload();
    }

    public function setDefaultMark()
    {
        $model = Candidate::find($this->current_id);
        if ($model)
        {
            Validator::make($this->state, [
                "default_comment" => "required|min:3",
                "default_rate" => "required|numeric|min:1",
            ])->validate();
            $model->update($this->state);
            $this->reload();
            session()->flash('success', __('Avis par défaut définie avec succès.'));
        }
        $this->reload();
    }

    public function updatedCurrentId()
    {
        $model = Candidate::find($this->current_id);
        if ($model)
        {
            $this->state = $model->toArray();
            if($model->default_rate == null) $this->state["default_rate"] = 1;
        }
    }

    public function switchEnabledState($id)
    {
        $model = Candidate::withTrashed()->find($id);
        if ($model)
        {
            $state =  (bool) $model->enabled;
            $model->update(['enabled' => !$state]);
            $model->refresh();
            session()->flash('success', __("Compte candidat  " . ($state ? "désactivé" : "activé") . " avec succés."));
        }
    }

    public function switchDeletedState($id)
    {
        $model = Candidate::withTrashed()->find($id);
        if ($model)
        {
            $model->update(["deleted_at" => $model->trashed() ? null : Carbon::now()]);
            session()->flash(
                'success',
                $model->trashed()
                ? __("Compte candidat récupéré avec succés.")
                : __("Compte candidat supprimé  avec succés.")
            );
        }
    }

    public function loadData()
    {
        if (strlen(trim($this->search)))
        {
            $models = collect(Candidate::withTrashed()->get());
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            })->sortBy("deleted_at");
        }
        return Candidate::withTrashed()->orderBy("deleted_at")->paginate(15);
    }

    public function reload()
    {
        $this->current_id = "";
        $this->state = [];
    }

    public function render()
    {
        return view(".admin.candidate-board")
            ->extends("admin.layouts.base")
            ->section("admin.base.body")
            ->layoutData([
                "admin_space_title" => "Planche Candidat",
            ]);
    }
}
