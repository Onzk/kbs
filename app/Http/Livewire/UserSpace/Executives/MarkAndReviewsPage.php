<?php

namespace App\Http\Livewire\UserSpace\Executives;

use Livewire\Component;

class MarkAndReviewsPage extends Component
{
    public function render()
    {
        return view('.user-space.executives.mark-and-reviews-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Notes & Avis', 'is_executive' => true]);
    }
}
