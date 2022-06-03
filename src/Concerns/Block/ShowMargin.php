<?php

namespace HauntPet\Dashboard\Concerns\Block;

trait ShowMargin
{
    /**
     * Whether to show a margin.
     * @var bool
     */
    public bool $showMargin;

    /**
     * Apply the border.
     *
     * @param string $margin
     * @param string $noMargin
     * @return string
     */
    public function applyShowMargin(string $margin, string $noMargin = ''): string
    {
        return $this->showMargin ? $margin : $noMargin;
    }
}
