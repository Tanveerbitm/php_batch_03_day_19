<?php


namespace App\classes;


class Auth
{
    protected $username;
    protected $password;
    public function login(){
        header('location:action.php?pages=login');
    }
    public function logout(){

    }

}