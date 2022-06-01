<?php

namespace HauntPet\Framework\Components\Card;

use Illuminate\View\Component;
use HauntPet\Framework\Concerns\Src;

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
        return view('haunt-framework::card.image');
    }
}
