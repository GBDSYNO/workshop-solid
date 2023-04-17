<?php

namespace Workshop\OCP\Refactored;

class AccountDisplayerService
{
    public function displayWelcomeMessage(Nameable $entity): void
    {
        echo $entity->getDisplayableName();
    }
}
