<?php

include_once "model/IndexModel.php";
include_once "BaseController.php";
class IndexController extends BaseController{
    
    function getHomePage(){
        $model = new IndexModel;
        $slide = $model->selectSlide();
        $specialProduct = $model->selectSpecialProduct();
        $bestSeller = $model->selectBestSeller();
        $specialSale = $model->selectSaleProduct();
        $newProduct = $model->selectNewProduct();
        $oldProduct = $model->selectOldProduct();
        // print_r($specialProduct );
        // die;
        $data = [
            'slide' => $slide,
            'specialProduct' => $specialProduct,
            'bestSeller' => $bestSeller,
            'specialSale' => $specialSale,
            'newProduct' => $newProduct,
            'oldProduct' => $oldProduct,
        ];
        return $this->loadView('index','Trang chủ', $data);
    }
    
}

?>