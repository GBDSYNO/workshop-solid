<?php

namespace Workshop\ISP\Refactored;

class Duck implements FlyingAnimal, SwimmingAnimal
{
    public function fly(): void
    {
        echo "I'm flying.\n";
    }

    public function swim(): void
    {
        echo "I'm swimming.\n";
    }
}
