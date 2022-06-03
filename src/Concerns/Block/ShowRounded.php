<?php

namespace HauntPet\Dashboard\Concerns\Block;

use HauntPet\Dashboard\Concerns\Styles\ApplyRounded;

trait ShowRounded
{
    use ApplyRounded;

    /**
     * Whether to show the block as rounded.
     * @var bool
     */
    public bool $showRounded;
}
