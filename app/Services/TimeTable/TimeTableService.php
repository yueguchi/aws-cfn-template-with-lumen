<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/03
 * Time: 17:38
 */

namespace App\Services\TimeTable;

use App\Repositories\TimeTable\TimeTableRepository;

class TimeTableService
{
    /** @var InfoRepository */
    protected $repository;
    
    /**
     * UserService constructor.
     * @param TimeTableRepository $repository
     */
    public function __construct(TimeTableRepository $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * userList
     * @return mixed
     */
    public function get()
    {
        $timeTablesCollection = $this->repository->findAll([
          'uuid',
          'speaker',
          'title',
          'description',
          'twitter',
          'place',
          'hash_tag',
          'start_at',
          'end_at',
          'sponsor_id'
        ]);
        $timeTablesArray = $timeTablesCollection->toArray();
        foreach ($timeTablesCollection as $index => $timeTable) {
            $timeTablesArray[$index]->like_count = $timeTable->like->count;
        }
        return $timeTablesArray;
    }
}
