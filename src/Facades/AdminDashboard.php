<?php

namespace HauntPet\Dashboard\Facades;

use Illuminate\Support\Facades\Facade;

class AdminDashboard extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'haunt-admin-dashboard';
    }
}
