<?php

namespace HauntPet\Dashboard\Services;

use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;

class AdminDashboard
{
    /**
     * The main navigation.
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected \Illuminate\Filesystem\Filesystem $files;

    /**
     * The main navigation.
     * @var \Illuminate\Support\Collection
     */
    protected \Illuminate\Support\Collection $navigation;

    /**
     * The main navigation.
     * @var \Illuminate\Support\Collection
     */
    protected \Illuminate\Support\Collection $routeFiles;

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
        $this->navigation = collect();
        $this->routeFiles = collect();
    }

    /**
     * Get the built navigation.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getNavigation(): Collection
    {
        return $this->navigation;
    }

    /**
     * Add a route file path.
     *
     * @param string $path
     * @param int $order
     * @return bool
     */
    public function addRouteFile(string $path, int $order = 100): bool
    {
        if (!$this->files->exists($path)) {
            return false;
        }

        $this->routeFiles->push([
            'order' => $order,
            'path' => $path,
        ]);
        return true;
    }

    /**
     * Get the built navigation.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getRouteFiles(): Collection
    {
        return $this->routeFiles->sortBy('order')->pluck(['path']);
    }
}
