<?php

namespace App\Repository;

/**
 * Interface UserRepositoryInterface
 * @package App\Repository
 */
interface UserRepositoryInterface
{
    public function create($data): array;
}
