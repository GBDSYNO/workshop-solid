<?php

namespace Workshop\ISP\Refactored;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $duck = new Duck();
        $duck->fly();
        $duck->swim();

        $whale = new Whale();
        $whale->swim();
    }
}
