<?php

namespace HauntPet\Dashboard\Components\Button;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Href;
use HauntPet\Dashboard\Concerns\Active;

class Nav extends Component
{
    use Active,
        Href;

    /**
     * Create a new component instance.
     *
     * @param bool $active
     * @param string|null $href
     * @return void
     */
    public function __construct(bool $active = false, string $href = null)
    {
        $this->active = $active;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::button.nav');
    }
}
