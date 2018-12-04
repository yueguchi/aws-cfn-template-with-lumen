<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/03
 * Time: 17:38
 */

namespace App\Services\User;

use App\Repositories\User\UserRepository;

class UserService
{
    
    private $userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function get(array $conditions = [])
    {
        return $this->userRepository->get($conditions);
    }
    
    public function insert(array $fillables)
    {
        return $this->userRepository->insert($fillables);
    }
}