<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\State\Href;
use HauntPet\Dashboard\Concerns\State\Content;

class Link extends Component
{
    use Content,
        Href;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param string|null $href
     * @return void
     */
    public function __construct(
        string $content = null,
        string $href = null
    ) {
        $this->content = $content;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::utilities.link');
    }
}
