<?php

include_once "BaseController.php";
include_once "model/ShoppingCartModel.php";
include_once "helper/Cart.php";

// session_start();
if(!isset($_SESSION)) session_start();

class Shopping_cartController extends BaseController{
    function getShopping_Cart(){
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        // print_r($cart);
        // die;
        $data = [
            'cart' => $cart,
        ];
        return $this->loadView('shopping_cart', 'Giỏ hàng', $data);
    }

    function addToCart(){
       $id = $_POST['idSP'];
       $model = new ShoppingCartModel;
       $product = $model->findProduct($id);
       // print_r($product);
        if(!$product){
            echo json_encode([
                'code' => 0,
                'message' => 'Không tìn thấy sản phẩm'
            ]);
        }
        $qty = isset($_POST['qty']) ? (int) $_POST['qty'] : 1;
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $qty);
        $_SESSION['cart'] = $cart;
        // print_r($_SESSION['cart']);
        echo json_encode([
            'code' => 1,
            'message' => 'Sản phẩm '.$product->name.' đã được thêm vào giỏ hàng',
            'data'=> $cart->totalQty. 'SP: '.number_format($cart->promtPrice),
        ]);
    }

    function updateCart(){
        $idSP = $_POST['idSP'];
        $model = new ShoppingCartModel;
        $product = $model->findProduct($idSP);
        if(!$product){
            echo json_encode([
                'code' => 0,
                'message' => 'Không tìn thấy sản phẩm'
            ]);
        }
        $qty = isset($_POST['qty']) ? (int) $_POST['qty'] : 1;
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $cart->update($product, $qty);
        $_SESSION['cart'] = $cart;
        // print_r($_SESSION['cart']);
        echo json_encode([
            'code' => 1,
            'message' => "",
            'data'=> [
                'cart_header' => $cart->totalQty. 'SP: '.number_format($cart->promtPrice),
                'price' => number_format($cart->items[$idSP]['price']),
                'discountPrice' => number_format($cart->items[$idSP]['discountPrice']),
                'totalPrice' => number_format($cart->totalPrice),
                'promtPrice' => number_format($cart->promtPrice)
            ],
        ]);

    }

    function deleteCart(){
        $id = $_POST['idSP'];
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        $_SESSION['cart'] = $cart;
        echo json_encode([
            'code' => 1,
            'message' => "",
            'data'=> [
                'cart_header' => $cart->totalQty. 'SP: '.number_format($cart->promtPrice),
                'totalPrice' => number_format($cart->totalPrice),
                'promtPrice' => number_format($cart->promtPrice)
            ],
        ]);
    }
}

?>