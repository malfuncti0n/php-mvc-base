<?php
/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/11/2016
 * Time: 7:49 PM
 */
class homeController extends  Controller
{
    protected $user;

    public function __construct()
    {
        //etsi fortwnw modelo
        $this->user= $this->model('User');
       // var_dump($this->user);
    }

    public function index($params=[]){

        //old view without twig.
        //$user=$this->user;
        //$user->name=$name;
        // echo $user->name;
        //old way
        //  $this->view('home/index.html',['name'=>$user->name]);
        //$this->loadControllerMethod('test','test',array());
        echo $this->view()->render('home/index.twig.html',array('banana'=>'ptata'));
    }


    public function create($username='',$email=''){
        User::create([
            'username' =>$username,
            'email' => $email
        ]);
    }




}