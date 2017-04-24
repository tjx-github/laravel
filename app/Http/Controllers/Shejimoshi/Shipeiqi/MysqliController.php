<?php

namespace App\Http\Controllers\Shejimoshi\Shipeiqi;
class MysqliController implements InterfaceController
{
    private $con;
    public function connect($dbhost, $dbuser, $dbpasswod, $dbname) {
        $this->con=new \mysqli($dbhost,$dbuser,$dbpasswod,$dbname);

       
    }

    public function delete() {
        
    }

    public function query($sql) {
      $d= $this->con->query($sql);
      foreach($d as $row){
          print_r($row);
      }
      echo "我是mysqli";
    }

    public function close() {
        
    }

}
