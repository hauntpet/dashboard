<?php

namespace HauntPet\Dashboard\Components\Messages;

use Illuminate\View\Component;

class Success extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::messages.success');
    }
}
