<?php

/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/11/2016
 * Time: 7:44 PM
 */
class Controller
{

    //methodos poy fortonei to modelo kai to epistrefei
    public function model($model){
        require_once '../app/models/'. $model. '.php';
        return new $model;
    }
    //methodos gia na mas epistrepsei to view
   // public function view($view, $data=[]){
    public function view(){
        $loader = new Twig_Loader_Filesystem('../app/views');
        $twig = new Twig_Environment($loader, array(
            'cache' => '../app/cache','debug' => true
        ));
        $twig->addExtension(new Twig_Extension_Debug());
        return $twig;


        //old view way
       // require_once '../app/views/' . $view .'.php';
    }


}