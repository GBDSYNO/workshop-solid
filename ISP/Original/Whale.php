<?php

namespace Workshop\ISP\Original;

use Exception;

class Whale implements AnimalInterface
{
    public function fly(): void
    {
        throw new Exception("I don't know how to fly.\n");
    }

    public function swim(): void
    {
        echo "I'm swimming\n";
    }
}
