<?php

namespace App\Http\Controllers\Shejimoshi;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public static $name=[
        "zhucheshu"=>"注册树模式",
        "shipeiqi"=>"适配器模式",
        "gongchang"=>"工厂模式",
        "guanchazhe"=>"观察者模式",
    ];
    public function index(){
        echo "<a href='".  url("?show") ."'>show</a><br />\n";
    }
    //注册树
    public function zhucheshu(){
         
        
    }
    
    //适配器
    public function shipeiqi(){
        
    }
    
    //工厂模式
    public function gongchang(){
       print_r(Gongchang\GongchangclassController::newobj("App\Http\Controllers\Shejimoshi\Gongchang\Gon2Controller")->ww());
       echo "<br>\n";
       print_r(Gongchang\GongchangclassController::newobj("App\Http\Controllers\Shejimoshi\Gongchang\GonController"));
    }
    #观察者
    public function guanchazhe(){
        
    }
    
    
}

 