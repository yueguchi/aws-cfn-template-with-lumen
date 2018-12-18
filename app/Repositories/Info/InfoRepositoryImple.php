<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/11/25
 * Time: 17:54
 */

namespace App\Repositories\Info;

use App\Models\Info;

/**
 * Class UserRepositoryImpl
 *
 * @package App\Repositories\User
 */
class InfoRepositoryImple implements InfoRepository
{
    /**
     * 取得
     *
     * @return array
     */
    public function find()
    {
        return Info::first();
    }
}