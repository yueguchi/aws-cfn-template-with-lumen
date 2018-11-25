<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * [GET] Users List
     * @param Request $request
     * @return mixed Array
     */
    public function index(Request $request)
    {
        return ["name" => "aaaa"];
    }

    /**
     * [PUT] Store New User from Cognito
     * @param Request $request
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     */
    public function store(Request $request)
    {
        $sub = $request->input('sub');
        $email = $request->input('email');
        $this->userRepository->insertUser($sub, $email);
        return response(['message' => 'Created'], 201);
    }
}