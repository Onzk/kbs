<?php

use App\Http\Controllers\public\AppController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(AppController::class)->name('public.')->prefix('/')->group(
    function () {
        Route::prefix('/')->name('home.')->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/presentation-de-kapi-consult', 'kapi_presentation')->name('kapi-presentation');
            Route::get('/presentation-de-kbs', 'kbs_presentation')->name('kbs-presentation');
            Route::get('/informations-clés', 'key_information')->name('key-information');
            Route::get('/cadres-et-hauts-cadres', 'executives')->name('executives');
            Route::get('/entreprises', 'entreprises')->name('entreprises');
        });
        Route::prefix('/a-propos')->name('about.')->group(function () {
            Route::get('presentation-de-la-société', 'society_presentation')->name('society-presentation');
            Route::get('mission-vision-valeurs', 'mvv')->name('mvv');
            Route::get('équipes', 'teams')->name('teams');
            Route::get('prestations-pour-les-cadres', 'executives_prestation')->name('executives-prestation');
            Route::get('prestations-pour-les-entreprises', 'entreprises_prestation')->name('entreprises-prestation');
        });
        Route::prefix('/process-prestation')->name('process.')->group(function () {
            Route::get('/cadres', 'process_executives')->name('executives');
            Route::get('/entreprises', 'process_entreprises')->name('entreprises');
        });
        Route::prefix('/media-et-nouvelle')->name('media-news.')->group(function () {
            Route::get('/webinaires', 'webinaries')->name('webinaries');
            Route::get('/questions-réponses', 'questions')->name('questions');
            Route::get('/communiqués', 'press')->name('press');
            Route::get('/blog', 'blog')->name('blog');
        });
        Route::get('/recrutement', 'recruitment')->name('recruitment');
        Route::get('/faqs', 'faqs')->name('faqs');
        Route::get('/espace-utilisateur', 'user_space')->name('user-space');
        Route::get('/protection-de-données', 'data_protection')->name('data-protection');
    }
);
