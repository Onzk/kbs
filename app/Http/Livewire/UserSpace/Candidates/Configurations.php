<?php

namespace App\Http\Livewire\UserSpace\Candidates;

use Livewire\Component;

class Configurations extends Component
{
    public $config = "a-propos";

    public array $roadmap = [
        "a-propos" => "about",
        "contact" => "contact",
        "disponibilité" => "availability",
        "education" => "education",
        "expériences" => "experiences",
        "projets" => "projects",
        "compétences" => "skills",
        "langues" => "languages",
        "centres-d'intérêts" => "hobbies",
    ];


    public function mount()
    {
        if (!array_key_exists($this->config, $this->roadmap)) {
            abort(404);
        }
    }

    public function render()
    {
        return view(".user-space.candidates.configurations." . $this->roadmap[$this->config])
            ->extends("user-space.layouts.base")
            ->section("user-space.base.body")
            ->layoutData([
                "user_space_title" => [
                    "a-propos" => "A Propos",
                    "contact" => "Contact",
                    "disponibilité" => "Disponibilité",
                    "education" => "Formation",
                    "expériences" => "Expériences",
                    "projets" => "Projets",
                    "compétences" => "Compétences",
                    "langues" => "Langues",
                    "centres-d'intérêts" => "Centres d'Intérêts",
                ][$this->config],
                "is_executive" => true
            ]);
    }
}
