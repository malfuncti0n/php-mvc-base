<?php
/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/12/2016
 * Time: 6:19 PM
 */
return [
    'app' =>[
        'url'=>'http://openideas.local',
        'hash'=>[
            'algo'=>PASSWORD_BCRYPT,
            'cost'=>10
        ]
    ],
    'db'=>[
        'driver'=>'mysql',
        'host'=>'127.0.0.1',
        'name'=>'openideas',
        'usename'=>'root',
        'password'=>'',
        'charset'=>'utf8',
        'colatrion'=>'utf8_unicode_ci',
        'prefix'=>'plr_'
    ],
    'auth'=>[
        'session'=>'user_id',
        'remember'=>'user_r'
    ],
    'mail'=>[
        'smtp_auth'=>true,
        'smtp_secure'=>'tls',
        'hosr'=>'smtp.gmail.com',
        'username'=>'googlemail@gmail.com',
        'password'=>'********',
        'port'=>587,
        'html'=>true
    ],
    'csrf'=>[
         'session'=>'csrf_token'
    ]
];
