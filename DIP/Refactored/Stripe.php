<?php

namespace Workshop\DIP\Refactored;

class Stripe implements Payable
{
    public function pay(int $amount): void
    {
        echo "Moving to the Stripe page for a payment of ${amount}€...\n";
    }
}
