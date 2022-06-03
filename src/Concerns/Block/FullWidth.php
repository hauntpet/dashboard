<?php

namespace HauntPet\Dashboard\Concerns\Block;

trait FullWidth
{
    /**
     * Whether the element should be full width.
     * @var bool
     */
    public bool $fullWidth;

    /**
     * Apply the full width classes.
     *
     * @param string $full
     * @param string $dense
     * @return string
     */
    public function applyFullWidth(string $full = 'w-full', string $dense = '')
    {
        return $this->fullWidth ? $full : $dense;
    }
}
