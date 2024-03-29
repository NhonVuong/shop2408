<!-- Main Container -->
<section class="main-container col2-right-layout">
  <div class="main container">
    <?php if(isset($_SESSION['error'])):?> 
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
                </div>
            </div>
        </div>
    <?php endif?>
    <?php if(isset($_SESSION['success'])):?> 
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
                </div>
            </div>
        </div>
    <?php endif?>
    <div class="row">
      <div class="col-main col-sm-12 col-xs-12">
        <div class="page-content checkout-page"><div class="page-title">
          <h2>Thanh toán</h2>
        </div>
            <div class="box-border">
                <form action="dat-hang" method="POST">
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="first_name" class="required">Họ tên</label>
                                <input type="text" class="input form-control" name="fullname" required>
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label class="required">Giới tính</label>
                                <br>
                                <label>
                                    <input type="radio" class="input" name="gender" value="Nam" required> Nam
                                </label>
                                <label style="margin-left:20px">
                                    <input type="radio" class="input" name="gender" value="Nữ" required> Nữ
                                </label>
                                <label style="margin-left:20px">
                                    <input type="radio" class="input" name="gender" value="Khác" required> Khác
                                </label>
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="email_address" class="required">Email Address</label>
                                <input type="text" class="input form-control" name="email" id="email_address" required>
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="telephone" class="required">Điện thoại</label>
                                <input class="input form-control" type="text" name="phone" id="telephone" required>
                            </div><!--/ [col] -->
                        </li>
                        <li class="row"> 
                            <div class="col-sm-12">
                                <label for="address" class="required">Địa chỉ</label>
                                <input type="text" class="input form-control" name="address" id="address" required>
                            </div><!--/ [col] -->
                            
                        </li><!-- / .row -->
                        <li class="row">
                            <div class="col-sm-12">
                                <label for="payment" class="required">Hình thức thanh toán</label>
                                <select name="payment_method" id="payment" class="form-control" required>
                                    <option value="COD">Giao hàng nhận tiền</option>
                                    <option value="Chuyển khoản">Chuyển khoản </option>

                                </select>
                            </div><!--/ [col] -->
                            
                        </li>
                        <li class="row">

                            <div class="col-sm-12">
                                <label for="address" class="required">Ghi chú</label>
                                <textarea name="note" class="form-control" rows="5"></textarea>
                            </div><!--/ [col] -->
                        </li>
                        <li>
                            <button class="button" type="submit"  name="btnCheckout"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Đặt hàng</span></button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
      </div>
      
    </div>
  </div>
  </section>
  <!-- Main Container End -->
  <script type="text/javascript" src="public/source/js/jquery.min.js"></script>
<script>
// $(document).ready(function(){
//     $('#payment').change(function(){
//         var payment = $(this).val()
//         if(payment=='Chuyển khoản'){
//             $('#ttck').show()
//         }
//         else{
//             $('#ttck').hide()
//         }
//     })
// })
</script>