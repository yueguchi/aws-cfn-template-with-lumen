<?php

namespace App\Http\Controllers;

use App\Http\FormRequests\LikeRequest;
use App\Services\Like\LikeService;

/**
 * Class LikeController
 *
 * @package App\Http\Controllers
 */
class LikeController extends Controller
{
    /** @var LikeService */
    private $likeService;

    /**
     * LikeController constructor.
     *
     * @param LikeService $likeService
     */
    public function __construct(LikeService $likeService)
    {
        $this->likeService = $likeService;
    }
    
    /**
     * [POST] Like Increment
     *
     * @param LikeRequest $request
     * @return mixed Array
     */
    public function increment(LikeRequest $request)
    {
        return $this->likeService->change($request->input('uuid'), 1);
    }
    
    /**
     * [POST] Like Decrement
     *
     * @param LikeRequest $request
     * @return mixed Array
     */
    public function decrement(LikeRequest $request)
    {
        return $this->likeService->change($request->input('uuid'), -1);
    }
}
