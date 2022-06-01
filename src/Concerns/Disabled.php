<?php

namespace HauntPet\Dashboard\Concerns;

trait Disabled
{
    /**
     * Whether this element is disabled.
     * @var bool
     */
    public bool $disabled;

    /**
     * Apply the active classes.
     *
     * @param string $disabled
     * @param string $abled
     * @return string
     */
    public function applyDisabled(string $disabled, string $abled = ''): string
    {
        return $this->disabled ? $disabled : $abled;
    }
}
