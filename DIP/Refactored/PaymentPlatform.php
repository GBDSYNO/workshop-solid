<?php

namespace Workshop\DIP\Refactored;

abstract class PaymentPlatform
{
    abstract public function pay(int $amount): void;
}
