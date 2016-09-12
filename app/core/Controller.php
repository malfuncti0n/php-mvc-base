<?php

/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/11/2016
 * Time: 7:44 PM
 */
class Controller
{
   // protected $method='index';
    protected $controller;

    
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

    }
    //function gia na kanoume load osous controller den antistixoun se
    //route
    public function loadControllerMethod($controller,$method,$params=[]){
            if(file_exists('../app/controllers/'. $controller. 'Controller.php')){
            $this->controller = $controller.'Controller';
            require_once '../app/controllers/'. $this->controller . '.php';
            $this->controller= new $this->controller;
            if(method_exists($this->controller,$method)){
                call_user_func_array([$this->controller,$method],$params);
            }
            }
        
    }


}