<?php

namespace Workshop\DIP\Original;

class PaymentProvider
{
    public function goToPaymentPage(PayPal|Stripe|GooglePay $optionChosen, int $amount): void
    {
        $optionChosen->pay($amount);
    }
}
