<?php

namespace App\Providers;

use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        $partners=Partner::all();
        
        View::share('partners', $partners);
        $latest_blog=DB::table('blogs')->limit(3)->get();
       View::share('latest_blog', $latest_blog);

    }
}