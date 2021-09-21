<?php

namespace App\Repository;
use App\Gallery;
use App\Repository\GalleryRepositoryInterface;

class GalleryRepository implements GalleryRepositoryInterface
{
    /**
     * @return array
     */
    public function all(): array
    {
        return Gallery::select('id', 'image', 'album')->get()->toArray();
    }

    /**
     * @param array
     * @return bool
     */
    public function create($data): bool
    {
        return Gallery::insert($data);
    }

    /**
     * @param userId
     * @return bool
     */
    public function delete($userId): bool
    {
        return Gallery::whereUserId($userId)->delete();
    }
}
