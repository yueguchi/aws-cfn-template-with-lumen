<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/11/25
 * Time: 17:54
 */
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function insertUser($sub, $email) {
        $user = new User();
        $user->sub = $sub;
        $user->email = $email;
        $user->save();
    }
}