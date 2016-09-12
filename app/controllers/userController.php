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
       // $params=['msg'=>'Render is ok '];
       // $this->view->()->addGobal('params',$params);
        echo $this->view()->render('user/index.twig.html',array('params'=>$params));
       
    }

}