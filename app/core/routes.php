<?php 
//here we defining our routes

use Illuminate\Routing\Router;


//home routes
$router->get('/', 'homeController@index')->name('home.index');

//user managment routes
$router->get('/user','userController@index')->name('user.index');
$router->get('/user/login', 'userController@getLogin')->name('user.login');
$router->post('/user/login', 'userController@postLogin');
$router->get('/user/register', 'userController@getRegister')->name('user.register');
//$router->post('/user/register', 'userController@postRegister');

$router->post('/user/register', function(){
    echo hashController::password('hawk');
  echo inputController::get('email');
});

$router->get('/user/profile', 'userController@getProfile')->name('user.profile');



// catch-all route
$router->any('{any}', function () {
    return 'Nothing here pall';
})->where('any', '(.*)');