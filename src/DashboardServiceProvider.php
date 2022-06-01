<?php

namespace HauntPet\Dashboard;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use HauntPet\Dashboard\Services\AdminDashboard;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'haunt-framework');

        Blade::componentNamespace('HauntPet\\Dashboard\\Components', 'haunt');

        Blade::directive('includeComponent', function (string $expression) {
            [$view, $data] = explode(',', $expression) + ['', '[]'];
            return "<?php echo view({$view}, {$data})->render(); ?>";
        });

        $this->app->singleton('haunt-admin-dashboard', function ($app) {
            return new AdminDashboard;
        });
    }
}
