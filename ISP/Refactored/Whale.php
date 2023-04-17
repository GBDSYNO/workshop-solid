<?php

namespace Workshop\ISP\Refactored;

class Whale implements SwimmingAnimal
{
    public function swim(): void
    {
        echo "I'm swimming\n";
    }
}
