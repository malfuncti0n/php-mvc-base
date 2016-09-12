<?php

/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/12/2016
 * Time: 3:05 AM
 */
class userController extends Controller
{

    public function index($params=[]){
        echo $this->view()->render('user/index.twig.html');
    }

}