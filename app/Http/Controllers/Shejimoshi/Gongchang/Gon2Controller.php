<?php

namespace App\Http\Controllers\Shejimoshi\Gongchang;
class Gon2Controller 
{
    static public function Getobj(){
        return  new self;
        
    }
    public function ww(){
        echo __FILE__;
    }
}
