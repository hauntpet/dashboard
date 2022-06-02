<?php

namespace HauntPet\Dashboard\Components;

use Illuminate\View\Component;
use HauntPet\Dashboard\Concerns\Margin;
use HauntPet\Dashboard\Concerns\Content;

class Heading extends Component
{
    use Content,
        Margin;

    /**
     * The level of heading to show.
     * @var int
     */
    public int $level;

    /**
     * Create a new component instance.
     *
     * @param string $content
     * @param int $level
     * @param bool $margin
     * @return void
     */
    public function __construct(string $content = '', int $level = 3, bool $margin = true)
    {
        $this->content = $content;
        $this->level = $level;
        $this->margin = $margin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('haunt-framework::utilities.heading');
    }

    /**
     * Apply the level class.
     *
     * @return string
     */
    public function applyLevel(): string
    {
        switch ($this->level) {
            case 1: {
                    return "text-4xl";
                    break;
                }
            case 2: {
                    return "text-3xl";
                    break;
                }
            case 3: {
                    return "text-2xl";
                    break;
                }
            case 4: {
                    return "text-xl";
                    break;
                }
            case 5: {
                    return "text-lg";
                    break;
                }
            case 6: {
                    return "text-base";
                    break;
                }
        }
    }
}
