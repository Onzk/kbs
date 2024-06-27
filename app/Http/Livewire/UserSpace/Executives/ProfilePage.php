<?php

namespace App\Http\Livewire\UserSpace\Executives;

use Livewire\Component;

class ProfilePage extends Component
{
    public function render()
    {
        return view('.user-space.executives.profile-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Profil', 'is_executive' => true]);
    }
}
