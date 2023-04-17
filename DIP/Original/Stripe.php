<?php

namespace Workshop\DIP\Original;

class Stripe
{
    public function pay(int $amount): void
    {
        echo "Moving to the Stripe page for a payment of ${amount}€...\n";
    }
}
