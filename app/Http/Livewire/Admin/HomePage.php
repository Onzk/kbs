<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('.admin.home-page')
            ->extends('admin.layouts.base')
            ->section('admin.base.body')
            ->layoutData(['admin_space_title' => 'Accueil']);
    }
}
