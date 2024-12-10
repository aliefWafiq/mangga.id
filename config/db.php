<?php 

class koneksi  {
    public function DbConnect(){
        $db_server = "localhost";
        $db_name = "mangga";
        $db_pass = "";
        $db_user = "root";

        try{
            $db_connect = new PDO("mysql:host=$db_server;dbname=$db_name;", $db_user, $db_pass);
            $db_connect->exec("set names utf8");
            $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db_connect;
        }catch(PDOException $e){
            return 'failed = ' . $e->getMessage();
        }
    }
}

?>