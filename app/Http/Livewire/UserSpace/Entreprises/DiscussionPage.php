<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use App\Models\Chat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DiscussionPage extends Component
{
    public string $message = "";

    public function send()
    {
        if (strlen(trim($this->message))) {
            $user = Auth::guard("entreprises")->user();
            Chat::create([
                "entreprise_id" => $user->id,
                "content" => trim($this->message),
            ]);
            $this->message = "";
        }
    }
    public function render()
    {
        return view('.user-space.entreprises.discussion-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Discussions']);
    }
}
