<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/17
 * Time: 18:09
 */

namespace App\Http\FormRequests;

/**
 * Class LikeRequest
 * @package App\Http\FormRequests
 */
class LikeRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['timetable_id' => 'required|exists:timetables'];
    }
}