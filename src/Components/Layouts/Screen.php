<?php

namespace HauntPet\Dashboard\Components\Layouts;

use Illuminate\View\Component;

class Screen extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::layouts.screen');
    }
}
