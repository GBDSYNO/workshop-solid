<?php

namespace Workshop\ISP\Original;

use Exception;

class Squirrel implements AnimalInterface
{
    public function fly(): void
    {
        throw new Exception("I don't know how to fly.\n");
    }

    public function swim(): void
    {
        throw new Exception("I can't swim!\n");
    }
}
