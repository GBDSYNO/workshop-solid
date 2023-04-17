<?php

namespace Workshop\DIP\Refactored;

class PaymentProvider
{
    public function goToPaymentPage(Payable $optionChosen, int $amount): void
    {
        $optionChosen->pay($amount);
    }
}
