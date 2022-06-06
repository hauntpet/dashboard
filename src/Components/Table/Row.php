<?php

namespace HauntPet\Dashboard\Components\Table;

use Illuminate\View\Component;

class Row extends Component
{
    /**
     * Whether this is a head row.
     * @var bool
     */
    public bool $head;

    /**
     * Create a new component instance.
     *
     * @param bool $head
     * @return void
     */
    public function __construct(
        bool $head = false,
    ) {
        $this->head = $head;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::table.row');
    }
}
