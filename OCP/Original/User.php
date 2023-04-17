<?php

namespace Workshop\OCP\Original;

class User
{
    public function __construct(protected string $firstname, protected string $lastname)
    {
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }
}
