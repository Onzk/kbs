<?php

namespace App\Http\Livewire\Public;

use Livewire\Component;
use App\Models\Entreprise;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class EntrepriseRegister extends Component
{
    public array $state = [
        "sector" => "Industrie",
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
            "name" => "required|min:3",
            "sector" => "required|min:3",
            "size" => "required|numeric",
            "hq_address" => "required|min:5|unique:entreprises,hq_address",
            "website" => "url|min:2|unique:entreprises,website",
            "email" => "required|email|unique:entreprises,email|unique:candidates,email",
            "description" => "required",
        ])->validate();
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
        sleep(1);
        $candidate = Entreprise::create($this->state);
        Auth::guard("entreprises")->login($candidate);
        return redirect(route('entreprise-space.home'))
            ->with('success', __('Compte créé avec succès. Bienvenue dans votre espace utilisateur.'))
            ->with('other-success', __("Terminez la configuration de votre compte avant l'entretien avec les experts KAPI CONSULT."));
    }

    public function render()
    {
        return view("public.entreprise-register");
    }
}
