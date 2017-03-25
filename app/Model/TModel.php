<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class TModel extends Model{
    protected $table="org_table_name";  #当模型名称跟表名相同时无需定义
    protected $primaryKey ="id";
    
    public static function GetIdData($id){
        return self::where("id","=",$id)->get();
    }
    
}

