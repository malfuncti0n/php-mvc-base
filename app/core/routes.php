<?php 
//here we defining our routes

use Illuminate\Routing\Router;

$router->get('/', 'homeController@index')->name('home.index');
$router->get('/user','userController@index')->name('user.index');


// catch-all route
$router->any('{any}', function () {
    return 'Nothing here pall';
})->where('any', '(.*)');