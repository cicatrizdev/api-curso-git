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
    return $router->app->version();
});

    $router->group(['prefix' => 'api'], function() use ($router)
    {
        $router->get('', function () use ($router) {
            return 'Default api route';});
        $router->post('language','LanguageController@create');
        $router->put('language/{id}','LanguageController@update');
        $router->delete('language/{id}','LanguageController@delete');
        $router->get('language','LanguageController@index');
    });



