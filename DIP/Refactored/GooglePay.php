<?php

namespace Workshop\DIP\Refactored;

class GooglePay extends PaymentPlatform
{
    public function pay(int $amount): void
    {
        echo "Moving to the GooglePay page for a payment of ${amount}€...\n";
    }
}
