<?php

namespace HauntPet\Dashboard\Components\Card;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Src;
use HauntPet\Dashboard\Concerns\Block\Color;
use HauntPet\Dashboard\Concerns\Block\Opacity;
use HauntPet\Dashboard\Concerns\Block\Position;

class Image extends Component
{
    use Color,
        Opacity,
        Position,
        Src;

    public bool $showOverlay;

    /**
     * Create a new component instance.
     *
     * @param string $src
     * @param string $color
     * @param string $opacity
     * @param string $position
     * @param bool $showOverlay
     * @return void
     */
    public function __construct(
        string $src,
        string $color = 'gray-800',
        string $opacity = '40',
        string $position = 'center',
        bool $showOverlay = true
    ) {
        $this->color = $color;
        $this->opacity = $opacity;
        $this->position = $position;
        $this->showOverlay = $showOverlay;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::card.image');
    }
}
