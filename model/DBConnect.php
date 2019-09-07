<?php

class DBConnect{
    private $db = null;
    private $stm = null;

    function __construct($dbName='php2408_banhang', $user='root', $pass=''){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=$dbName", $user, $pass);
            $this->db->exec('set names utf8');
            // echo 'connect successfully';
        }
        catch(\Exception $e){
            echo $e->getMessage();
            die();
        }
    }

    //INSERT/UPDATE/DELETE
    function executeQuery($sql, $data = []){
        $this->stm = $this->db->prepare($sql);
        return $this->stm->execute($data);
    }

    function getLastId(){
        return $this->db->lastInsertId();
    }

    //SELECT 1 row
    function loadOneRow($sql, $data = []){
        $check = $this->setStatement($sql, $data);
        if($check){
            return $this->stm->fetch(PDO::FETCH_OBJ);
        }
        throw new Exception("Wrong query: $sql");
    }

    //SELECT > 1 row
    function loadMoreRow($sql ,$data=[]){
        $check = $this->setStatement($sql, $data);
        if($check){
            return $this->stm->fetchAll(PDO::FETCH_OBJ);
        }
        throw new Exception("Wrong query: $sql");
    }

    function setStatement($sql, $data = []){
        $this->stm = $this->db->prepare($sql);
        for($i= 1; $i <= count($data); $i++){
            $this->stm->bindValue($i,$data[$i-1]);
        }
        
        return $this->stm->execute();
    } 

}

?>