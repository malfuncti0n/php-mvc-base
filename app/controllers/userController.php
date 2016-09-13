<?php

/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/12/2016
 * Time: 3:05 AM
 */
class userController extends Controller
{
    //flash message implementation
    
    public function index($params=[]){
        

        echo $this->view()->render('user/index.twig.html',array('params'=>$params));
       
    }
    
    public function getLogin(){
        echo $this->view()->render('user/login.twig.html',array());

    }
    
    public function getRegister(){
        echo $this->view()->render('user/register.twig.html',array());
    }

}