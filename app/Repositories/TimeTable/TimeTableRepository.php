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
    /**
     * 指定したカラムで全件取得する
     * @param array $columns
     * @return mixed
     */
    public function findAll(array $columns = []);
    
    /**
     * uuidに紐づくidを取得する
     * @param string $uuid
     * @return mixed
     */
    public function findIdByUuid(string $uuid);
}