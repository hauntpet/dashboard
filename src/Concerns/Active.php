<?php

namespace HauntPet\Dashboard\Concerns;

trait Active
{
    /**
     * Whether the element is active.
     * @var bool
     */
    public bool $active;

    /**
     * Apply the active classes.
     *
     * @param string $active
     * @param string $inactive
     * @return string
     */
    public function applyActive(string $active = '', string $inactive = ''): string
    {
        return $this->active ? $active : $inactive;
    }
}
