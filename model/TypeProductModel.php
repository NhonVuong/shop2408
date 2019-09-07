<?php

include_once "DBConnect.php";

class TypeProductModel extends DBConnect{
    function selectCategories($urlType = null){
        $sql = "SELECT c.*, u.url as url
                FROM categories c
                INNER JOIN page_url u
                ON c.id_url = u.id";
        if($urlType != null){
            $sql .= " WHERE url = '$urlType'";
            return $this->loadOneRow($sql);
        }
        return $this->loadMoreRow($sql);
    }

    // function selectCategoriesByUrl($url){
    //     $sql = "SELECT c.*
    //             FROM categories c
    //             INNER JOIN page_url u
    //             ON c.id_url = u.id
    //             WHERE url = '$url'";
    //     return $this->loadOneRow($sql);
    // }
    
    function selectProductById($idType,$position=-1,$qty=-1){
        $sql = "SELECT p.*, u.url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE id_type = $idType AND deleted = 0";
        // if($position>=0 && $qty >= 0){
        //     $sql .= " LIMIT $position,$qty";
        // }     
        return $this->loadMoreRow($sql);
    }


    // function countProductByType($idType){
    //     $sql = "SELECT count(p.id) as Soluong
    //             FROM products p
    //             WHERE id_type = $idType";
    //     return $this->loadOneRow($sql);
    // }

    function countProductByType(){
        $sql = "SELECT c.*, u.url as url, count(p.id_type) as Soluong
                FROM categories c
                INNER JOIN products p
                ON c.id = p.id_type
                INNER JOIN page_url u
                ON c.id_url = u.id
                WHERE deleted = 0
                GROUP BY p.id_type";
                //GROUP BY c.id
        return $this->loadMoreRow($sql);
    }

    function selectProductByIdType($idType){
        $sql = "SELECT p.*,  u.url as url
                FROM products p
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE id_type = $idType";
        return $this->loadMoreRow($sql);
    }

    function selectSpecialProduct(){
        $sql = "SELECT p.*, u.url AS url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE status = 1 AND deleted = 0
                LIMIT 0,3";
        return $this->loadMoreRow($sql);
    }

    // function countPrice(){
    //     $sql = "SELECT count(price) soluong
    //             FROM products
    //             WHERE price BETWEEN 9000000 AND 20000000";
    //     return $this->loadMoreRow($sql);
    // }

} 

?>