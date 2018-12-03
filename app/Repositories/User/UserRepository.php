<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/11/25
 * Time: 17:54
 */
namespace App\Repositories\User;

use App\Models\User;

class UserRepository
{
  
  public function get(array $conditions) {
    return User::all()->toArray();
  }
  
  /**
   * @param array $fillables
   * @return mixed
   */
  public function insert(array $fillables) {
    return User::create([
      'sub' => $fillables['sub'],
      'email' => $fillables['email']
    ]);
  }
}