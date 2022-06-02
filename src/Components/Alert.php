<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Margin;
use HauntPet\Dashboard\Concerns\Content;

class Alert extends Component
{
    use Content,
        Margin,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param string $theme
     * @param bool $margin
     * @return void
     */
    public function __construct(string $content = null, string $theme = 'error', bool $margin = true)
    {
        $this->content = $content;
        $this->margin = $margin;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::utilities.alert');
    }
}
