<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Src;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;

class Image extends Component
{
    use ShowMargin,
        Src;

    /**
     * Create a new component instance.
     *
     * @param string $src
     * @param bool $showMargin
     * @return void
     */
    public function __construct(
        string $src,
        bool $showMargin = false,
    ) {
        $this->showMargin = $showMargin;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::utilities.image');
    }
}
