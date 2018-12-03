<?php
/**
 * Created by PhpStorm.
 * User: eguchi
 * Date: 2018/12/03
 * Time: 18:57
 */

namespace App\Http\FormRequests;


use Illuminate\Contracts\Validation\Validator;
use Urameshibr\Requests\FormRequest;

class BaseFormRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }
  
  /**
   * バリデーション試行の失敗の処理
   *
   * @param Validator|\Illuminate\Contracts\Validation\Validator $validator
   * @throws HttpResponseException
   */
  protected function failedValidation(Validator $validator)
  {
    abort(400, implode('/', $validator->errors()->all()));
  }
  
  /**
   * URLのpathパラメータ(route parameter)もvalidationターゲットに含める
   *
   * @param array|null $keys
   * @return array
   */
  public function all(array $keys = null)
  {
    return array_replace_recursive(
      parent::all(),
      $this->route()->parameters()
    );
  }
}