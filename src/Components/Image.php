<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Src;

class Image extends Component
{
    use Src;

    /**
     * Create a new component instance.
     *
     * @param string $src
     * @return void
     */
    public function __construct(string $src)
    {
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
