<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Content;
use HauntPet\Dashboard\Concerns\Block\Outlined;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;
use HauntPet\Dashboard\Concerns\Styles\ApplyBuffer;
use HauntPet\Dashboard\Concerns\Styles\ApplyRounded;

class Alert extends Component
{
    use ApplyBuffer,
        Content,
        Outlined,
        ShowMargin,
        ApplyRounded,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param bool $applyRounded
     * @param string $buffer
     * @param string|null $content
     * @param bool $outlined
     * @param bool $showMargin
     * @param string $theme
     * @return void
     */
    public function __construct(
        bool $applyRounded = true,
        string $buffer = 'small',
        string $content = null,
        bool $outlined = false,
        bool $showMargin = true,
        string $theme = 'info'
    ) {
        $this->applyRounded = $applyRounded;
        $this->buffer = $buffer;
        $this->content = $content;
        $this->outlined = $outlined;
        $this->showMargin = $showMargin;
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
