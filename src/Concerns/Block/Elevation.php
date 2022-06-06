<?php

namespace HauntPet\Dashboard\Concerns\Block;

trait Elevation
{
    /**
     * The elevation of the block element
     * [0, 1, 2, 3, 4, 5, 6]
     * @var int
     */
    public int $elevation;

    /**
     * Apply the elevation.
     *
     * @return string
     */
    public function applyElevation(): string
    {
        switch ($this->elevation) {
            case 0:
                return 'shadow-none';
                break;
            case 1:
                return 'shadow-sm';
                break;
            case 2:
                return 'shadow';
                break;
            case 3:
                return 'shadow-md';
                break;
            case 4:
                return 'shadow-lg';
                break;
            case 5:
                return 'shadow-xl';
                break;
            case 6:
                return 'shadow-2xl';
                break;
            default:
                return '';
        }
    }
}
