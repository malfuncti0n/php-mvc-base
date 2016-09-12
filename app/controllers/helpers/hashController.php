<?php

/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/12/2016
 * Time: 6:12 PM
 */
class hashController extends Controller
{
   private $config;
    public function __construct()
    {

    }

    static function password($password){
        global $config;
        return password_hash($password,
            $config->get('app.hash.algo'),
            ['cost'=>$config->get('app.hash.cost')]);
    }

    static function passwordCheck($password,$hash){
        return password_verify($password,$hash);
    }

}
