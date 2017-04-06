<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#空间命名
Route::group(['namespace' => 'Shejimoshi'], function () {
        Route::get("/", "IndexController@index");
        if(isset($_GET['show'])){
            $class=\App\Http\Controllers\Shejimoshi\IndexController::class;
                echo "<center>";
                    foreach(get_class_methods($class) as $value){
                        if(array_key_exists($value, $class::$name)){
                            Route::get($value, "IndexController@{$value}");
                                echo "<a href='".  url("{$value}?show") ."'>{$class::$name[$value]}</a><br />\n";
                        }
                    }
                echo "</center><hr>";
        }
});     

//路由关联controller
        Route::get("blibli/{id}",["uses"=> "OndirController@contest"])->where("id","^[^a-z][0-9a-z]{2,5}") ; #http://laravel.xuexi.com/blibli/4sdds

        Route::get("haha/{id}", ["uses" =>"Test/ConController@contest"]);
        Route::get("bailei", "OndirController@my");
        #模型
        Route::get("orm_insert", "OndirController@orm_insert");
        Route::get("orm_update", "OndirController@orm_update");
        Route::get("orm_select", "OndirController@orm_select");
        Route::get("mail", "OndirController@pmail");
        Route::get("view", ["uses"=>"OndirController@viewextends"]);
        Route::get("echourl",["uses"=>"OndirController@echourl"]);
        Route::get("cache",["uses"=>"OndirController@test_chache"]);
        Route::get("duilie",["uses"=>"OndirController@DueiLie"]);
        Route::get("pagelist",["uses"=>"OndirController@pagelist"]);


#路由群主
//Route::group();

#基础路由
        Route::get("phpinfo",function(){
            phpinfo();
        });
        Route::get("server",function(){
            print_r($_SERVER);
        });
        #http://laravel.xuexi.com/post
        Route::post("post",function(){
        //    return view();
            return "eeee";
        });
#路由别名
      

# 多请求路由http://laravel.xuexi.com/aaa
        Route::match(['get','post'],'aaa',function(){
           return "多请求路由  限制请求类型" ;
        });
        #http://laravel.xuexi.com/any
        Route::any('any',function(){
            return "多请求路由，无限制 ";
        });
        
#路由多参数 http://laravel.xuexi.com/can/第一个参数/第二个参数
        Route::get('can/{id}/{aa}',function($id,$aa){
            return "返回参数{$id}......{$aa}";
        });
        
        
#路由参数默认值 http://laravel.xuexi.com/can
        Route::get('can/{id?}',function($id="mrz"){
            return "返回参数{$id}";
        });
        
        
#路由参数正则表达 http://laravel.xuexi.com/zz/aaf
        Route::get('zz/{name}',function($iffd){ #此处变量名可以不相同
            return "正则{$iffd}";
        })->where('name',"^a[a-z]{2,4}"); #此处必须相同


        


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
