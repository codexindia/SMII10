<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade as Form;
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
        Form::component('adText', 'components.admin.text', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('adTextArea', 'components.admin.textarea', ['name', 'value' => null, 'attributes' => [], 'label' => null]);
        Form::component('adFile', 'components.admin.file', ['name','label' => null,'attributes' => [], ]);
    }
}
