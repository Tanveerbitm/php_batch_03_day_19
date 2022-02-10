<?php

namespace App\classes;
session_start();
class Authorized
{
    public function accessMiddleware(){
        if(isset($_SESSION['name'])){
            return true;
        }else{
            return false;
        }
    }
}