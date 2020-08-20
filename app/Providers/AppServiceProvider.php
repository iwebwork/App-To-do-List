<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        //
        Blade::component('erros.alert', 'alert');
        Blade::component('cards.cardOne', 'cardOne');
        Blade::component('navBars.navBarOne', 'navBarOne');
        Blade::component('sideBars.sideBarOne', 'sideBarOne');
        Blade::component('cards.listaCardOne', 'listCardOne');
        Blade::component('modals.modalEditEvent', 'modalEditEvent');
        Blade::component('modals.modalInsertEvent', 'modalInsertEvent');

    }
}
