<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Contract;
use App\Models\Candidate;
use App\Models\Entreprise;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\ContractTemplate;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ContractBoard extends Component
{
    use WithFileUploads;

    public $file;

    public array $state = [];

    public string $current_id = "";

    public string $search_candidate = "";

    public string $search_entreprise = "";

    public string $search = "";

    public function mount()
    {
        $this->reload();
    }


    public function updatedFile()
    {
        if (!Str::endsWith(strtolower($this->file->getRealPath()), [".pdf", ".doc", ".docx"]))
        {
            session()->flash("error", __("Type de fichier invalide. PDF/DOC/DOCX uniquement."));
            return;
        }
        $model = Contract::find($this->current_id);
        if ($model)
        {
            $value = explode(".", $this->file->getRealPath());
            $fileName = "admin_$model->id." . end($value);
            $path = "storage/contract/$fileName";
            $this->file->storeAs("public/contract", $fileName);
            File::delete($this->file->getRealPath());
            $model->update(["admin_file" => $path]);
            $model->refresh();
            return redirect(route('admin-space.contract-board'))
                ->with("success", __("Document modifié avec succès."));
        }
        $this->reload();
    }

    public function updatedCurrentId()
    {
        $model = Contract::withTrashed()->find($this->current_id);
        if ($model)
        {
            $this->state = $model->toArray();
        }
    }

    public function updatedSearchCandidate()
    {
        $this->state["candidate_id"] = Candidate::firstWhere("email", $this->search_candidate)?->id;
    }

    public function updatedSearchEntreprise()
    {
        $this->state["entreprise_id"] = Entreprise::firstWhere("email", $this->search_entreprise)?->id;
    }

    public function addOrUpdateModel()
    {
        $model = Contract::withTrashed()->find($this->current_id);
        if ($model)
        {
            Validator::make($this->state, [
                "title" => "required|min:4|max:120",
                "candidate_id" => "required|exists:candidates,id",
                "entreprise_id" => "required|exists:entreprises,id",
                "status" => "required|in:pending,finished,aborted,ongoing",
            ])->validate();
            $model->update($this->state);
            session()->flash('success', __('Contrat modifié avec succès.'));
        } else
        {
            Validator::make($this->state, [
                "title" => "required|min:4|max:120",
                "candidate_id" => "required|exists:candidates,id",
                "entreprise_id" => "required|exists:entreprises,id",
            ])->validate();
            $this->state["status"] = "pending";
            Contract::create($this->state);
            session()->flash('success', __('Contrat créé avec succès.'));
        }
        $this->reload();
    }

    public function switchDeletedState($id)
    {
        $model = Contract::withTrashed()->find($id);
        if ($model)
        {
            $model->update(["deleted_at" => $model->trashed() ? null : Carbon::now()]);
            session()->flash(
                'success',
                $model->trashed()
                ? __("Contrat supprimé avec succés.")
                : __("Contrat récupéré avec succés.")
            );
        }
    }

    public function loadData()
    {
        if (strlen(trim($this->search)))
        {
            $models = collect(Contract::withTrashed()->get());
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                $model_string .= " " . join(" ", array_values($model->entreprise->toArray()));
                $model_string .= " " . join(" ", array_values($model->candidate->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            })->sortBy("deleted_at");
        }
        return Contract::withTrashed()->orderBy("deleted_at")->paginate(15);
    }

    public function reload()
    {
        $this->current_id = "";
        $this->search_entreprise = "";
        $this->search_candidate = "";
        $this->state = [];
    }

    public function render()
    {
        return view('.admin.contract-board')->extends('admin.layouts.base')
            ->section('admin.base.body')
            ->layoutData(['admin_space_title' => 'Contrats']);
    }
}
