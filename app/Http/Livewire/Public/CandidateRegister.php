<?php

namespace App\Http\Livewire\Public;

use App\Models\User;
use Livewire\Component;
use App\Models\Candidate;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class CandidateRegister extends Component
{
    public array $state = [
        "domain"  => "Administration",
        "country" => "Togo",
    ];

    public int $step = 0;

    public function submition()
    {
        switch ($this->step) {
            case 0:
                $this->create_account();
                break;
            case 1:
                $this->set_password();
                break;
            case 2:
                $this->make_payment();
                break;
        };
    }

    public function create_account()
    {
        Validator::make($this->state, [
            "lastname" => "required|min:3",
            "firstname" => "required|min:3",
            "email" => "required|email|unique:candidates,email|unique:entreprises,email",
            "tel" => "required|min:8|unique:candidates,tel",
            "year" => "required|numeric|max:99|min:" . Config::retreive("min_year", 0),
            "country" => "required|min:2",
            "linkedin" => "url|unique:candidates,linkedin|regex:/^https:\\/\\/[a-z]{2,3}\\.linkedin\\.com\\/.*$/i",
            "domain" => "required|min:2",
        ])->validate();
        $this->state["nbyear"] = $this->state["year"];
        $this->step++;
    }

    public function set_password()
    {
        Validator::make($this->state, [
            "password" => [
                "required",
                "confirmed",
                Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(),
            ],
        ])->validate();
        $this->state["password"] = bcrypt($this->state["password"]);
        $this->step++;
    }
    public function make_payment()
    {
        // Make api request here
        sleep(5);
        $candidate = Candidate::create($this->state);
        Auth::guard("candidates")->login($candidate);
        return redirect(route('candidate-space.home'))
            ->with('success', __('Compte créé avec succès. Bienvenue dans votre espace utilisateur.'))
            ->with('other-success', __("Terminez la configuration de votre compte avant l'entretien avec les experts KAPI CONSULT."));
    }

    public function render()
    {
        return view("public.candidate-register");
    }
}
