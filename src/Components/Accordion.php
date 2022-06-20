<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Block\Width;
use HauntPet\Dashboard\Concerns\State\Toggle;
use HauntPet\Dashboard\Concerns\Block\Alignment;

class Accordion extends Component
{
    use Toggle;

    /**
     * Create a new component instance.
     *
     * @param bool $toggle
     * @return void
     */
    public function __construct(
        bool $toggle = true,
    ) {
        $this->toggle = $toggle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::accordion.index');
    }
}
