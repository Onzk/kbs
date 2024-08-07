<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use Livewire\Component;

class ExecutiveProfilePage extends Component
{
    public function render()
    {
        return view('user-space.entreprises.executive-profil-page')
        ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'GADJI Maturin Kossi', 'is_executive' => false]);
    }
}
