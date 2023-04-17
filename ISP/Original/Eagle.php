<?php

namespace Workshop\ISP\Original;

use Exception;

class Eagle implements AnimalInterface
{
    public function fly(): void
    {
        echo "I'm flying!.\n";
    }

    public function swim(): void
    {
        throw new Exception("I can't swim.\n");
    }
}
