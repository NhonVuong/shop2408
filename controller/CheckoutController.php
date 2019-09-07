<?php
include_once 'BaseController.php';
include_once 'model/CheckoutModel.php';
include_once 'helper/Cart.php';
include_once 'helper/functions.php';
include_once 'helper/PHPMailer/mail.php';
!isset($_SESSION) ? session_start() : '';
class CheckoutController extends BaseController{

    function getCheckoutPage(){
        $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
        if($oldCart==null)
        header('Location:http://localhost:1603/shop2408/trang-chu');
        return $this->loadView('checkout', 'Thanh toán');
    }

    function postCheckout(){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $note = $_POST['note'];
        $paymentMethod = $_POST['payment_method'];
        $model = new CheckoutModel;
        $idProduct = $model->findProduct();
        // $id = $model->deleteProduct($idProduct->id);
        $idCustomer = $model->insertCustomer($fullname, $email, $address, $phone, $gender);

        // if($id){
        if($idCustomer){
            //insert bill
            $dateOrder = date('Y-m-d H:i:s',time());
            $oldCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice;
            $_SESSION['price']=$total;
            $promtPrice = $cart->promtPrice;
            $token = strRandom();
            $tokenDate = $dateOrder;
            $idBill = $model->insertBill($idCustomer,$dateOrder, $total, $promtPrice, $paymentMethod, $note, $token, $tokenDate);
            if($idBill){
                // insert bill detail
                foreach($cart->items as $idProduct=>$item){
                    $quantity = $item['qty'];
                    $price = $item['price'];
                    $discountPrice = $item['discountPrice'];
                    $check = $model->insertBillDetail($idBill,$idProduct,$quantity,$price, $discountPrice);
                    if($check==false){
                        $model->delBillDetail($idBill);
                        $model->delBill($idBill);
                        $model->delCustomer($idCustomer);
                    }
                }
                // unset($_SESSION['cart']);
                
                //send mail
                $link = "http://localhost:1603/shop2408/order/$token";
                $linkCancel = "http://localhost:1603/shop2408/order-cancel/$token";
                $linkComplete = "http://localhost:1603/shop2408/order-complete/$token"; 
                $subject = "Đặt hàng thành công - Xác nhận đơn hàng DH-$idBill";
                
                $tableContent = 
                "<table border='1' border-spacing='0px' width='800px'>
                    <thead style='background-color:#f3f3f3'>
                        <th>Mã sản phẩm</th>
                        <th>Thông tin sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                    </thead>
                    <tbody>";
                    foreach($cart->items as $idProduct=>$item){
                        $price = 0;
                        if($item['item']->promotion_price != 0){
                            $price = ($item['item']->promotion_price);
                        }else{
                            $price =($item['item']->price);
                        }
                        $tableContent .="
                        <tr>
                            <td style='text-align:center;'>".'SP-'.$item['item']->id."</td>
                            <td style='text-align:center;'>".$item['item']->name."</td>
                            <td style='text-align:center'>".$item['qty']."</td>
                            <td style='text-align:right'>".number_format($price)."</td>
                            <td style='text-align:right'>".number_format($price*$item['qty'])."</td>
                        </tr>";
                    }
                    $tableContent.="
                    <tr>   
                        <td style='text-align:right;' colspan='4'>Tổng cộng</td>
                        <td style='text-align:right'>".number_format($promtPrice)."</td>
                        </tr>";
                
                    $tableContent.='</tbody></table>';
                    $message = 
                    "<h2>Đơn hàng DH-$idBill</h2>
                    <p>Chào bạn $fullname</p>
                    <p>Cảm ơn bạn đã đặt hàng tại <b>MyStore</b></p>
                    <p>Đơn hàng của bạn đang chờ được xác nhận (trong vòng 24h)</p>
                    <hr/>
                    <h3>Thông tin đơn hàng của bạn:</h3>
                    <table>
                        <tr>
                            <td>Người mua hàng: </td>
                            <td>$fullname</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ: </td>
                            <td>$address</td>
                        </tr>
                        <tr>
                            <td>Giới tính: </td>
                            <td>$gender</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại: </td>
                            <td>$phone</td>
                        </tr>
                        <tr>
                            <td>Hình thức thanh toán: </td>
                            <td>Tiền mặt</td>
                        </tr>
                        <tr>
                            <td>Ghi chú: </td>
                            <td>$note</td>
                        </tr>
                    </table>
        
                    <br/>
                    
                    $tableContent
                   <p><b>Tổng tiền đơn hàng là: ".number_format($promtPrice)." vnd</b></p>
                <p>Vui lòng nhấp vào <a href='$link'>đây</a> để xác nhận đơn hàng</p>
                <p>Để huỷ đơn hàng, bạn chọn vào <a href='$linkCancel'>đây</a> để huỷ</p>
                <p>Thanks and Best Regard!</p>";   

                    $mes =  
                    "<h2>Đơn hàng DH-$idBill</h2>
                    <p>Chào bạn $fullname</p>
                    <p>Cảm ơn bạn đã đặt hàng tại <b>MyStore</b></p>
                    <br/>
                    <h3>Thông tin đơn hàng của bạn:</h3>
                    <table>
                    <tr>
                        <td>Người mua hàng: </td>
                        <td>$fullname</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ: </td>
                        <td>$address</td>
                    </tr>
                    <tr>
                        <td>Giới tính: </td>
                        <td>$gender</td>
                    </tr>
                    <tr>
                        <td>Số điện thoại: </td>
                        <td>$phone</td>
                    </tr>
                    <tr>
                        <td>Hình thức thanh toán: </td>
                        <td>Chuyển khoản</td>
                    </tr>
                    <tr>
                        <td>Ghi chú: </td>
                        <td>$note</td>
                    </tr>
                </table>
                    <br/>
                    
                    $tableContent
                    <p><b>Tổng tiền đơn hàng là: ".number_format($promtPrice)." vnd</b></p>
                    <p>Vui lòng nhấp vào <a href='$linkComplete'>đây</a> để hoàn tất đơn hàng</p>
                    <p>Thanks and Best Regard!</p>";   

                // $_SESSION['success'] = 'Đặt hàng thành công, thông tin đơn hàng được gửi về email, vui lòng kiểm tra email để xác nhận DH';
                if($paymentMethod=="Chuyển khoản"){
                    header('Location:gateway.php');
                    sendMail($email, $fullname, $subject, $mes);
                }
                else if($paymentMethod=="COD"){
                    sendMail($email,$fullname,$subject,$message);
                    $_SESSION['success'] = 'Đặt hàng thành công, thông tin đơn hàng được gửi về email, vui lòng kiểm tra email để xác nhận đơn hàng';
                    header('Location:trang-chu');
                    unset($_SESSION['cart']);
                }
                return;
                
            }
            else{
                $model->delCustomer($idCustomer);
                $_SESSION['error'] = 'Có lỗi xảy ra. Vui lòng thử lại';
            }
        }
        else{
            $_SESSION['error'] = 'Có lỗi xảy ra. Vui lòng thử lại';
        }
        header('Location:dat-hang');
        // }

    }

