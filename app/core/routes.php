<?php 
//here we defining our routes

use Illuminate\Routing\Router;

$router->get('/', 'homeController@index')->name('home.index');
$router->get('/user','userController@index')->name('user.index');
$router->get('/user/login', 'userController@getLogin')->name('user.login');
$router->get('/user/register', 'userController@getRegister')->name('user.register');


// catch-all route
$router->any('{any}', function () {
    return 'Nothing here pall';
})->where('any', '(.*)');