<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\InputStyles;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;

class Select extends Component
{
    use ShowMargin,
        InputStyles;

    /**
     * Whether multiple options should be selectable.
     * @var bool
     */
    public bool $multiple;

    /**
     * Create a new component instance.
     *
     * @param bool $disabled
     * @param bool $multiple
     * @param bool $showMargin
     * @return void
     */
    public function __construct(
        bool $disabled = false,
        bool $multiple = false,
        bool $showMargin = false,
    ) {
        $this->disabled = $disabled;
        $this->multiple = $multiple;
        $this->showMargin = $showMargin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::form.select');
    }

    public function applyMultiple(): string
    {
        return $this->multiple ? 'h-40' : 'h-10';
    }
}
