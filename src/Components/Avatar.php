<?php

namespace HauntPet\Dashboard\Components;

use HauntPet\Dashboard\Components\Image;

class Avatar extends Image
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::utilities.avatar');
    }
}
