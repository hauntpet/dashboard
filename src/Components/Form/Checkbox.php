<?php

namespace HauntPet\Dashboard\Components\Form;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Margin;
use HauntPet\Dashboard\Concerns\Content;
use HauntPet\Dashboard\Concerns\InputStyles;

class Checkbox extends Component
{
    use Content,
        InputStyles,
        Margin;

    /**
     * Whether the checkbox is checked.
     * @var bool
     */
    public bool $checked;

    /**
     * Create a new component instance.
     *
     * @param bool $checked
     * @param string $content
     * @param bool $margin
     * @return void
     */
    public function __construct(bool $checked = false, string $content = '', bool $margin = true)
    {
        $this->checked = $checked;
        $this->content = $content;
        $this->margin = $margin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::form.checkbox');
    }

    /**
     * Apply additional classes if content exists.
     *
     * @return string
     */
    public function applyLabel(): string
    {
        return $this->content !== '' ? 'mr-1' : '';
    }
}
