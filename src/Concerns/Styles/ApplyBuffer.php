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
    public function applyBuffer(
        ?string $buffer = null,
        string $small = '3',
        string $medium = '6',
        string $large = '12',
        string $smallAdditional = '',
        string $mediumAdditional = '',
        string $largeAdditional = '',
    ): string {
        if (!$buffer) {
            $buffer = $this->buffer;
        }

        [$smallX, $smallY] = explode('-', $small) + [$small, $small];
        [$mediumX, $mediumY] = explode('-', $medium) + [$medium, $medium];
        [$largeX, $largeY] = explode('-', $large) + [$large, $large];

        switch ($buffer) {
            case 'small':
                return "px-{$smallX} py-{$smallY} ${smallAdditional}";
                break;
            case 'small-medium':
                return "px-${smallX} py-{$mediumY} ${smallAdditional}";
                break;
            case 'small-large':
                return "px-${smallX} py-{$largeY} ${smallAdditional}";
                break;
            case 'medium':
                return "px-{$mediumX} py-{$mediumY} ${mediumAdditional}";
                break;
            case 'medium-small':
                return "px-${mediumX} py-{$smallY} ${mediumAdditional}";
                break;
            case 'medium-large':
                return "px-${mediumX} py-{$largeY} ${mediumAdditional}";
                break;
            case 'large':
                return "px-{$largeX} py-{$largeY}";
                break;
            case 'large-small':
                return "px-${largeX} py-{$smallY} ${largeAdditional}";
                break;
            case 'large-medium':
                return "px-${largeX} py-{$mediumY} ${largeAdditional}";
                break;
            default:
                return '';
        }
    }
}
