<?php

namespace Workshop\ISP\Original;

class Duck implements AnimalInterface
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
