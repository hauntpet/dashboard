<?php

namespace HauntPet\Dashboard\Components\Button;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Href;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Content;
use HauntPet\Dashboard\Concerns\FullWidth;

class Pill extends Component
{
    use Content,
        FullWidth,
        Href,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param bool $fullWidth
     * @param string|null $href
     * @param string $theme
     * @return void
     */
    public function __construct(string $content = null, bool $fullWidth = false, string $href = null, string $theme = 'info')
    {
        $this->content = $content;
        $this->fullWidth = $fullWidth;
        $this->href = $href;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::button.pill');
    }
}
