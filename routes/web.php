<?php

use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserSpaceController;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\UserSpace\Executives\DiscussionPage As ExecutivesDiscussionPage;
use App\Http\Livewire\UserSpace\Executives\HomePage As ExecutivesHomePage;

Route::controller(PublicController::class)->name('public.')->prefix('/')->group(
    function () {
        Route::prefix('/')->name('home.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/presentation-de-kapi-consult', 'kapi_presentation')->name('kapi-presentation');
            Route::get('/presentation-de-kbs', 'kbs_presentation')->name('kbs-presentation');
            Route::get('/informations-clés', 'key_information')->name('key-information');
            Route::get('/administrateurs', 'executives')->name('executives');
            Route::get('/entreprises', 'entreprises')->name('entreprises');
        });
        Route::prefix('/a-propos')->name('about.')->group(function () {
            Route::get('mission-vision-valeurs', 'mvv')->name('mvv');
            Route::get('équipe', 'teams')->name('teams');
        });
        Route::prefix('/media-et-nouvelle')->name('media-news.')->group(function () {
            Route::get('/webinaires', 'webinaries')->name('webinaries');
            Route::get('/questions-réponses', 'questions')->name('questions');
            Route::get('/blog', 'blog')->name('blog');
        });
        Route::get('/recrutement', 'recruitment')->name('recruitment');
        Route::get('/faqs', 'faqs')->name('faqs');
        Route::get('/espace-utilisateur', 'user_space')->name('user-space');
        Route::get('/protection-de-données', 'data_protection')->name('data-protection');
    }
);
Route::controller(UserSpaceController::class)->name('user-space.')->prefix('/espace-utilisateur/')->group(
    function () {
        Route::get('/', ExecutivesHomePage::class)->name('index');
        Route::get('/accueil', ExecutivesHomePage::class)->name('home');
        Route::get('/discussions', ExecutivesDiscussionPage::class)->name('discussions');
        Route::get('/se-connecter', Login::class)->name('login');
        Route::get('/mot-de-passe-oublie', ForgotPassword::class)->name('forgot_password');
    }
);
