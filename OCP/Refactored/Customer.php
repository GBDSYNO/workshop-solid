<?php

namespace Workshop\OCP\Refactored;

class Customer implements Nameable
{
    public function __construct(protected string $fullname)
    {
    }

    public function getDisplayableName(): string
    {
        return sprintf("Welcome again, dear %s\n", $this->fullname);
    }
}
