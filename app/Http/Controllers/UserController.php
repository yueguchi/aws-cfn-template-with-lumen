<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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
     */
    public function store(Request $request)
    {

    }
}