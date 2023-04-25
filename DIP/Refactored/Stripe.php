<?php

namespace Workshop\DIP\Refactored;

class Stripe extends PaymentPlatform
{
    public function pay(int $amount): void
    {
        echo "Moving to the Stripe page for a payment of ${amount}€...\n";
    }
}