    function confirmOrder(){
        $token = trim($_GET['token']); 
        if($token==''){
            $_SESSION['error'] = 'Liên kết bạn nhập vào không hợp lệ, vui lòng thử lại';
            header('Location:http://localhost:1603/shop2408/404.html');
            return;
        }
        $model = new CheckoutModel();
        $bill = $model->findBillByToken($token);
        if(!$bill){
            $_SESSION['error'] = 'Liên kết bạn nhập vào không hợp lệ, vui lòng thử lại';
            header('Location:http://localhost:1603/shop2408/404.html');
            return;
        }
        $tokenDate = strtotime($bill->token_date);
        $now = strtotime(date('Y-m-d H:i:s',time()));
        if(strtotime('+1 day',$tokenDate) >= $now){
            $c = $model->updateStatusBill($bill->id);
            if(!$c){
                $_SESSION['error'] = 'Liên kết bạn nhập vào không hợp lệ, vui lòng thử lại';
                header('Location:http://localhost:1603/shop2408/404.html');
                return;
            }
            $_SESSION['success'] = "Đơn hàng đã xác nhận thành công, Chúng tôi sẽ sớm liên hệ và giao hàng trong vòng 5 đến 7 ngày tới";
            header('Location:http://localhost:1603/shop2408/trang-chu');
            return;
        }
        else{
            $_SESSION['error'] = 'Đơn hàng không còn hiệu lực, vui lòng đặt Đơn hàng mới';
            header('Location:http://localhost:1603/shop2408/trang-chu');
            return;
        }
    }

    function cancelOrder(){
        $token = trim($_GET['token']); 
        // if($token==''){
        //     $_SESSION['error'] = 'Liên kết bạn nhập vào không hợp lệ, vui lòng thử lại';
        //     header('Location:http://localhost:1603/shop2408/404.html');
        //     return;
        // }
        $model = new CheckoutModel();
        $bill = $model->findBillByToken($token);
        $c = $model->cancelStatusBill($bill->id);
        $_SESSION['cancel'] = "Đơn hàng đã được huỷ";
        header('Location:http://localhost:1603/shop2408/trang-chu');
        return;
    }

    function completeOrder(){
        $token = trim($_GET['token']); 
        $model = new CheckoutModel();
        $bill = $model->findBillByToken($token);
        $c = $model->completeStatusBill($bill->id);
        $_SESSION['success'] = "Đơn hàng đã hoàn tất, cảm ơn bạn và hẹn gặp lại";
        header('Location:http://localhost:1603/shop2408/trang-chu');
        return;
    }
}
?>