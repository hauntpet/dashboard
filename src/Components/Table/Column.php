<?php

namespace HauntPet\Dashboard\Components\Table;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Block\Width;
use HauntPet\Dashboard\Concerns\State\Content;

class Column extends Component
{
    use Content,
        Width;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param int|string $width
     * @return void
     */
    public function __construct(
        string $content = null,
        int|string $width = 'auto',
    ) {
        $this->content = $content;
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::table.column');
    }
}
