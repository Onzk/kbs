<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use App\Models\Chat;
use Livewire\Component;
use App\Models\Position;
use App\Models\Candidate;
use Illuminate\Support\Str;
use Livewire\Attributes\Url;
use App\Models\ContractTemplate;
use Livewire\Attributes\Session;
use Illuminate\Support\Facades\Auth;
use Storage;

class ContractTemplatePage extends Component
{

    #[Url(except: "", as: "q")]
    public string $search = "";


    public function buy($id)
    {
        $model = ContractTemplate::find($id);
        if ($model)
        {
            // API REQUEST
            sleep(5);
            $buyers = $model->get_buyers();
            $buyers[] = Auth::guard("entreprises")->id();
            $model->update(["buyers" => json_encode(array_unique($buyers), true)]);
            session()->flash("success", __("Modèle acheté avec succès."));
            return $model->download();
        }
    }

    public function download($id)
    {
        $model = ContractTemplate::find($id);
        if ($model)
        {
            return $model->download();
        }
    }

    public function loadData()
    {
        $models = ContractTemplate::all()->whereNotNull("demo")->whereNotNull("file");
        if (strlen(trim($this->search)))
        {
            return $models->filter(function ($model) {
                $model_string = join(" ", array_values($model->toArray()));
                return Str::contains(strtolower($model_string), explode(" ", strtolower(trim($this->search))));
            });
        }
        return $models;
    }

    public function render()
    {
        return view('.user-space.entreprises.contract-template-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Modéles de Contrat',]);
    }
}
