<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Block\Level;
use HauntPet\Dashboard\Concerns\Block\Buffer;
use HauntPet\Dashboard\Concerns\Block\ShowBorder;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;
use HauntPet\Dashboard\Concerns\Block\ShowRounded;

class Card extends Component
{
    use Buffer,
        Level,
        ShowBorder,
        ShowMargin,
        ShowRounded,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param string $buffer
     * @param int $level
     * @param bool $showBorder
     * @param bool $showMargin
     * @return void
     */
    public function __construct(
        string $buffer = 'medium',
        int $level = 2,
        bool $showBorder = false,
        bool $showMargin = false,
        bool $showRounded = true,
        string $theme = 'light'
    ) {
        $this->buffer = $buffer;
        $this->level = $level;
        $this->showBorder = $showBorder;
        $this->showMargin = $showMargin;
        $this->showRounded = $showRounded;
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
