<?php

namespace App;

#关联模型
use Illuminate\Database\Eloquent\Model;

#http://laravelacademy.org/post/6979.html#toc_2
class OrgTableName extends Model
{
    protected $table="org_table_name";  #当模型名称跟表名相同时无需定义
    protected $primaryKey ="id";
//    public $timestamps = false;
    protected $fillable = ['name'];
    public static function a()
    {
        dd(self::where("id","=","5")->first());
        exit('s');
    }
}

