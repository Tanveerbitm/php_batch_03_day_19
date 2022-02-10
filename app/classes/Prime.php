<?php

namespace App\classes;

class Prime
{
    protected $number;
    protected $i;

    public function __construct($post=null)
    {
        $this->number=(int)$post['given_number'];
    }
    public function index(){
        if($this->number == 1 || $this->number == 2){return "prime";}
        else {
            for ($this->i = 2; $this->i <= sqrt($this->number)+2; $this->i++) {
                if ($this->number % $this->i== 0) {
                    return "not prime";
                }
            }
            return 'prime';
        }
    }

}