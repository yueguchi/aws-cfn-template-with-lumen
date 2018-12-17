<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/17
 * Time: 18:12
 */

namespace App\Services\Like;

class LikeService
{
    public function change(int $timetableId, int $count)
    {
        return [$timetableId, $count];
    }
}