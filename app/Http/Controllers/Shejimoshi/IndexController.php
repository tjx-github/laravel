<?php

namespace App\Http\Controllers\Shejimoshi;

use App\Http\Controllers\Controller;
class IndexController extends Controller

{
    public function __construct() {
        $fun=get_class_methods(\App\Http\Controllers\Shejimoshi\IndexController::class);
        array_shift($fun);
        echo "<center>";
        foreach($fun as $value){
//             Route::get($value, "IndexController@{$value}");
            echo "<a href='".  url($value) ."'>{$value}</a><br />\n";
        }
        echo "</center><hr />\n";
    }
    public function y(){
        session_start();
        $_SESSION['sdds']='asdasd';
        echo md5(date("Y-m-d H:i:s"));
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

 