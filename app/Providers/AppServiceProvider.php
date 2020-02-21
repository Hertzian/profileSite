<?php

namespace App\Providers;

use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*', function (View $view){
            if (true) {
                $user = User::firstOrFail();
                $photo = $user->img;
                $github = $user->github;
                $linkedin = $user->linkedin;

                $view->with([
                    'photo' => $photo,
                    'github' => $github,
                    'linkedin' => $linkedin
                ]);
            }
        });
    }
}
