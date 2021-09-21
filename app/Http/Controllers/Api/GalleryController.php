<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function all(Request $request) {
        return response()->json(['photos' => $this->galleryRepositoryInterface->all()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request) {
        $data = [];
        $userId = auth()->user()->id;

        foreach ($request->get('data') as $element) {
            $element['user_id'] = $userId;
            unset($element['id']);
            $data [] = $element;
        }

        $this->galleryRepositoryInterface->delete($userId);
        $status = $this->galleryRepositoryInterface->create($data);

        return response()->json(['status'=> $status]);
    }
}
