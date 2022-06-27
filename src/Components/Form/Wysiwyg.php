<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\State\Content;

class Wysiwyg extends Component
{
    use Content;

    /**
     * Create a new component instance.
     *
     * @param string $content
     * @return void
     */
    public function __construct(string $content = '')
    {
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::form.wysiwyg');
    }
}
