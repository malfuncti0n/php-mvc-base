<?php
/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/11/2016
 * Time: 7:43 PM
 */


use Noodlehaus\Config;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class App{

  // protected $config;

    protected $controller='homeController';
    //arkikopoieis wste panta na fortonei mode, akoma kai otan de tou dosoume
    protected $mode;

    protected $method='index';

    protected $params=[];




    public function __construct()
    {

        $url=[];
        //to url poy exei ginei rewrite apo to .htacces se metavlitikh get
        //to spame kai to epistrefoume se array
       $url= $this->parseUrl();

        //pernoume to mode poy exei dilwthei sro arxzei
        $this->mode=file_get_contents('../mode.php');


        //pernaw to config se mia metavliti diathesimh se olo to contex
        global $config;
        $config=Config::load('../app/config/'. $this->mode .'.php');



        //database connection
        require_once '../app/database.php';
        //telos database connection

        $events = new Dispatcher(new Container);
        // Create the router instance
        $router = new Router($events);
        // Load the routes
        require_once 'routes.php';
        // Create a request from server variables
        $request = Request::capture();
        // Dispatch the request through the router
        $response = $router->dispatch($request);
        // Send the response back to the browser
        $response->send();

    }

    public function parseUrl(){
        if(isset($_GET['url'])){

          return $url=explode('/',filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));

        }
    }

    public function getMode(){

    }
}
