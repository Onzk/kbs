<?php

namespace App\Http\Livewire\UserSpace\Candidates;

use Livewire\Component;

class ContractPage extends Component
{
    public function render()
    {
        return view('.user-space.candidates.contract-page')->extends('user-space.layouts.base')
        ->section('user-space.base.body')
        ->layoutData(['user_space_title' => 'Contrats',  ]);
    }
}
