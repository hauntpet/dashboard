<?php

namespace HauntPet\Dashboard\Components\Card;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Styles\ApplyBuffer;

class Content extends Component
{
    use ApplyBuffer;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::card.content');
    }
}
