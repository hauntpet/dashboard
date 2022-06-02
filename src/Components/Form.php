<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * The type of method to use.
     * @var string
     */
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @return void
     */
    public function __construct(string $type = 'POST')
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::form.index');
    }
}
