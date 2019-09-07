<?php

include_once "DBConnect.php";
class IndexModel extends DBConnect{
    function selectSlide(){
        $sql = "SELECT * FROM slide WHERE status = 1";
        return $this->loadMoreRow($sql);
    }

    function selectSpecialProduct(){
        $sql = "SELECT p.*, u.url AS url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE status = 1 AND deleted = 0";
        return $this->loadMoreRow($sql);
    }

    function selectNewProduct(){
        $sql = "SELECT p.*, u.url AS url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE new = 1 AND deleted = 0";
        return $this->loadMoreRow($sql);
    }

    function selectOldProduct(){
        $sql = "SELECT p.*, u.url AS url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE new = 0 AND deleted = 0
                LIMIT 0,10";
        return $this->loadMoreRow($sql);
    }

    function selectBestSeller(){
        $sql="SELECT p.*,u.url AS url, sum(quantity) AS total
            FROM bill_detail d
            INNER JOIN products p
            ON d.id_product = p.id
            INNER JOIN page_url u
            ON p.id_url = u.id
            GROUP BY id_product
            ORDER BY total DESC
            LIMIT 0,10";
        return $this->loadMoreRow($sql);
    }

    function selectSaleProduct(){
        $sql = "SELECT p.*, u.url AS url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE promotion_price <> 0 AND deleted = 0
                LIMIT 0,10";
        return $this->loadMoreRow($sql);
    }
}

?>