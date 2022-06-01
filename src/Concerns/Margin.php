<?php

namespace HauntPet\Dashboard\Concerns;

trait Margin
{
    /**
     * Whether to apply a margin.
     * @var bool
     */
    public bool $margin;

    /**
     * Apply the margin class.
     *
     * @param string $margin
     * @return string
     */
    public function applyMargin(string $margin = 'mb-3'): string
    {
        return $this->margin ? $margin : '';
    }
}
