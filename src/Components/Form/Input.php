<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Margin;
use HauntPet\Dashboard\Concerns\InputStyles;

class Input extends Component
{
    use Margin,
        InputStyles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $disabled = false, bool $margin = true)
    {
        $this->disabled = $disabled;
        $this->margin = $margin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::form.input');
    }
}
