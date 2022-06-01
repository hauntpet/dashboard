<?php

namespace HauntPet\Dashboard\Concerns;

trait Theme
{
    /**
     * The theme to apply to the element.
     * @var string
     */
    public string $theme;

    /**
     * Apply the theme style.
     *
     * @return string
     */
    public function applyTheme(): string
    {
        switch ($this->theme) {
            case 'error': {
                    return 'bg-red-500 border-red-500 text-white';
                    break;
                }
            case 'info': {
                    return 'bg-blue-500 border-blue-500 text-white';
                    break;
                }
            case 'primary': {
                    return 'bg-primary border-primary text-white';
                    break;
                }
            case 'success': {
                    return 'bg-green-500 border-green-500 text-white';
                    break;
                }
            case 'light': {
                    return 'bg-white border-white text-gray-800';
                    break;
                }
            case 'dark': {
                    return 'bg-gray-800 border-gray-800 text-white';
                    break;
                }
            case 'clear': {
                    return 'bg-transparent border-transparent';
                    break;
                }
        }
    }

    /**
     * Apply the theme hover style.
     *
     * @return string
     */
    public function applyThemeHover(): string
    {
        switch ($this->theme) {
            case 'error': {
                    return 'hover:bg-red-600 hover:border-red-600';
                    break;
                }
            case 'info': {
                    return 'hover:bg-blue-600 hover:border-blue-600';
                    break;
                }
            case 'primary': {
                    return 'hover:primary-hover hover:border-primary-hover';
                    break;
                }
            case 'success': {
                    return 'hover:bg-green-600 hover:border-green-600';
                    break;
                }
            case 'light': {
                    return 'hover:bg-gray-100 hover:border-gray-100';
                    break;
                }
            case 'dark': {
                    return 'hover:bg-gray-900 hover:border-gray-900';
                    break;
                }
            case 'clear': {
                    return 'hover:bg-transparent hover:border-transparent hover:opacity-70';
                    break;
                }
        }
    }
}
