<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\SiteSettingsTrait;

class AppServiceProvider extends ServiceProvider
{
    use SiteSettingsTrait;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer("*", function ($view) {
            return $view->with(['site_settings' => $this->get_site_settings(), 'schools' => $this->get_schools()]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
