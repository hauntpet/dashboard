<?php

namespace HauntPet\Dashboard\Components\Card;

use Illuminate\View\Component;

class Content extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::card.content');
    }
}