<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;

class Section extends Component
{
    /**
     * The title to apply.
     * @var string|null
     */
    public ?string $title;

    /**
     * The subtitle to apply.
     * @var string|null
     */
    public ?string $subtitle;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $subtitle
     * @return void
     */
    public function __construct(string $title = null, string $subtitle = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::form.section');
    }
}
