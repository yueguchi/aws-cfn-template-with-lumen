<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/03
 * Time: 17:38
 */

namespace App\Services\Master;

use App\Repositories\Sponsor\SponsorRepository;

class MasterService
{
    /** @var InfoRepository */
    protected $sponsorRepository;
    
    /**
     * UserService constructor.
     * @param SponsorRepository $sponsorRepository
     */
    public function __construct(SponsorRepository $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
    }
    
    /**
     * userList
     * @return mixed
     */
    public function get()
    {
        return [
          'sponsors' => $this->sponsorRepository->get()
        ];
    }
}
