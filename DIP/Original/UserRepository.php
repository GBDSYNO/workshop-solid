<?php

namespace Workshop\DIP\Original;

class UserRepository
{
    public function save(User $user): void
    {
        echo "The user $user->name has been saved to the database.\n";
    }
}
