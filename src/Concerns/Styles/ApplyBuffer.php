<?php

namespace HauntPet\Dashboard\Concerns\Styles;

trait ApplyBuffer
{
    /**
     * Apply the buffer.
     *
     * @param string|null $buffer
     * @param string $small
     * @param string $medium
     * @param string $large
     * @return string
     */
    public function applyBuffer(string $buffer = null, string $small = 'p-3', string $medium = 'p-6', string $large = 'p-12'): string
    {
        if ($buffer === null) {
            $buffer = $this->buffer;
        }

        switch ($buffer) {
            case 'small':
                return $small;
                break;
            case 'medium':
                return $medium;
                break;
            case 'large':
                return $large;
                break;
            default:
                return '';
        }
    }
}
