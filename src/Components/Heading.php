<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Level;
use HauntPet\Dashboard\Concerns\Margin;
use HauntPet\Dashboard\Concerns\Content;

class Heading extends Component
{
    use Content,
        Level,
        Margin;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param int $level
     * @param bool $margin
     * @return void
     */
    public function __construct(string $content = null, int $level = 3, bool $margin = true)
    {
        $this->content = $content;
        $this->level = $level;
        $this->margin = $margin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::utilities.heading');
    }
}
