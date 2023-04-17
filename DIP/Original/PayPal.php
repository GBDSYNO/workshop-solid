<?php

namespace Workshop\DIP\Original;

class PayPal
{
    public function pay(int $amount): void
    {
        echo "Moving to the Paypal page for a payment of ${amount}€...\n";
    }
}
