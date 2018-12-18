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
    protected $repository;
    
    public function __construct(LikeRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public function change(string $uuid, int $count)
    {
        return $this->repository->update($uuid, $count);
    }
}