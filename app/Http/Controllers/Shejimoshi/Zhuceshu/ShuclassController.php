<?php

namespace App\Http\Controllers\Shejimoshi\Zhuceshu;

#注册树一般提供3个功能
class ShuclassController
{
    private static $obj=[];
    #存入
    static function  set ($objid,$obj){
        self::$obj[$objid]=$obj;
    }
    #删除
    static function _unset($objid){
        unset(self::$obj[$objid]);
    }
    #取得对象
    static function get($objid){
        return self::$obj[$objid];
    }
}
