<?php

namespace App\Repository;
use App\Repository\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param userId
     * @return bool
     */
    public function create($data): array
    {
        return User::updateOrCreate(['email' => $data['email']],$data)->toArray();
    }
}
