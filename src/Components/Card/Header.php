<?php

namespace HauntPet\Dashboard\Components\Card;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Block\ShowBorder;
use HauntPet\Dashboard\Concerns\Styles\ApplyTheme;
use HauntPet\Dashboard\Concerns\Styles\ApplyBuffer;

class Header extends Component
{
    use ApplyBuffer,
        ApplyTheme,
        ShowBorder;

    /**
     * Create a new component instance.
     *
     * @param bool $showBorder
     * @return void
     */
    public function __construct(bool $showBorder = false)
    {
        $this->showBorder = $showBorder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::card.header');
    }
}
