<?php

namespace App\Http\Livewire\UserSpace\Entreprises;

use App\Models\Chat;
use Livewire\Component;
use App\Models\Position;
use App\Models\Candidate;
use Livewire\Attributes\Url;
use Livewire\Attributes\Session;
use Illuminate\Support\Facades\Auth;

class SearchPage extends Component
{

    #[Url(except: "")]
    // #[Session(key: "searchProfil")]
    public string $search = "";

    public string $description = "";

    public string $choosen = "";

    public ?Position $position = null;

    public ?Candidate $candidate = null;

    public function askContact()
    {
        if ($this->candidate and $this->position) {
            $this->validate(["description" => "min:2"]);
            $user = Auth::guard('entreprises')->user();
            $this->description = trim($this->description);
            $this->description = strlen($this->description) ? " Description de la demande : {$this->description}" : " Aucune description.";
            Chat::create([
                "entreprise_id" => $user->id,
                "content" => "[DEMANDE DE PRISE DE CONTACT] : Je souhaite prendre contact avec le candidat : {$this->candidate->fullname()}, pour le poste : {$this->position->title}.{$this->description}",
                "hidden" => json_encode([
                    "candidate" => $this->candidate->toArray(),
                    "position" => $this->position->toArray(),
                ], true),
            ]);
            return redirect(route('entreprise-space.discussions'))
                ->with("success", __("Demande de prise de contact, envoyé avec succès. Un retour vous sera fait dans les plus brefs délais. Merci."));
        }
    }

    public function backToSearch()
    {
        $this->choosen = "";
        $this->candidate = null;
    }

    public function updatedSearch()
    {
        $this->position = Position::findOr(trim($this->search));
    }

    public function updatedChoosen()
    {
        $this->position = Position::findOr(trim($this->search));
        $this->candidate = Candidate::findOr(trim($this->choosen));
    }

    public function retreive_matched()
    {
        if($this->position){
            $candidates = collect(Candidate::all()->where("enabled", true))
                ->filter(fn(Candidate $candidate) => $candidate->matchesWith($this->position));
            return $candidates;
        }
        return [];
    }

    public function render()
    {
        if ($this->candidate and $this->position) {
            return view('user-space.entreprises.executive-profil-page', [
                'candidate' => $this->candidate,
                'profil' => $this->position,
            ])
                ->extends('user-space.layouts.base')
                ->section('user-space.base.body')
                ->layoutData(['user_space_title' => $this->candidate->fullname()]);
        }
        return view('.user-space.entreprises.search-page', [
            'matches' => $this->retreive_matched()
        ])->extends('user-space.layouts.base')
            ->section('user-space.base.body')
            ->layoutData(['user_space_title' => 'Recherche',]);
    }
}
