<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/11/25
 * Time: 17:54
 */

namespace App\Repositories\TimeTable;

use App\Models\TimeTable;

/**
 * Class UserRepositoryImpl
 *
 * @package App\Repositories\User
 */
class TimeTableRepositoryImpl implements TimeTableRepository
{
    /**
     * 取得
     *
     * @param array $columns
     * @return array
     */
    public function get(array $columns = [])
    {
        return TimeTable::orderBy('start_at')->get($columns);
    }
}