<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Theme;
use HauntPet\Dashboard\Concerns\State\Href;
use HauntPet\Dashboard\Concerns\Block\Buffer;
use HauntPet\Dashboard\Concerns\State\Content;
use HauntPet\Dashboard\Concerns\Block\FullWidth;
use HauntPet\Dashboard\Concerns\Styles\ApplyRounded;

class Button extends Component
{
    use Buffer,
        Content,
        FullWidth,
        Href,
        ApplyRounded,
        Theme;

    /**
     * Whether the button should be a pill.
     * @var bool
     */
    public bool $pill;

    /**
     * Create a new component instance.
     *
     * @param bool $applyRounded
     * @param string $buffer
     * @param string|null $content
     * @param bool $fullWidth
     * @param string|null $href
     * @param bool $pill
     * @param string $theme
     * @return void
     */
    public function __construct(
        bool $applyRounded = true,
        string $buffer = 'small-medium',
        string $content = null,
        bool $fullWidth = false,
        string $href = null,
        bool $pill = false,
        string $theme = 'info'
    ) {
        $this->applyRounded = $applyRounded;
        $this->buffer = $buffer;
        $this->content = $content;
        $this->fullWidth = $fullWidth;
        $this->href = $href;
        $this->pill = $pill;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-components::button.index');
    }

    /**
     * Apply the pill shape.
     *
     * @return string
     */
    public function applyPill(): string
    {
        if ($this->pill) {
            return 'rounded-full';
        }

        return $this->applyRounded ? 'rounded' : '';
    }
}
