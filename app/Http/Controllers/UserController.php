<?php

namespace App\Http\Controllers;

use App\Http\FormRequests\UserStoreRequest;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
  private $userService;
  
  public function __construct(UserService $userService)
  {
    $this->userService = $userService;
  }
  
  /**
   * [GET] Users List
   * @param Request $request
   * @return mixed Array
   */
  public function index(Request $request)
  {
    return $this->userService->get();
  }
  
  /**
   * [PUT] Store New User from Cognito
   * @param UserStoreRequest $request
   * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
   */
  public function store(UserStoreRequest $request)
  {
    $this->userService->insert($request->only(['sub', 'email']));
    return response(['message' => 'Created'], 201);
  }
}