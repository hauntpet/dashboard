<?php

namespace HauntPet\Dashboard\Components\TipTap;

use LumiteStudios\LaravelBladeTiptap\Components\TipTapMenuItem;

class MenuItem extends TipTapMenuItem
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::tiptap.menu-item');
    }
}
