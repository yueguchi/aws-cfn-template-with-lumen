<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/18
 * Time: 17:48
 */

namespace App\Repositories\Like;

interface LikeRepository
{
    /**
     * 更新
     * @param $uuid
     * @param $count
     * @return mixed
     */
    public function update($uuid, $count);
}