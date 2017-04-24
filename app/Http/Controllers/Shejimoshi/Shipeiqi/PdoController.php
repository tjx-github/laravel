<?php

namespace App\Http\Controllers\Shejimoshi\Shipeiqi;

class PdoController implements InterfaceController
{
    private $db;
    public function close() {
        
    }
    public function connect($dbhost, $dbuser, $dbpasswod, $dbname) {
        try{
            $this->db=new \PDO("mysql:dbname={$dbname};host={$dbhost}",$dbuser,$dbpasswod);
        }catch(PDOException  $err){
//            echo 'Connection failed: ' . $err->getMessage();
            die;
        }
        
    }
    public function delete() {
        
    }

    public function query($sql) {
        $sqlobject=$this->db->prepare($sql);
        $sqlobject->execute();
        print_r($sqlobject->fetchall());
            echo "我是pdo";
    }

//
}
