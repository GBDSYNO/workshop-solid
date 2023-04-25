<?php

namespace Workshop\DIP\Refactored;

class PayPal extends PaymentPlatform
{
    public function pay(int $amount): void
    {
        echo "Moving to the Paypal page for a payment of ${amount}€...\n";
    }
}
