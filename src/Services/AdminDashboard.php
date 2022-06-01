<?php

namespace HauntPet\Dashboard\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

class AdminDashboard
{
    /**
     * Get the navigation.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getNavigation(): Collection
    {
        return collect();
    }

    /**
     * Get the current active item.
     *
     * @return array
     */
    public function getActive(): array
    {
        return collect($this->getNavigation())->filter(function ($parent) {
            return $this->isActive($parent);
        })->first() ?? [];
    }

    /**
     * Get the route from an item.
     *
     * @param array $item
     * @return string|null
     */
    public function getRoute(array $item): ?string
    {
        if (!array_key_exists('route', $item)) {
            return null;
        }

        if (filter_var($item['route'], FILTER_VALIDATE_URL)) {
            return $item['route'];
        }

        if (Route::has($item['route'])) {
            return route($item['route']);
        }

        return Str::start($item['route'], '/');
    }

    /**
     * Check if the item is active.
     *
     * @param array $item
     * @return bool
     */
    public function isActive(array $item): bool
    {
        if (!array_key_exists('active', $item)) {
            return false;
        }

        return $this->isCurrentRoute($item['route']) || collect($item['active'])->filter(function ($child) {
            return $this->isCurrentRoute($child);
        })->first() !== null || collect($item['children'])->filter(function ($child) {
            return array_key_exists('route', $child) ? $this->isCurrentRoute($child['route']) : false;
        })->first() !== null;
    }

    /**
     * Check if a route is the current one.
     *
     * @param string $route
     * @return bool
     */
    protected function isCurrentRoute(string $route): bool
    {
        return (Str::startsWith($route, ['/']) ? Str::substr($route, 1) : request()->is($route)) || request()->fullUrlIs($route) || request()->routeIs($route);
    }
}
