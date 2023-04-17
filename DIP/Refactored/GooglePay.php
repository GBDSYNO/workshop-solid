<?php

namespace Workshop\DIP\Refactored;

class GooglePay implements Payable
{
    public function pay(int $amount): void
    {
        echo "Moving to the GooglePay page for a payment of ${amount}€...\n";
    }
}
