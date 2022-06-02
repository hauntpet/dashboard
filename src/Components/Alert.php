<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Margin;

class Alert extends Component
{
    use Margin,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param string $theme
     * @param bool $margin
     * @return void
     */
    public function __construct(string $theme = 'error', bool $margin = true)
    {
        $this->margin = $margin;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::utilities.alert');
    }
}
