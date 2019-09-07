<?php

include_once "BaseController.php";
include_once "model/SearchModel.php";
include_once "model/TypeProductModel.php";
include_once "model/SingleProductModel.php";

class SearchController extends BaseController{
    function getSearch(){
        if(!isset($_GET['keyword']) || $_GET['keyword'] == ''){
            header('Location:trang-chu');
        }
        else if(isset($_GET['keyword'])){
            $model = new SearchModel;
            $model1 = new TypeProductModel;
            $allType = $model1->countProductByType();
            $keyword = trim($_GET['keyword']);
            $products = $model->findProducts($keyword);
            // print_r($products);die;
            
            $specialProduct = $model1->selectSpecialProduct();
            $data = [
                'allType'=>$allType,
                'products'=>$products,
                'specialProduct' => $specialProduct,
            ];
            
        return $this->loadView('search','Search',$data);
        }
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