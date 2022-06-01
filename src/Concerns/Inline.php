<?php

namespace HauntPet\Dashboard\Concerns;

trait Inline
{
    /**
     * Whether to display the label inline.
     * @var bool
     */
    public bool $inline;

    /**
     * Apply the inline class.
     *
     * @return string
     */
    public function applyInline(): string
    {
        return $this->inline ? 'inline-block' : 'block';
    }
}
