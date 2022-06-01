<?php

namespace HauntPet\Dashboard\Concerns;

use HauntPet\Dashboard\Concerns\Disabled;

trait InputStyles
{
    use Disabled;

    /**
     * Apply the input styles.
     *
     * @return string
     */
    public function applyInputStyles(): string
    {
        if ($this->disabled) {
            return 'bg-gray-300 border border-gray-400 text-gray-900 cursor-not-allowed';
        }

        return 'bg-white border border-gray-400 text-gray-900';
    }
}
