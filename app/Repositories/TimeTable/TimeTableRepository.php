<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/05
 * Time: 18:55
 */

namespace App\Repositories\TimeTable;

/**
 * User interface
 *
 * Interface UserRepository
 * @package App\Repositories\TimeTable
 */
interface TimeTableRepository
{
    public function get(array $columns = []);
}