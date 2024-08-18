<?php

namespace App\Http\Livewire\Public;

use App\Models\Question;
use Livewire\Component;
use App\Models\Candidate;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class QuestionAnswer extends Component
{
    public array $state = [];

    public function askQuestion()
    {
        Validator::make($this->state, [
            "lastname" => "required|min:3",
            "firstname" => "required|min:3",
            "email" => "required|email",
            "title" => "required|min:5|unique:questions,title",
            "description" => "required|max:255",
        ])->validate();
        Question::create($this->state);
        $this->state = [];
        session()->flash("success", "Question enregistrée avec succés. Un retour vous sera fait dans les plus brefs délais. Merci.");
    }

    public function render()
    {
        return view("public.question-answer");
    }
}
