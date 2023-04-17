<?php

namespace Workshop\DIP\Refactored;

class PayPal implements Payable
{
    public function pay(int $amount): void
    {
        echo "Moving to the Paypal page for a payment of ${amount}€...\n";
    }
}
