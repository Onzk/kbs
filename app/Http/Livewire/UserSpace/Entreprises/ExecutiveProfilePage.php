<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use Livewire\Component;
use App\Models\Candidate;
use App\Models\Position;
use Livewire\Attributes\Url;

class ExecutiveProfilePage extends Component
{
    #[Url(keep: true, except: "", as: "candidat")]
    private $candidate_id = "";
    #[Url(keep: true, except: "", as: "profil")]
    private $position_id = "";

    public Position $position;

    public Candidate $candidate;

    private string $name = "";

    public function mount()
    {
        $this->candidate =  Candidate::find($this->candidate_id);
        $this->position =  Position::find($this->position_id);
        if ($this->candidate) {
            $this->name = $this->candidate->fullname();
        } else {
            return redirect(route('entreprise-space.search', ['search' => $this->position->id]));
        }
    }


    public function render()
    {
        return view('user-space.entreprises.executive-profil-page')
            ->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => $this->name]);
    }
}
