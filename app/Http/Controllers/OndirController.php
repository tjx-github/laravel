<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\OrgTableName as MX;
use Illuminate\Support\Facades as Fa;

class OndirController extends Controller{
  
    public function test(){
        dd(\App\Model\TModel::GetIdData(4));
        MX::a();
    }
    public function contest($id){
        echo "你好我是controller".__FILE__ ."<br>\n";
//       $df= Fa\DB::table("ta")->insert([
//                ['namex'=>"wul"],
//                ['namex'=>"dssdds"]
//            ]);
//       var_dump($df);
//        var_dump(Fa\DB::insert("insert into ta (namex) values ('aa')"));
//       var_dump(
//               Fa\DB::delete("delete from ta where id=3")
//               );
        return view("Ondir/contest",[
            "var_name"=>"你好我是参数：".$id ."   ",
            "Db_data"=>Fa\DB::select("select * from ta limit 1"),
            "db_table"=>Fa\DB::table("ta")->where(['host'=>"localhost","user"=>"tjx"]) ->limit(1)
        ]);
    }
    
    public function my(){
        Fa\DB::table("ta")
            ->select("namex")  //select与tp中有别，这个是选择要取出列
            ->where([
                ["id",">",2],
                ['id',"<","7"]
            ])
            ->chunk(2,function($b){     
                foreach($b as $name){
                   echo $name->namex ."\n";
                }
                
            });
        
    }
    public function orm_insert(){
        $moxing=new MX;
        $moxing ->name="asddssd";
        $moxing ->md5=md5("qsaf");
        $moxing ->x=  "sddss";
        var_dump($moxing->save());
        
    }
    public function orm_update(){
        $b=MX::where('id',"=",3)
                ->update([
                        "name"=>"update_baidu",
                        "md5"=>md5(time()),
                        "x"=> "sdd"
                    ]);
        var_dump($b);
    }
    public function orm_select(){

        $data=Fa\DB::table("org_table_name")
                ->select(['id',"md5","name as mc"])
                ->paginate(2);
//                ->get();
        var_dump($data);
//        return view("ondir/orm_select",$data);

    }
    public function orm_delete(){
        var_dump(MX::destroy(1));//通过主键id删除
        var_dump(MX::where("md5","=","e2024c644658791a2fff5b6409dc1cb8")->delete());//通过查询删除
        dd(MX::find([2,3])); //聚合查询
    }
    public function viewextends(){
        return view("Ondir/viewextends",["gg"=>"值"]);
    }
    public function echourl(){
        return view("Ondir/echourl");
    }
    public function pmail(){
       $c=["b"=>Fa\Mail::class];
      
       $nr="邮件内容欸";
       $b= $c['b']::raw($nr,function($mailobj){
            $mailobj->subject("zhuti");
            $mailobj->to("3040662002@qq.com");
        });
        var_dump($b);
    }
    public function test_chache(){
        echo $b;
        Fa\Cache::put("keadfay","valuase",1);
//        var_dump(Fa\Cache::add("key","asdfas",20 ));
        echo Fa\Cache::get("key");
//        Fa\Cache::pull("key");
    }
    public function pagelist(){
        $b=Fa\DB::table("org_table_name")->select("name","id as IDD","md5")->where("id","<",8)->paginate(1)->first();
       
        print_r($b);
    }
    public function  DueiLie(){

        $data=file_get_contents("http://www.baidu.com");
        dispatch(
                (new \App\Jobs\SendReminderEmail("3040662002@qq.com","邮件内容".$data))->delay(\Carbon\Carbon::now()->addMinutes(10))
//                new \App\Jobs\SendReminderEmail("3040662002@qq.com","邮件内容".$data)
        );
    }
}

