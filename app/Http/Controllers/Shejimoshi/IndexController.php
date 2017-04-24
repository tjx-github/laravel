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
        "danli"=>'单例模式',
        "celue"=>"策略模式",
    ];
    public function index(){
        echo "<a href='".  url("?show") ."'>show</a><br />\n";
    }
    //注册树
    public function zhucheshu(){
        
        Zhuceshu\ShuclassController::set("shu", new Zhuceshu\ShuController());
        Zhuceshu\ShuclassController::set("shu2", new Zhuceshu\Shu2Controller());
        Zhuceshu\ShuclassController::get("shu2")->i();
        Zhuceshu\ShuclassController::get("shu")->i();
        Zhuceshu\ShuclassController::_unset("shu");
    }
    
    //适配器
    public function shipeiqi(){
       $obj= new Shipeiqi\PdoController();
//       $obj= new Shipeiqi\MysqliController();
       $obj->connect("localhost","tjx","Tjx123","test"); #windows
//       $obj->connect("192.168.2.106","tjx","Tjx123","test"); #linux
       $obj->query("select * from ta");
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
    #单例
    public function danli(){
        $obj = Danli\DanliclassController::getobj();
        echo $obj->md5;
        $obj = Danli\DanliclassController::getobj();
        echo $obj->md5;
        $obj = Danli\DanliclassController::getobj();
        echo $obj->md5;
        $obj = Danli\DanliclassController::getobj();
        echo $obj->md5;
        $obj = Danli\DanliclassController::getobj();
        echo $obj->md5;
    }
    
    //策略模式
    public function celue(){
        
    }
    
}

 