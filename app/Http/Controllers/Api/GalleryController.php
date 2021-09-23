<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use \App\Repository\GalleryRepositoryInterface;

class GalleryController extends Controller
{
    /**
     * @var GalleryRepositoryInterface
     */
    protected $galleryRepositoryInterface;

    /**
     * GalleryController constructor.
     * @param GalleryRepositoryInterface $galleryRepositoryInterface
     */
    public function __construct(GalleryRepositoryInterface $galleryRepositoryInterface)
    {
        $this->galleryRepositoryInterface = $galleryRepositoryInterface;
    }

    /**
     * get all gallery items without any filtering
     * @Get("/gallery/all")
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function all(Request $request) {
        $userId = auth()->user()->id;
        return response()->json(['photos' => $this->galleryRepositoryInterface->all($userId)]);
    }

    /**
     * add new photos to gallery
     * @Post("/gallery/create")
     * @param GalleryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(GalleryRequest $request) {
        $data = [];
        $userId = auth()->user()->id;

        foreach ($request->get('photos') as $element) {
            $element['user_id'] = $userId;
            unset($element['id']);
            $data [] = $element;
        };

        $this->galleryRepositoryInterface->delete($userId);
        $status = $this->galleryRepositoryInterface->create($data);

        return response()->json(['status'=> $status]);
    }
}
