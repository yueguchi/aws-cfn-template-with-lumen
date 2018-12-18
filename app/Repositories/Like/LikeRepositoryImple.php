<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/18
 * Time: 17:49
 */

namespace App\Repositories\Like;

use App\Models\Like;
use App\Repositories\TimeTable\TimeTableRepository;

class LikeRepositoryImple implements LikeRepository
{
    
    protected $timeTableRepository;
    
    public function __construct(TimeTableRepository $timeTableRepository)
    {
        $this->timeTableRepository = $timeTableRepository;
    }
    
    public function update($uuid, $count)
    {
        return Like::where('timetable_id', '=', $this->timeTableRepository->findIdByUuid($uuid))->increment('count', $count);
    }
}
