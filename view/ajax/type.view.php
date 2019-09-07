<?php foreach($data['product'] as $products):?>
    <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 type-product-<?=$products->id_type?>">
        <div class="product-item">
            <div class="item-inner">
            <div class="product-thumbnail">
                <!-- <div class="icon-sale-label sale-left">Sale</div>
                <div class="icon-new-label new-right">New</div> -->
                <div class="pr-img-area">
                <a title="<?=$products->name?>" href="<?=$products->id.'-'.$products->url?>">
                    <figure>
                    <img class="first-img" src="public/source/images/products-images/<?=$products->image?>" alt="" height="270px">
                    <img class="hover-img" src="public/source/images/products-images/<?=$products->image?>" alt="">
                    </figure>
                </a>
                <!-- <button type="button" class="add-to-cart-mt" data-id="<?=$products->id?>">
                    <i class="fa fa-shopping-cart"></i>
                    <span> Add to Cart</span>
                </button> -->
                </div>

            </div>
            <div class="item-info">
                <div class="info-inner">
                <div class="item-title">
                    <a title="<?=$products->name?>" href="<?=$products->id.'-'.$products->url?>"><?=$products->name?> </a>
                </div>
                <div class="item-content">

                    <div class="item-price">
                        <div class="price-box">
                            <span class="regular-price">
                            <?php if($products->promotion_price != 0):?>
                                <p class="special-price">
                                    <span class="price"><?= number_format($products->promotion_price)?></span>
                                </p>
                                <p class="old-price">
                                    <span class="price"><?= number_format($products->price)?></span>
                                </p>
                                <?php else:?>
                                <p class="special-price">
                                    <span class="price"><?= number_format($products->price)?></span>
                                </p>
                            <?php endif?>
                            </span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </li>
<?php endforeach?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body" style="font-size:16px; text-align: center">
            <p><b class="message">...</b></p>
            <p><a href="gio-hang">Xem giỏ hàng</a></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    
    <div id="myModal1" class="modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="text-align:center;">
                <h3 class="modal-title">Bạn Chưa Đăng Nhập</h3>
                <p style="font-size:17px;">Vui lòng đăng nhập tại <b><a href="account_page.php">đây</a></b></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>

    <style>
    .swal-title{
        font-size:15px!important
    }
    </style>
  <!-- jquery js -->
  <script type="text/javascript" src="public/source/js/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
  // $(document).ready(function(){
  //   $('.add-to-cart-mt').click(function(){
  //   <?php if(isset($_SESSION['name'])):?>

  //     var idSP = $(this).attr('data-id')
  //     var qty = $("#qty").val() 
  //     //console.log(qty)
  //     $.ajax({
  //       url:'cart.php',
  //       data:{
  //         idSP,
  //         // qty
  //       },
  //       type:'POST',
  //       dataType: 'json',
  //       success:function(res){
  //         $(".message").html(res.message)
  //         $("#exampleModal").modal('show')
  //         $(".cart-total").html(res.data)

  //         // swal(res.message, "", "success");
  //       },
  //       error:function(e){
  //         console.log(e)
  //       }
  //     })
  //   <?php else:?>
  //     $('#myModal1').modal('show')
  //     <?php endif?>
  //   })
  // })
  </script>