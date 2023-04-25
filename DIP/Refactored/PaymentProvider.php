<?php

namespace Workshop\DIP\Refactored;

class PaymentProvider
{
    public function goToPaymentPage(PaymentPlatform $optionChosen, int $amount): void
    {
        $optionChosen->pay($amount);
    }
}
