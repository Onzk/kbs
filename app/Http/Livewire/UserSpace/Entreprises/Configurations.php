<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use Livewire\Component;

class Configurations extends Component
{
    public $config = "a-propos";

    public array $roadmap = [
        "a-propos" => "about",
        "contact" => "contact",
    ];


    public function mount()
    {
        if (!array_key_exists($this->config, $this->roadmap)) {
            abort(404);
        }
    }

    public function render()
    {
        return view(".user-space.entreprises.configurations." . $this->roadmap[$this->config])
            ->extends("user-space.layouts.base")
            ->section("user-space.base.body")
            ->layoutData([
                "user_space_title" => [
                    "a-propos" => "A Propos",
                    "contact" => "Contact",
                ][$this->config],
                "is_executive" => false
            ]);
    }
}
