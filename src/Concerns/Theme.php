<?php

namespace HauntPet\Dashboard\Concerns;

use HauntPet\Dashboard\Concerns\Styles\ApplyTheme;

trait Theme
{
    use ApplyTheme;

    /**
     * The theme to apply to the element.
     * [error, info, success, primary, light, dark, clear]
     * @var string
     */
    public string $theme;
}
