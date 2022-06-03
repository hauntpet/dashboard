<?php

namespace HauntPet\Dashboard\Concerns\Block;

trait ShowBorder
{
    /**
     * Whether to show a border.
     * @var bool
     */
    public bool $showBorder;

    /**
     * Apply the border.
     *
     * @param string $border
     * @param string $noBorder
     * @return string
     */
    public function applyShowBorder(string $border, string $noBorder = ''): string
    {
        return $this->showBorder ? $border : $noBorder;
    }
}
