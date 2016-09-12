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

        echo $this->view()->render('home/index.twig.html',array('a_variable'=>'a_value'));
    }


    public function create($username='',$email=''){
        User::create([
            'username' =>$username,
            'email' => $email
        ]);
    }




}
