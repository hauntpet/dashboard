<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Content;

class Group extends Component
{
    use Content;

    /**
     * The alignment of the fields.
     * @var string
     */
    public string $alignment;

    /**
     * The type of field to use.
     * @var string
     */
    public string $field;

    /**
     * The options to use in a select.
     * @var array
     */
    public array $options;

    /**
     * Create a new component instance.
     *
     * @param string $alignment
     * @param string $content
     * @param string $field
     * @param array $options
     * @return void
     */
    public function __construct(string $alignment = 'vertical', string $content = '', string $field = 'input', array $options = [])
    {
        $this->alignment = $alignment;
        $this->content = $content;
        $this->field = $field;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::form.group');
    }
}
