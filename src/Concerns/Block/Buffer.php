<?php

namespace HauntPet\Dashboard\Concerns\Block;

use HauntPet\Dashboard\Concerns\Styles\ApplyBuffer;

trait Buffer
{
    use ApplyBuffer;

    /**
     * The buffer to apply.
     * [small, medium, large]
     * @var string
     */
    public string $buffer;
}
