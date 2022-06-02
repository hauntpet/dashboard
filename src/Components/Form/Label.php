<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Inline;
use HauntPet\Dashboard\Concerns\Content;

class Label extends Component
{
    use Content,
        Inline;

    /**
     * Create a new component instance.
     *
     * @param string $content
     * @param bool $inline
     * @return void
     */
    public function __construct(string $content = '', bool $inline = false)
    {
        $this->content = $content;
        $this->inline = $inline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::form.label');
    }
}
