<?php

namespace App\Providers;

use App\Models\Logo;
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
        $latest_blog=DB::table('blogs')->orderBy('created_at','Desc')->limit(3)->get();
        View::share('latest_blog', $latest_blog);
        $get_logo_url=Logo::latest('id')->limit(1)->get();
        if (count($get_logo_url)>0) {
            $logo_url=url('storage/'.$get_logo_url[0]->logo);
            View::share('logo_url',  $logo_url);
        }

    }
}