<?php

namespace HauntPet\Dashboard;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use HauntPet\Dashboard\Services\AdminDashboard;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * The root directory.
     * @var string
     */
    private string $root = __DIR__ . '/../';

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $views = "{$this->root}/resources/views";
        $components = "{$views}/components";
        $layouts = "{$views}/layouts";

        $this->loadViewsFrom($components, 'haunt-components');
        $this->loadViewsFrom($layouts, 'haunt-dashboard');
        $this->publishes([$layouts => resource_path('/views/vendor/haunt-dashboard')], 'haunt');

        Blade::componentNamespace('HauntPet\\Dashboard\\Components', 'haunt');
    }
}
