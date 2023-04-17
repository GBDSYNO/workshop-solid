<?php

namespace Workshop\SRP\Refactored;

abstract class Logger
{
    abstract public function write(string $event): void;
}
