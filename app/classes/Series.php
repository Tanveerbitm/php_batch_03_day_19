<?php

namespace App\classes;

class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $str;
    protected $i;
    protected $num=0;
    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

    }
    public function index(){
        if($this->startingNumber && $this->endingNumber){
            for($this->i=$this->startingNumber;$this->i<=$this->endingNumber;$this->i++){
                if($this->i < $this->endingNumber) {
                    $this->str .= $this->i . '+';
                }
                else{
                    $this->str .= $this->i;
                }
                $this->num += $this->i;
            }
            return [
                'result'=> $this->str.='='.$this->num,
                'starting_number'=> $this->startingNumber,
                'ending_number'=> $this->endingNumber
            ];
        }
        return '';

    }

}