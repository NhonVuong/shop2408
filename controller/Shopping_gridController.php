<?php

include_once "BaseController.php";
include_once "model/TypeProductModel.php";
include_once "helper/Pager.php";

class Shopping_gridController extends BaseController{
    function getShopping_Grid(){

        $model = new TypeProductModel;
        $urlType =  $_GET['url'];
        // $type = $model->selectCategoriesByUrl($urlType);
        $type = $model->selectCategories($urlType);
        // print_r($type);
        // die;
        if(!$type){
            return $this->loadView('404','404 Not Found!');
        }

        if(isset($_GET['page']) && $_GET['page'] != 0){
            $page = (int)$_GET['page'];
        }
        else{ 
            $page = 1;
        }
        // echo $page;
        // die;

        $itemPerPage = 9;
        $position = ($page-1) * $itemPerPage;
        $products = $model->selectProductById($type->id, $position, $itemPerPage);
        // print_r($products);
        // die;
        $countProduct = $model->selectProductById($type->id);
        $totalProduct = count($countProduct);

        $pager = new Pager($totalProduct, $page, $itemPerPage, 3);
        $pagination = $pager->showPagination();

        $allType = $model->countProductByType();
        // print_r($allType); die;
        $specialProduct = $model->selectSpecialProduct();

        $data = [
            'type' => $type,
            'products' => $products,
            'pagination' => $pagination,
            'allType' => $allType,
            'specialProduct' => $specialProduct,
        ];

        return $this->loadView('shopping_grid',$type->name,$data);
    }

    function getProductMenuLeft(){
        $idType = $_POST['idType'];
        $model = new TypeProductModel();
        $listProduct = $model->selectProductByIdType($idType);
        // print_r($listProduct);
        $data = [
            'product' => $listProduct,
        ];
        return $this->loadHtmlAjax('type', $data);
    }
}

?>