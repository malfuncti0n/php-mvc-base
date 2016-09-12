<?php
/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/11/2016
 * Time: 7:43 PM
 */
class App{


    protected $controller='homeController';

    protected $method='index';

    protected $params=[];

    public function __construct()
    {
        $url=[];
        //to url poy exei ginei rewrite apo to .htacces se metavlitikh get
        //to spame kai to epistrefoume se array
      $url= $this->parseUrl();

        //an h prwti parametros poy kaname extrack yparxei
        //kane require ton controller
        if(file_exists('../app/controllers/'. $url[0]. 'Controller.php')){
            $this->controller = $url[0].'Controller';
            unset($url[0]);

        }
        //diaforetika kane require ton home controller
        require_once '../app/controllers/'. $this->controller . '.php';
        $this->controller= new $this->controller;
        if(isset($url[1])){
            //edw kitame an yparxei h methothos ston controller
            if(method_exists($this->controller,$url[1])){
                $this->method=$url[1];
                unset($url[1]);
            }

        }
        //oti einai meta th methodo to epistrefoume san array
        //an einai keno, epistrefoume adio array
        if(isset($url)) {
            $this->params = array_values($url);
        }else{
            $this->params=array();
        }
      //  print_r($this->params);

        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseUrl(){
        if(isset($_GET['url'])){

          return $url=explode('/',filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));

        }
    }
}