<?php

namespace HauntPet\Dashboard\Concerns\Styles;

trait ApplyTheme
{
    /**
     * Apply the theme style.
     *
     * @param int $size
     * @param string|null $theme
     * @param bool $hover
     * @return string
     */
    public function applyTheme(int $size = 500, ?string $theme = null, bool $hover = false): string
    {
        $outlined = false;
        if (property_exists($this, 'outlined')) {
            $outlined = $this->outlined;
        }

        if ($theme === null) {
            $theme = $this->theme;
        }

        switch ($theme) {
            case 'error':
                return $this->colorTheme('red', $size, $hover, $outlined);
                break;
            case 'info':
                return $this->colorTheme('blue', $size, $hover, $outlined);
                break;
            case 'success':
                return $this->colorTheme('green', $size, $hover, $outlined);
                break;
            case 'primary':
                return $this->colorTheme('primary', $size, $hover, $outlined);
                break;
            case 'light':
                return 'bg-white border-gray-200 text-gray-800';
                break;
            case 'dark':
                return $this->colorTheme('gray', $size, $hover, $outlined);
                break;
            case 'clear':
                return 'bg-transparent border-transparent color-inherit';
                break;
            default:
                return '';
        }
    }

    private function colorTheme(string $color, string $size, bool $hover = false, bool $outlined = false): string
    {
        $increasedSize = $size + 100;

        if ($size === 900) {
            $increasedSize = 900;
        }

        if ($size < 500) {
            $text = "text-{$color}-900";
        } else {
            $text = 'text-white';
        }

        if ($outlined) {
            $classes = "border border-{$color}-{$increasedSize} text-{$color}-{$size}";
            if ($hover) {
                $classes .= " border hover:border-{$color}-{$increasedSize} hover:text-{$color}-{$size}";
            }
        } else {
            $classes = "bg-{$color}-{$size} border-{$color}-{$increasedSize} {$text}";
            if ($hover) {
                $classes .= " hover:bg-{$color}-{$increasedSize} hover:border-{$color}-{$increasedSize} hover:{$text}";
            }
        }

        return $classes;
    }
}
