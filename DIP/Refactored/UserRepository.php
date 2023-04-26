<?php

namespace Workshop\DIP\Refactored;

class UserRepository implements Saveable
{
    public function save(User $user): void
    {
        echo "The user $user->name has been saved to the database.\n";
    }
}
