<?php

class proses {
    protected $db;

    function getDb() {
        return $this->db;
    }

    function __construct($db){
        $this->db = $db;
    }

    function list($sql){
        $row = $this->db->prepare($sql);
        $row->execute();
        return $hasil = $row->fetchall();
    }

    function show($sql, $params){
        $row = $this->db->prepare($sql);
        $row->execute($params);
        $hasil = $row->fetch(PDO::FETCH_ASSOC);
        return $hasil;
    }

    function action($sql){
        $row = $this->db->prepare($sql);
        return $hasil = $row->execute();
    }
}

?>
