<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Entreprise;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EntrepriseBoard extends Component
{

    public array $state = [];

    public string $current_id = "";


    #[Url(except: "")]
    public $search = "";

    public function mount()
    {
        $this->reload();
    }


    public function updateEntreprise()
    {
        $model = Entreprise::find($this->current_id);
        if ($model)
        {
            Validator::make($this->state, [
                "name" => "required|min:3",
                "email" => "required|email|unique:entreprises,email,{$model->id},id|unique:entreprises,email,{$model->id},id",
            ])->validate();
            $model->update($this->state);
            $this->reload();
            session()->flash('success', __('Modifications effectuées avec succès.'));
        }
        $this->reload();
    }

    public function updatedCurrentId()
    {
        $model = Entreprise::find($this->current_id);
        if ($model)
        {
            $this->state = $model->toArray();
        }
    }

    public function switchEnabledState($id)
    {
        $model = Entreprise::withTrashed()->find($id);
        if ($model)
        {
            $state = (bool) $model->enabled;
            $model->update(['enabled' => !$state]);
            $model->refresh();
            session()->flash('success', __("Compte entreprise " . ($state ? "désactivé" : "activé") . " avec succés."));
        }
    }

    public function switchDeletedState($id)
    {
        $model = Entreprise::withTrashed()->find($id);
        if ($model)
        {
            $model->update(["deleted_at" => $model->trashed() ? null : Carbon::now()]);
            session()->flash(
                'success',
                $model->trashed()
                ? __("Compte entreprise supprimé avec succés.")
                : __("Compte entreprise récupéré avec succés.")
            );
        }
    }

    public function loadData()
    {
        if (strlen(trim($this->search)))
        {
            $models = collect(Entreprise::withTrashed()->get());
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            })->sortBy("deleted_at");
        }
        return Entreprise::withTrashed()->orderBy("deleted_at")->paginate(15);
    }

    public function reload()
    {
        $this->current_id = "";
        $this->state = [];
    }

    public function render()
    {
        return view(".admin.entreprise-board")
            ->extends("admin.layouts.base")
            ->section("admin.base.body")
            ->layoutData([
                "admin_space_title" => "Planche Entreprise",
            ]);
    }
}
