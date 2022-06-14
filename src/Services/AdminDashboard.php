<?php

namespace HauntPet\Dashboard\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;

class AdminDashboard
{
    /**
     * The main navigation.
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected \Illuminate\Filesystem\Filesystem $files;

    /**
     * The logout route to use.
     * @var string
     */
    protected string $logoutRoute;

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
     * The title of the dashboard.
     * @var string
     */
    protected string $title;

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
        $this->logoutRoute = '/logout';
        $this->navigation = collect();
        $this->routeFiles = collect();
        $this->setTitle(config('app.name'));
    }

    /**
     * Add a navigation parent.
     *
     * @param string $slug
     * @param string $icon
     * @param string $route
     * @param array $children
     * @param array $active
     * @param \Closure|null $show
     * @return void
     */
    public function addNavigationParent(string $slug, string $icon, string $route, array $children = [], array $active = [], \Closure $show = null): void
    {
        $data = [
            'icon' => $icon,
            'route' => $route,
            'children' => $children,
            'active' => $active,
            'show' => $show,
        ];

        $this->navigation->put($slug, $data);
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
     * Get the current active item.
     *
     * @return array
     */
    public function getActive(): array
    {
        return $this->getNavigation()->filter(function ($parent) {
            return $this->isParentActive($parent);
        })->first() ?? [];
    }

    /**
     * Handle the route.
     *
     * @param string $route
     * @return string
     */
    public function handleRoute(string $route): string
    {
        if (filter_var($route, FILTER_VALIDATE_URL)) {
            return $route;
        }

        if (Route::has($route)) {
            return route($route);
        }

        return Str::start($route, '/');
    }

    /**
     * Check if a parent is active.
     *
     * @param array $item
     * @return bool
     */
    public function isParentActive(array $item): bool
    {
        return $this->isCurrentRoute($item['route']) || (array_key_exists('active', $item) ? collect($item['active'])->filter(function ($child) {
            return $this->isCurrentRoute($child);
        })->first() !== null : false) || (array_key_exists('children', $item) ? collect($item['children'])->filter(function ($child) {
            return array_key_exists('route', $child) ? $this->isCurrentRoute($child['route']) : false;
        })->first() !== null : false);
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

    /**
     * Get the dashboard title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the dashboard title.
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get the logout route.
     *
     * @return string
     */
    public function getLogoutRoute(): string
    {
        return $this->logoutRoute;
    }

    /**
     * Set the logout route.
     *
     * @param string $route
     * @return void
     */
    public function setLogoutRoute(string $route): void
    {
        $this->logoutRoute = $route;
    }

    /**
     * Check if a route is the current one.
     *
     * @param string $route
     * @return bool
     */
    protected function isCurrentRoute(string $route): bool
    {
        return (Str::startsWith($route, ['/'])
            ? Str::substr($route, 1)
            : request()->is($route)
        ) || request()->fullUrlIs($route) || request()->routeIs($route);
    }
}
