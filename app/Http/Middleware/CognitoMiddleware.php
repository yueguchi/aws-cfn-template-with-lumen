<?php

namespace App\Http\Middleware;

use Closure;

class CognitoMiddleware
{
  /**
   * 401 or 403で悩む...
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    // access_tokenの存在検証
    $token = $request->header('Authorization');
    if (!$token) abort(401, 'invalid access');
    // 「ヘッダー . ペイロード . 署名」の構成
    $tokenArray = explode('.', $token);
    if (count($tokenArray) !== 3) abort(401, 'invalid access');
    $sub = json_decode(base64_decode($tokenArray[1]), true)["sub"];
    if (!$sub) abort(401, 'invalid access');
    $request->merge(['sub' => $sub]);
    return $next($request);
  }
}
