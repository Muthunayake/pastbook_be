<?php

namespace App\Repository;
use App\Gallery;
use App\Repository\GalleryRepositoryInterface;

class GalleryRepository implements GalleryRepositoryInterface
{
    /**
     * get all photos
     * @param int $userId
     * @return array
     */
    public function all($userId): array
    {
        return Gallery::select('id', 'image', 'album')
            ->whereUserId($userId)
            ->get()
            ->toArray();
    }

    /**
     * add new photos
     * @param array
     * @return bool
     */
    public function create($data): bool
    {
        return Gallery::insert($data);
    }

    /**
     * remove photos belong to login user
     * @param int userId
     * @return bool
     */
    public function delete($userId): bool
    {
        return Gallery::whereUserId($userId)->delete();
    }
}
