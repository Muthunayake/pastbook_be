<?php
namespace App\Repository;

interface GalleryRepositoryInterface
{
    /**
     * @param int $userId
     * @return array
     */
    public function all($userId): array;

    /**
     * @param array $data
     * @return bool
     */
    public function create($data): bool;

    /**
     * @param int $userId
     * @return bool
     */
    public function delete($userId): bool;
}
