<?php

namespace App\Http\Livewire\UserSpace\Candidates;

use App\Models\Chat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DiscussionPage extends Component
{
    public string $message = "";

    public function send()
    {
        if (strlen(trim($this->message))) {
            $user = Auth::guard('candidates')->user();
            Chat::create([
                "candidate_id" => $user->id,
                "content" => trim($this->message),
            ]);
            $this->message = "";
        }
    }

    public function render()
    {
        return view('.user-space.candidates.discussion-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Discussions',]);
    }
}
