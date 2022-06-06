<?php

namespace HauntPet\Dashboard\Components\Table;

use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::table.head');
    }
}
