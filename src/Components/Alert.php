<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\Content;
use HauntPet\Dashboard\Concerns\Block\Buffer;
use HauntPet\Dashboard\Concerns\Block\Outlined;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;
use HauntPet\Dashboard\Concerns\Block\ShowRounded;

class Alert extends Component
{
    use Buffer,
        Content,
        Outlined,
        ShowMargin,
        ShowRounded,
        Theme;

    /**
     * Create a new component instance.
     *
     * @param string $buffer
     * @param string|null $content
     * @param bool $outlined
     * @param bool $showMargin
     * @param bool $showRounded
     * @param string $theme
     * @return void
     */
    public function __construct(
        string $buffer = 'small',
        string $content = null,
        bool $outlined = false,
        bool $showMargin = true,
        bool $showRounded = true,
        string $theme = 'info'
    ) {
        $this->buffer = $buffer;
        $this->content = $content;
        $this->outlined = $outlined;
        $this->showMargin = $showMargin;
        $this->showRounded = $showRounded;
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
