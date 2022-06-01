<?php

namespace HauntPet\Framework\Components\Button;

use Illuminate\View\Component;
use HauntPet\Framework\Concerns\Href;
use HauntPet\Framework\Concerns\Active;

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
        return view('haunt-framework::button.nav');
    }
}
