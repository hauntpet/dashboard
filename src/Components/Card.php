<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Block\Buffer;
use HauntPet\Dashboard\Concerns\Block\Elevation;
use HauntPet\Dashboard\Concerns\Block\ShowBorder;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;
use HauntPet\Dashboard\Concerns\Styles\ApplyRounded;
use HauntPet\Dashboard\Concerns\Styles\ApplyOverflow;

class Card extends Component
{
    use ApplyOverflow,
        ApplyRounded,
        Buffer,
        Elevation,
        ShowBorder,
        ShowMargin,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param bool $applyOverflow
     * @param bool $applyRounded
     * @param string $buffer
     * @param int $elevation
     * @param bool $showBorder
     * @param bool $showMargin
     * @param string $theme
     * @return void
     */
    public function __construct(
        bool $applyOverflow = true,
        bool $applyRounded = true,
        string $buffer = 'medium',
        int $elevation = 2,
        bool $showBorder = false,
        bool $showMargin = false,
        string $theme = 'light'
    ) {
        $this->applyOverflow = $applyOverflow;
        $this->applyRounded = $applyRounded;
        $this->buffer = $buffer;
        $this->elevation = $elevation;
        $this->showBorder = $showBorder;
        $this->showMargin = $showMargin;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::card.index');
    }
}
