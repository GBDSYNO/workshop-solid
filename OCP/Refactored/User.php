<?php

namespace Workshop\OCP\Refactored;

class User implements Nameable
{
    public function __construct(protected string $firstname, protected string $lastname)
    {
    }

    public function getDisplayableName(): string
    {
        return sprintf("Hello, %s %s\n", strtoupper($this->lastname), $this->firstname);
    }
}
