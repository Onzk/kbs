<?php

namespace App\Http\Livewire\UserSpace\Executives;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('.user-space.executives.home-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Accueil', 'is_executive' => true]);
    }
}
