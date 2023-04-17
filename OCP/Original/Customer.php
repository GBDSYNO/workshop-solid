<?php

namespace Workshop\OCP\Original;

class Customer
{
    public function __construct(protected string $fullname)
    {
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }
}
