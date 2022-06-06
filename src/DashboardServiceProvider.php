<?php

namespace HauntPet\Dashboard;

use Livewire\Livewire;
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
        $livewire = "{$views}/livewire";

        $this->loadViewsFrom($components, 'haunt-components');
        $this->loadViewsFrom($layouts, 'haunt-dashboard');
        $this->loadViewsFrom($livewire, 'haunt-livewire');
        $this->publishes([$components => resource_path('/views/vendor/haunt-component')], 'haunt-components');
        $this->publishes([$layouts => resource_path('/views/vendor/haunt-dashboard')], 'haunt-dashboard');

        Blade::componentNamespace('HauntPet\\Dashboard\\Components', 'haunt');
    }
}
