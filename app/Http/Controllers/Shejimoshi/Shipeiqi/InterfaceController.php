<?php

namespace App\Http\Controllers\Shejimoshi\Shipeiqi;

# 接口,
interface InterfaceController 
{
    public function query ($sql);#查询数据
    public function connect($dbhost,$dbuser,$dbpasswod,$dbname); #连接
    public function close(); #关闭连接
    public function delete();     #删除数据
    //function ..........
}
