<?php

namespace Workshop\DIP\Refactored;

interface Saveable
{
    public function save(User $user): void;
}
