<?php

namespace Workshop\DIP\Refactored;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $paymentProvider = new PaymentProvider();

        $paymentProvider->goToPaymentPage(new PayPal(), 50);
        $paymentProvider->goToPaymentPage(new Stripe(), 50);
        $paymentProvider->goToPaymentPage(new GooglePay(), 50);
    }
}
