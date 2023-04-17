<?php

namespace Workshop\DIP\Original;

class GooglePay
{
    public function pay(int $amount): void
    {
        echo "Moving to the GooglePay page for a payment of ${amount}€...\n";
    }
}
