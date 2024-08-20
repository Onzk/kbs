<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use Livewire\Component;
use App\Models\Contract;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ContractPage extends Component
{
    use WithFileUploads;

    public $file;

    public array $state = [];

    public string $current_id = "";

    public string $search = "";

    public function mount()
    {
        $this->reload();
    }

    public function setMarkReview()
    {
        $model = Contract::find($this->current_id);
        if ($model)
        {
            Validator::make($this->state, [
                "comment" => "required|min:3",
                "rate" => "required|numeric|min:1",
                "status" => "required|in:finished,aborted,ongoing",
            ])->validate();
            $model->update($this->state);
            $this->reload();
            session()->flash('success', __('Avis publié avec succès.'));
        }
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
            $fileName = "entreprise_$model->id." . end($value);
            $path = "storage/contract/$fileName";
            $this->file->storeAs("public/contract", $fileName);
            File::delete($this->file->getRealPath());
            $model->update(["entreprise_file" => $path]);
            $model->refresh();
            return redirect(route('entreprise-space.contracts'))
                ->with("success", __("Document modifié avec succès."));
        }
        $this->reload();
    }

    public function updatedCurrentId()
    {
        $model = Contract::find($this->current_id);
        if ($model)
        {
            $this->state = $model->toArray();
        }
    }

    public function loadData()
    {
        $user = Auth::guard("entreprises")->user();
        $models = $user->contracts;
        if (strlen(trim($this->search)))
        {
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                $model_string .= " " . join(" ", array_values($model->entreprise->toArray()));
                $model_string .= " " . join(" ", array_values($model->candidate->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            });
        }
        return $models;
    }
    public function reload()
    {
        $this->current_id = "";
        $this->state = [];
    }
    public function render()
    {
        return view('.user-space.entreprises.contract-page')->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Contrats']);
    }
}
