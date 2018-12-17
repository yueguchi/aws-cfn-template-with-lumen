<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/11/25
 * Time: 17:54
 */

namespace App\Repositories\Sponsor;

use App\Models\Sponsor;

/**
 * Class SponsorRepositoryImpl
 *
 * @package App\Repositories\Sponsor
 */
class SponsorRepositoryImpl implements SponsorRepository
{
    /**
     * 取得
     *
     * @return array
     */
    public function findAll()
    {
        return Sponsor::get(['id', 'grade']);
    }
}