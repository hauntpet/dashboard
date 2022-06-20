<?php

namespace HauntPet\Dashboard\Concerns\State;

trait Toggle
{
    /**
     * Whether to allow toggling.
     * @var bool
     */
    public bool $toggle;

    /**
     * Apply the toggle classes.
     *
     * @return string
     */
    public function applyToggle(): string
    {
        return $this->toggle ? 'cursor-pointer' : '';
    }
}
