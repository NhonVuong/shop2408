<?php

include_once "BaseController.php";
include_once "model/SingleProductModel.php";

class Single_productController extends BaseController{
    function getSingle_Product(){
        $url = $_GET['url'];
        $id = $_GET['id'];

        $model = new SingleProductModel;

        $product = $model->selectProductById($id, $url);
        if(!$product){
            return $this->loadView('404','404 Not Found!');

        }

        $title = $product->name;

        $idType = trim($product->id_type);
        $idProduct = trim($product->id);
        $relatedProducts = $model->selectRelatedProduct($idType, $idProduct);
        // print_r($relatedProducts);
        // die();
        $data = [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ];
        return $this->loadView('single_product',$title, $data);
    }
}

?>