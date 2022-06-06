<?php

namespace HauntPet\Dashboard\Components\Card;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\State\Level;
use HauntPet\Dashboard\Concerns\State\Content;
use HauntPet\Dashboard\Concerns\Block\ShowBorder;
use HauntPet\Dashboard\Concerns\Styles\ApplyTheme;
use HauntPet\Dashboard\Concerns\Styles\ApplyBuffer;

class Header extends Component
{
    use ApplyBuffer,
        ApplyTheme,
        Content,
        Level,
        ShowBorder;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param int $level
     * @param bool $showBorder
     * @return void
     */
    public function __construct(string $content = null, int $level = 3, bool $showBorder = false)
    {
        $this->content = $content;
        $this->level = $level;
        $this->showBorder = $showBorder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::card.header');
    }
}
