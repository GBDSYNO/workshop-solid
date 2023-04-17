<?php

namespace Workshop\OCP\Original;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $user = new User('Lucien', 'Bramard');
        $customer = new Customer('Mr Elliot Anderson');

        $accountDisplayer = new AccountDisplayerService();

        $accountDisplayer->displayWelcomeMessage($user);
        $accountDisplayer->displayWelcomeMessage($customer);
    }
}
