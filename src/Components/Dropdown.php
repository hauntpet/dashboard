<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Block\Width;
use HauntPet\Dashboard\Concerns\Block\Alignment;

class Dropdown extends Component
{
    use Alignment,
        Width;

    /**
     * Whether to show the icon.
     * @var bool
     */
    public bool $showIcon;

    /**
     * Create a new component instance.
     *
     * @param string $alignment
     * @param bool $showIcon
     * @param int|string $width
     * @return void
     */
    public function __construct(
        string $alignment = 'left',
        bool $showIcon = true,
        int|string $width = '40'
    ) {
        $this->alignment = $alignment;
        $this->showIcon = $showIcon;
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::dropdown.index');
    }
}
