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

        // List of all modules that have repository
        $modules = ['Alumni', 'Announcement', 'CA', 'Complaint', 'Exam', 'News', 'Payment', 'School', 'Staff', 'StdClass', 'StdParent', 'Student', 'Subject'];
//            // note, any module removed will warrant removing its name in the modules list above

        foreach ($modules as $module) {
//            // Registering all module Interface with their corresponding repository
            $default_location = 'Modules\\' . $module . '\Repository\\' . $module ;

            app()->singleton($default_location . 'Interface', $default_location . 'Repository');
        }

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
