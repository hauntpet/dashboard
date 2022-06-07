<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\State\Content;
use HauntPet\Dashboard\Concerns\Block\ShowMargin;

class Group extends Component
{
    use Content,
        ShowMargin;

    /**
     * The type of field to use.
     * @var string|null
     */
    public ?string $field;

    /**
     * The options to use in a select.
     * @var array
     */
    public array $options;

    /**
     * Create a new component instance.
     *
     * @param string $content
     * @param string|null $field
     * @param array $options
     * @param bool $showMargin
     * @return void
     */
    public function __construct(
        string $content = '',
        string $field = 'input',
        array $options = [],
        bool $showMargin = true,
    ) {
        $this->content = $content;
        $this->field = $field;
        $this->options = $options;
        $this->showMargin = $showMargin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::form.group');
    }
}
