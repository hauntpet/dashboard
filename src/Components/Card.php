<?php

namespace HauntPet\Framework\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::card.index');
    }
}
