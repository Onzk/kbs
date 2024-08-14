<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\Candidate;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public string $email = "";
    public string $password = "";

    public function login()
    {
        $credentials = [
            "email" => $this->email,
            "password" => $this->password,
        ];
        if (Auth::guard('candidates')->attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended("/espace-candidat");
        }
        if (Auth::guard('entreprises')->attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended("/espace-entreprise");
        }
        if (Auth::attemptWhen($credentials, fn(User $model) => $model->enabled)) {
            session()->regenerate();
            return redirect()->intended("/espace-administrateur");
        }
        session()->flash("error", __("Email ou mot de passe errorné(s)."));
    }

    public function render()
    {
        return view('auth.login')->extends('layouts.auth')
            ->section('auth.body')->layoutData([
                "auth_title" => "Se connecter",
                "auth_subtitle" => "Renseignez vos informations de connexion."
            ]);
    }
}
