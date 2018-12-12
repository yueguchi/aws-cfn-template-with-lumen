<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class CognitoMiddleware
 *
 * @package App\Http\Middleware
 */
class CorsMiddleware
{
    
    /**
     * Cognito Authorizationヘッダのハンドラ
     *
     * @param  Request $request リクエスト
     * @param  Closure $next 次の処理
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $headers = [
          // TODO 本当はIonicWebViewのhttp://localhost:8080のみを許可したいが、MonacaIDEでも動作するように、一旦*
          'Access-Control-Allow-Origin' => '*',
          'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
          'Access-Control-Allow-Credentials' => 'true',
          'Access-Control-Max-Age' => '86400',
          'Access-Control-Allow-Headers' => 'Content-Type, Authorization, X-Requested-With'
        ];
        
        if ($request->isMethod('OPTIONS')) {
            return response()->json('{"method":"OPTIONS"}', 200, $headers);
        }
        
        $response = $next($request);
        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }
        
        return $response;
    }
}
