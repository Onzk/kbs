<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('auth.login')->extends('layouts.auth')
        ->section('auth.body')->layoutData([
            "auth_title" => "Se connecter",
            "auth_subtitle" => "Renseignez vos informations de connexion."
        ]);
    }
}
