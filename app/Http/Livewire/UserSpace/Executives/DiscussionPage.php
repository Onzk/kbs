<?php

namespace App\Http\Livewire\UserSpace\Executives;

use Livewire\Component;

class DiscussionPage extends Component
{
    public function render()
    {
        return view('.user-space.executives.discussion-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Discussions', 'is_executive' => true]);
    }
}
