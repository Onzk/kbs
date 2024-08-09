<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use Livewire\Component;

class ContractPage extends Component
{
    public function render()
    {
        return view('.user-space.entreprises.contract-page')->extends('user-space.layouts.base')
        ->section('user-space.base.body')
        ->layoutData(['user_space_title' => 'Contrats',   ]);
    }
}
