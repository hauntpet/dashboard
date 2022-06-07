<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\InputStyles;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;

class Input extends Component
{
    use ShowMargin,
        InputStyles;

    /**
     * Create a new component instance.
     *
     * @param bool $disabled
     * @param bool $showMargin
     * @return void
     */
    public function __construct(
        bool $disabled = false,
        bool $showMargin = false,
    ) {
        $this->disabled = $disabled;
        $this->showMargin = $showMargin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::form.input');
    }
}
