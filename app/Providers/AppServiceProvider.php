<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        // Collection::macro('paginate', function($perPage, $page = null, $pageName = 'page') {
        //     $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
        //     return new LengthAwarePaginator(
        //         $this->forPage($page, $perPage), // $items
        //         $this->count(),                  // $total
        //         $perPage,
        //         $page,
        //         [                                // $options
        //             'path' => url()->full(),
        //             'pageName' => $pageName,
        //         ]
        //     );
        // });
    }
}
