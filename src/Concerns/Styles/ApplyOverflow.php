<?php

namespace HauntPet\Dashboard\Concerns\Styles;

trait ApplyOverflow
{
    /**
     * Whether to apply the overflow classes.
     * @var bool
     */
    public bool $applyOverflow;

    /**
     * Apply the overflow classes.
     *
     * @param string $overflow
     * @param string $noOverflow
     * @return string
     */
    public function applyOverflow(string $overflow = '', string $noOverflow = ''): string
    {
        return $this->applyOverflow ? $overflow : $noOverflow;
    }
}
