<?php 
//here we defining our routes

use Illuminate\Routing\Router;


/** @var $router Router */
//$router->get('/', function () {
//    return 'hello world!';
//});

$router->get('/', 'homeController@index')->name('home.index');

$router->get('/user','userController@index')->name('user.index');


//$router->group(['namespace' => 'App\Controllers', 'prefix' => 'users'], function (Router $router) {
//    $router->get('/', ['name' => 'users.index', 'uses' => 'UsersController@index']);
//    $router->post('/', ['name' => 'users.store', 'uses' => 'UsersController@store']);
//});
// catch-all route
$router->any('{any}', function () {
    return 'Nothing here pall';
})->where('any', '(.*)');