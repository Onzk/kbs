<?php

use App\Http\Controllers\public\AppController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(AppController::class)->name('public.')->prefix('/')->group(
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
            Route::get('équipes', 'teams')->name('teams');
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
