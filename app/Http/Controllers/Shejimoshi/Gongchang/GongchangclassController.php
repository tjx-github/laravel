<?php

namespace App\Http\Controllers\Shejimoshi\Gongchang;

#工厂模式
#工厂模式是有工厂方法或类生成对象，而不是直接new

class GongchangclassController 
{
    static public function newobj($classname){
        return  $classname::Getobj();
         
    }

}
