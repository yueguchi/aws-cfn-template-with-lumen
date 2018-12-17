<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/03
 * Time: 17:38
 */

namespace App\Services\User;

use App\Repositories\Info\InfoRepository;

class InfoService
{
    /** @var InfoRepository */
    protected $repository;
    
    /**
     * UserService constructor.
     * @param InfoRepository $repository
     */
    public function __construct(InfoRepository $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * userList
     * @return mixed
     */
    public function get()
    {
        return $this->repository->find();
    }
}
