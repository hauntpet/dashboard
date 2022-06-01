# hauntpet/framework

The shared framework between the main app and a game.

## Documentation

### Installation
```bash
composer require hauntpet/framework
```

### Usage
Create a custom Admin Dashboard class that extends the base class. Within this class you can build the navigation.
```php
namespace App\Services;

use Illuminate\Support\Collection;
use HauntPet\Framework\Services\AdminDashboard as Dashboard;

class AdminDashboard extends Dashboard
{
    /**
     * Get the navigation.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getNavigation(): Collection
    {
        return collect([
            'home' => [
                'icon' => 'home',
                'route' => '/',
                'active' => [],
                'children' => [
                    'home' => [
                        'title' => 'Home',
                        'route' => '/',
                    ],
                ],
            ],
        ]);
    }
}
```

Then bind the class in a service provider's `register`  method.
```php
use App\Services\AdminDashboard;

$this->app->singleton('haunt-admin-dashboard', function ($app) {
    return new AdminDashboard;
});
```

You can now use the `<x-haunt::layouts.dashboard>` blade component to create an admin area. **A user must be authenticated to view the layout.**
