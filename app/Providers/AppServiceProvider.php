<?php

namespace App\Providers;
use App\Models\SubMenu;
use App\Models\Menu;

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
        $menuItem=Menu::all();
        view()->share('menuItem',$menuItem);
    }
}
