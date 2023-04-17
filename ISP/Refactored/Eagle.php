<?php

namespace Workshop\ISP\Refactored;

class Eagle implements FlyingAnimal
{
    public function fly(): void
    {
        echo "I'm flying!.\n";
    }
}
