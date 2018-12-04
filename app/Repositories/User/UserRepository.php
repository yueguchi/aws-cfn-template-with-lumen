<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/11/25
 * Time: 17:54
 */

namespace App\Repositories\User;

use App\Models\User;

/**
 * Class UserRepository
 *
 * @package App\Repositories\User
 */
class UserRepository
{
    /**
     * 取得
     *
     * @param  array $conditions 検索条件
     * @return array
     */
    public function get(array $conditions)
    {
        return User::all()->toArray();
    }
    
    /**
     * 登録
     *
     * @param  array $fillables 登録可能カラム
     * @return mixed
     */
    public function insert(array $fillables)
    {
        return User::create([
          'sub' => $fillables['sub'],
          'email' => $fillables['email']
        ]);
    }
}