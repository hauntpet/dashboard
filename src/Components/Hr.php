<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;

class Hr extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::utilities.hr');
    }
}
