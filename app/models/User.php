<?php

/**
 * Created by PhpStorm.
 * User: savva
 * Date: 9/11/2016
 * Time: 8:55 PM
 */

use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    protected $table ='users';
    protected $fillable =[
        'email',
        'username',
        'password',
        'active',
        'active_hash',
        'remember_identifier',
        'remember_token'
    ];
}