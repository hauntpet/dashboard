<?php

namespace HauntPet\Dashboard\Concerns\Styles;

trait ApplyRounded
{
    /**
     * Apply the rounded.
     *
     * @param bool|null $state
     * @param string $rounded
     * @param string $noRounded
     * @return string
     */
    public function applyRounded(?bool $state = null, string $rounded = 'rounded', string $noRounded = ''): string
    {
        if ($state === null) {
            $state = $this->showRounded;
        }

        return $state ? $rounded : $noRounded;
    }
}
