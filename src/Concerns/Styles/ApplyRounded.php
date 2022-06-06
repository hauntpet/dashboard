<?php

namespace HauntPet\Dashboard\Concerns\Styles;

trait ApplyRounded
{
    /**
     * Whether to apply the rounded classes.
     * @var bool
     */
    public bool $applyRounded;

    /**
     * Apply the rounded classes.
     *
     * @param string $rounded
     * @param string $noRounded
     * @return string
     */
    public function applyRounded(string $rounded = 'rounded', string $noRounded = ''): string
    {
        return $this->applyRounded ? $rounded : $noRounded;
    }
}
