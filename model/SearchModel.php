<?php

include_once 'DBConnect.php';

class SearchModel extends DBConnect{
    function findProducts($keyword){
        $sql = "SELECT p.*, u.url
                FROM products p
                INNER JOIN page_url u 
                ON u.id = p.id_url
                WHERE name LIKE '%$keyword%'
                OR price = '$keyword'";
        return $this->loadMoreRow($sql);
    }
}

?>