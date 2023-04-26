<?php

namespace Workshop\DIP\Refactored;

class UserService
{
    public function __construct(private Saveable $repository)
    {
    }

    public function saveUser(User $user): void
    {
        $this->repository->save($user);
    }
}
