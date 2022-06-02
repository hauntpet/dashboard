<?php

namespace HauntPet\Dashboard\Concerns;

trait Level
{
    /**
     * The level of heading to show.
     * @var int
     */
    public int $level;

    /**
     * Apply the level class.
     *
     * @return string
     */
    public function applyLevel(): string
    {
        switch ($this->level) {
            case 1: {
                    return "text-4xl";
                    break;
                }
            case 2: {
                    return "text-3xl";
                    break;
                }
            case 3: {
                    return "text-2xl";
                    break;
                }
            case 4: {
                    return "text-xl";
                    break;
                }
            case 5: {
                    return "text-lg";
                    break;
                }
            case 6: {
                    return "text-base";
                    break;
                }
        }
    }

    /**
     * Apply the level class.
     *
     * @return string
     */
    public function applySubLevel(): string
    {
        switch ($this->level) {
            case 1: {
                    return "text-3xl";
                    break;
                }
            case 2: {
                    return "text-2xl";
                    break;
                }
            case 3: {
                    return "text-xl";
                    break;
                }
            case 4: {
                    return "text-lg";
                    break;
                }
            case 5: {
                    return "text-base";
                    break;
                }
            case 6: {
                    return "text-sm";
                    break;
                }
        }
    }
}
