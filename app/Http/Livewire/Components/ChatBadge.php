<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class ChatBadge extends Component
{
    public $user;

    public bool $simple = true;

    public function render()
    {
        return $this->simple ? <<<'BLADE'
            <div wire:poll>
                @if ($this->user->has_new_messages())
                    <span class="avatar-status pulse bg-success border-success"></span>
                @endif
            </div>
        BLADE :
        <<<'BLADE'
            <div wire:poll>
                @if ($this->user->has_new_messages())
                    <span class="badge bg-success text-white pulse-2 px-2 py-1 pb-2 text-xs rounded">
                        {{ $this->user->count_new_messages() }}
                    </span>
                @endif
            </div>
        BLADE;
    }
}
