<?php

namespace HauntPet\Dashboard\Components\TipTap;

use LumiteStudios\LaravelBladeTiptap\Components\TipTapEditor;

class Editor extends TipTapEditor
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::tiptap.editor');
    }
}
