<?php
namespace App\Repository;

interface GalleryRepositoryInterface
{
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param $data
     * @return bool
     */
    public function create($data): bool;

    /**
     * @param $userId
     * @return bool
     */
    public function delete($userId): bool;
}
