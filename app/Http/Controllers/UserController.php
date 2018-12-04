<?php

namespace App\Http\Controllers;

use App\Http\FormRequests\UserStoreRequest;
use App\Services\User\UserService;
use Illuminate\Http\Request;

/**
 * Class UserController
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /** @var UserService */
    private $userService;
    
    /**
     * UserController constructor.
     *
     * @param UserService $userService サービス
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    /**
     * [GET] Users List
     *
     * @param  Request $request リクエスト
     * @return mixed Array
     */
    public function index(Request $request)
    {
        return $this->userService->get();
    }
    
    /**
     * [PUT] Store New User from Cognito
     *
     * @param  UserStoreRequest $request リクエスト
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function store(UserStoreRequest $request)
    {
        $this->userService->insert($request->only(['sub', 'email']));
        return response(['message' => 'Created'], 201);
    }
}