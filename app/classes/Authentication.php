<?php

namespace App\classes;
class Authentication
{
    protected $userName;
    protected $email;
    protected $password;
    protected $file;
    protected $data;
    protected $text;
    protected $userFileName="user.txt";
    protected $name='';
    protected $content;
    protected $firstPart;
    protected $secondPart;
    protected $position;



    public function signIn($post=null){
        $this->email = $post['email'];
        $this->password = $post['password'];
        if($this->email && $this->password ){
            if(@file_get_contents($this->userFileName)){
                if( str_contains(file_get_contents($this->userFileName),",".$this->email.",".$this->password."$") ){
                   $this->content = file_get_contents($this->userFileName);
                   $this->text = substr($this->content,0,strpos($this->content,",".$this->email.","));
                   for($i=strlen($this->text)-1;$i>=0;$i--){
                       echo $this->text[$i];
                       if($this->text[$i]=='$'){break;}
                       $this->name.=$this->text[$i];
                   }

                   $_SESSION["name"] = strrev($this->name);
                   $_SESSION["email"] = $this->email;
                   header('location: action.php?pages=dashboard');
                }
            }
        }
        return 'Incorrect Email Or Password';
    }


    public function signUp($post=null){
        $this->userName = $post['user_name'];
        $this->email = $post['email'];
        $this->password = $post['password'];
        if($this->userName && $this->email && $this->password ){
            if(@file_get_contents($this->userFileName)){
                if( str_contains(file_get_contents($this->userFileName),",".$this->email.",") ){
                    return 'Email Already Exist !';
                }
            }
                $this->file = fopen($this->userFileName,'a');
                $this->data = "$this->userName,$this->email,$this->password$";
                fwrite($this->file,$this->data);
                fclose($this->file);
                header('location: action.php?pages=login');
        }
        else{
            return '';
        }
    }
    public function signOut(){
        unset($_SESSION['name']);
        header('location: action.php?pages=login');
    }
}