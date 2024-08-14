<?php

use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Controllers\UserSpaceController;
use App\Http\Livewire\UserSpace\Candidates\Configurations As CandidatesConfigurations;
use App\Http\Livewire\UserSpace\Candidates\HomePage As CandidatesHomePage;
use App\Http\Livewire\UserSpace\Candidates\ProfilePage as CandidatesProfilePage;
use App\Http\Livewire\UserSpace\Candidates\ContractPage As CandidatesContractPage;
use App\Http\Livewire\UserSpace\Candidates\DiscussionPage As CandidatesDiscussionPage;
use App\Http\Livewire\UserSpace\Candidates\MarkAndReviewsPage As CandidatesMarkAndReviewsPage;
use App\Http\Livewire\UserSpace\Entreprises\Configurations As EntreprisesConfigurations;
use App\Http\Livewire\UserSpace\Entreprises\HomePage As EntreprisesHomePage;
use App\Http\Livewire\UserSpace\Entreprises\ProfilePage as EntreprisesProfilePage;
use App\Http\Livewire\UserSpace\Entreprises\ContractPage As EntreprisesContractPage;
use App\Http\Livewire\UserSpace\Entreprises\DiscussionPage As EntreprisesDiscussionPage;
use App\Http\Livewire\UserSpace\Entreprises\SearchPage As EntreprisesSearchPage;
use App\Http\Livewire\UserSpace\Entreprises\ExecutiveProfilePage As EntreprisesExecutiveProfilePage;

Route::controller(PublicController::class)->name("public.")->prefix("/")->group(
    function () {
        Route::prefix("/")->name("home.")->group(function () {
            Route::get("/", "index")->name("index");
            Route::get("/presentation-de-kapi-consult", "kapi_presentation")->name("kapi-presentation");
            Route::get("/presentation-de-kbs", "kbs_presentation")->name("kbs-presentation");
            Route::get("/informations-clés", "key_information")->name("key-information");
            Route::get("/candidats", "candidates")->name("candidates");
            Route::get("/candidats", "candidates")->name("candidates");
            Route::get("/entreprises", "entreprises")->name("entreprises");
        });
        Route::prefix("/a-propos")->name("about.")->group(function () {
            Route::get("mission-vision-valeurs", "mvv")->name("mvv");
            Route::get("équipe", "teams")->name("teams");
        });
        Route::prefix("/media-et-nouvelle")->name("media-news.")->group(function () {
            Route::get("/webinaires", "webinaries")->name("webinaries");
            Route::get("/questions-réponses", "questions")->name("questions");
            Route::get("/blog", "blog")->name("blog");
        });
        Route::get("/recrutement", "recruitment")->name("recruitment");
        Route::get("/faqs", "faqs")->name("faqs");
        Route::get("/espace-utilisateur", "user_space")->name("user-space");
        Route::get("/protection-de-données", "data_protection")->name("data-protection");
    }
);

Route::middleware(["guest:web", "guest:candidates", "guest:entreprises"])
    ->controller(UserSpaceController::class)->prefix("/")->group(
    function () {
        Route::get("/se-connecter", Login::class)->name("login");
        Route::get("/mot-de-passe-oublie", ForgotPassword::class)->name("forgot_password");
    }
);
Route::get("/se-déconnecter", [UserSpaceController::class, "logout"])->name("logout");

Route::middleware(["auth:candidates"])
    ->controller(UserSpaceController::class)->name("candidate-space.")->prefix("/espace-candidat/")->group(
    function () {
        Route::get("/", CandidatesProfilePage::class)->name("index");
        Route::get("/profil", CandidatesProfilePage::class)->name("home");
        Route::get("/discussions", CandidatesDiscussionPage::class)->name("discussions");
        Route::get("/contrats", CandidatesContractPage::class)->name("contracts");
        Route::get("/notes-et-avis", CandidatesMarkAndReviewsPage::class)->name("mark_and_reviews");
        Route::get("/configurations/{config}", CandidatesConfigurations::class)->name("configurations");

        Route::get("/politique-de-confidentialité", fn() => view("user-space.candidates.privacy-policy-page"))->name("privacy_policy");
        Route::get("/condition-d-utilisation", fn() => view("user-space.candidates.terms-of-use-page"))->name("terms_of_use");
    }
);

Route::middleware("auth:entreprises")
    ->controller(UserSpaceController::class)->name("entreprise-space.")->prefix("/espace-entreprise/")->group(
    function () {
        Route::get("/", EntreprisesProfilePage::class)->name("index");
        Route::get("/accueil", EntreprisesProfilePage::class)->name("home");
        Route::get("/profil", EntreprisesProfilePage::class)->name("profile");
        Route::get("/discussions", EntreprisesDiscussionPage::class)->name("discussions");
        Route::get("/contrats", EntreprisesContractPage::class)->name("contracts");
        Route::get("/recherche", EntreprisesSearchPage::class)->name("search");
        Route::get("/recherche/gadji-maturin-kossi", EntreprisesExecutiveProfilePage::class)->name("executive_profile");
        Route::get("/configurations/{config}", EntreprisesConfigurations::class)->name("configurations");

        Route::get("/politique-de-confidentialité", fn() => view("user-space.entreprises.privacy-policy-page"))->name("en.privacy_policy");
        Route::get("/condition-d-utilisation", fn() => view("user-space.entreprises.terms-of-use-page"))->name("en.terms_of_use");
    }
);
