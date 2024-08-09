<?php

namespace App\Http\Livewire\UserSpace\Candidates;

use App\Models\Post;
use Livewire\Component;
use App\Models\Webinary;

class HomePage extends Component
{
    public function render()
    {
        return view('.user-space.candidates.home-page', [
            "webinaries" => Webinary::latest()->take(3)->orderByDesc("created_at"),
            "posts" => Post::latest()->take(4)->orderByDesc("created_at"),
        ])
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Accueil']);
    }
}
