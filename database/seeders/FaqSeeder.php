<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create(["question" => "Quand recruter des administrateurs ?", "answer" => ""]);
        Faq::create(["question" => "Pourquoi recruter des administrateurs en Afrique ?", "answer" => ""]);
        Faq::create(["question" => "Quel est notre taux de placement ?", "answer" => ""]);
        Faq::create(["question" => "Quel est le temps d'insertion par poste ?", "answer" => ""]);
        Faq::create(["question" => "Combien d'entreprises clientes KBS possède ?", "answer" => ""]);
        Faq::create(["question" => "Quelles sont les références de KBS ?", "answer" => ""]);
        Faq::create(["question" => "Y a t-il des profils publics ?", "answer" => ""]);
        Faq::create(["question" => "Comment gérer les conflits d'intérêts ?", "answer" => ""]);
        Faq::create(["question" => "Quelle est la rémunération et la durée des positions sur la plateforme ?", "answer" => ""]);
        Faq::create(["question" => "Comment se présente la plateforme ?", "answer" => ""]);
        Faq::create(["question" => "Quels les délais ?", "answer" => ""]);
        Faq::create(["question" => "Quelle est la durée de l'accord ?", "answer" => ""]);
        Faq::create(["question" => "Quelle est l'adresse de la société ?", "answer" => ""]);
    }
}
