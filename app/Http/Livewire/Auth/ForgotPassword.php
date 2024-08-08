<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function render()
    {
        return view('auth.forgot-password')->extends('layouts.auth')
        ->section('auth.body')->layoutData([
            "auth_title" => "Mot de passe oublié",
            "auth_subtitle" => "Renseignez vos informations d'identification."
        ]);
    }
}
