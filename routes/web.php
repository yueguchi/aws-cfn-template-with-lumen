<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'healthy';
});
$router->group(['prefix' => 'api', 'middleware' => ['cognito', 'cors']], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {
        // users
        $router->post('users', ['uses' => 'UserController@store']);
        $router->get('users', ['uses' => 'UserController@index']);
        
        
        // ここからLaraConf情報
        $router->get('infos', ['uses' => 'InfoController@index']);
        $router->get('timetables', ['uses' => 'TimeTableController@index']);
        $router->get('master', ['uses' => 'MasterController@index']);
        $router->patch('like/{uuid}/increments', ['uses' => 'LikeController@increment']);
        $router->patch('like/{uuid}/decrements', ['uses' => 'LikeController@decrement']);
    });
});
