<?php

namespace Workshop\OCP\Original;

class AccountDisplayerService
{
    public function displayWelcomeMessage(User|Customer $entity): void
    {
        if ($entity instanceof User) {
            printf("Hello, %s %s\n", strtoupper($entity->getLastname()), $entity->getFirstname());
        } elseif ($entity instanceof Customer) {
            printf("Welcome again, dear %s\n", $entity->getFullname());
        }
    }
}
