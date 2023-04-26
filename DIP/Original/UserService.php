<?php

namespace Workshop\DIP\Original;

class UserService
{
    public function saveUser(User $user): void
    {
        $repository = new UserRepository();
        $repository->save($user);
    }
}
