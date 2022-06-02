<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Margin;
use HauntPet\Dashboard\Concerns\InputStyles;

class Select extends Component
{
    use Margin,
        InputStyles;

    /**
     * Whether multiple options should be selectable.
     * @var bool
     */
    public bool $multiple;

    /**
     * Create a new component instance.
     *
     * @param bool $margin
     * @param bool $multiple
     * @return void
     */
    public function __construct(bool $margin = true, bool $multiple = false)
    {
        $this->margin = $margin;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::form.select');
    }

    public function applyMultiple(): string
    {
        return $this->multiple ? 'h-40' : 'h-10';
    }
}
