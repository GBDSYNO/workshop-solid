<?php

namespace Workshop\DIP\Refactored;

interface Payable
{
    public function pay(int $amount): void;
}
