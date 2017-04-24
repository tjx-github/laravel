<?php

namespace App\Http\Controllers\Shejimoshi\Danli;

class DanliclassController 
{
    private  static $obj=false;
    public $md5='';
    #单例就是让外部不能new，
    private function __construct() {
        $this->md5=md5( mt_rand(5, 15))."<br />";
    }
    public static function getobj(){
//        return   new self; //去掉注
//        释就能明显感到单例了
        if(self::$obj === false){  #判断是已经new过，有就直接返回没有就new
            return  self::$obj= new self;
        }else{
            return self::$obj;
        }
    }
}
