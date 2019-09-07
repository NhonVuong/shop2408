  <!-- Home Slider Start -->
  <div class="slider">
      <div class="tp-banner-container clearfix">
          <div class="tp-banner">
              <ul>
                  <!-- SLIDE 1 -->
                  <?php foreach ($data['slide'] as $slide): ?>
                  <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700">
                      <!-- MAIN IMAGE -->
                      <img src="public/source/images/slider/<?=$slide->image?>" alt="slidebg1" data-bgfit="cover"
                          data-bgposition="center center" data-bgrepeat="no-repeat">
                      <!-- LAYERS -->
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption very_big_white skewfromrightshort fadeout" data-x="center" data-y="100"
                          data-speed="500" data-start="1200" data-easing="Circ.easeInOut"
                          style=" font-size:70px; font-weight:800; color:#fe0100;">Huge
                          <span style=" color:#000;">sale</span>
                      </div>

                      <!-- LAYER NR. 2 -->
                      <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout" data-x="center"
                          data-y="165" data-hoffset="0" data-voffset="-73" data-speed="500" data-start="1200"
                          data-easing="Power4.easeOut" style=" font-size:20px; font-weight:500; color:#337ab7;">
                          Sale off 75% all products </div>

                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="210"
                          data-hoffset="0" data-voffset="98"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                          data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-splitin="none"
                          data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                          data-linktoslide="next"
                          style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;">
                          <a href='#' class='largebtn slide1'>Learn More</a>
                      </div>
                  </li>
                  <?php endforeach?>

              </ul>
          </div>
      </div>
  </div>

  <div id="floating_banner_left" style="text-align:right; position:absolute; overflow:hidden; top: 25%; left: 30px; width: 150px; border: 0px solid #000;">

<div id="floating_banner_left_content">

    <a href="http://sharecode.vn/" target="_blank"><img src="public/source/images/products-images/lien7.gif" border="0" width="150px" alt="" style=" margin-bottom:60%"/></a>
    <a href="http://sharecode.vn/" target="_blank"><img src="public/source/images/products-images/Capture10.PNG" border="0" width="150px" alt="" /></a>
</div>

</div>

<div id="floating_banner_right" style="text-align:left; position:absolute; overflow:hidden; top: 25%; right: 30px; width: 150px; border: 0px solid #000;">

<div id="floating_banner_right_content"  >
<a href="http://sharecode.vn/" target="_blank"><img src="public/source/images/products-images/Capture90.PNG" border="0" height="690px" width="150px" alt="" style=" margin-bottom:60%"/></a>
    <a href="http://sharecode.vn/" target="_blank"><img src="public/source/images/products-images/lien8.gif" border="0" width="150px" alt="" /></a>

</div>

</div>

<script>

    runQuery();

</script>

<script>

    pepsi_floating_init();

</script>

  <!-- main container -->
  <div class="main-container col1-layout">
      <div class="container">
          <div class="row">

              <!-- Home Tabs  -->
              <div class="col-sm-12 col-md-12 col-xs-12">
                  <div class="home-tab">
                      <ul class="nav home-nav-tabs home-product-tabs">
                          <li class="active">
                              <a href="#featured" data-toggle="tab" aria-expanded="false">sản phẩm đặc biệt</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                              <a href="#top-sellers" data-toggle="tab" aria-expanded="false">sản phẩm bán chạy</a>
                          </li>
                      </ul>
                      <div id="productTabContent" class="tab-content">
                          <div class="tab-pane active in" id="featured">
                              <div class="featured-pro">
                                  <div class="slider-items-products">
                                      <div id="featured-slider" class="product-flexslider hidden-buttons">
                                          <div class="slider-items slider-width-col4">
                                              <?php foreach ($data['specialProduct'] as $specialProduct):?>
                                              <div class="product-item">
                                                  <div class="item-inner">
                                                      <div class="product-thumbnail">
                                                          <!-- <?php if($specialProduct->promotion_price != 0):?>
                                <div class="icon-sale-label sale-left">Sale</div>
                              <?php endif?>
                              <?php if($specialProduct->new == 1): ?>
                                <div class="icon-new-label new-right">New</div>
                              <?php endif?> -->
                                                          <div class="pr-img-area">
                                                              <a title="<?=$specialProduct->name?>"
                                                                  href="<?=$specialProduct->id.'-'.$specialProduct->url?>">
                                                                  <figure>
                                                                      <img class="first-img"
                                                                          src="public/source/images/products-images/<?=$specialProduct->image?>"
                                                                          alt="html template">
                                                                      <img class="hover-img"
                                                                          src="public/source/images/products-images/<?=$specialProduct->image?>"
                                                                          alt="html template">
                                                                  </figure>
                                                              </a>
                                                              <button type="button" class="add-to-cart-mt"
                                                                  data-id="<?=$specialProduct->id?>">
                                                                  <i class="fa fa-shopping-cart"></i>
                                                                  <span> Thêm Vào Giỏ Hàng</span>
                                                              </button>
                                                          </div>
                                                      </div>
                                                      <div class="item-info">
                                                          <div class="info-inner">
                                                              <div class="item-title">
                                                                  <a title="<?=$specialProduct->name?>"
                                                                      href="<?=$specialProduct->id.'-'.$specialProduct->url?>"><?= $specialProduct->name?>
                                                                  </a>
                                                              </div>
                                                              <div class="item-content">
                                                                  <div class="item-price">
                                                                      <div class="price-box">
                                                                          <?php if($specialProduct->promotion_price != 0):?>
                                                                          <p class="special-price">
                                                                              <span
                                                                                  class="price"><?= number_format($specialProduct->promotion_price)?></span>
                                                                          </p>
                                                                          <p class="old-price">
                                                                              <span
                                                                                  class="price"><?= number_format($specialProduct->price)?></span>
                                                                          </p>
                                                                          <?php else:?>
                                                                          <p class="special-price">
                                                                              <span
                                                                                  class="price"><?= number_format($specialProduct->price)?></span>
                                                                          </p>
                                                                          <?php endif?>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <?php endforeach?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="top-sellers">
                              <div class="top-sellers-pro">
                                  <div class="slider-items-products">
                                      <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                                          <div class="slider-items slider-width-col4 ">
                                              <?php foreach ($data['bestSeller'] as $bestSeller):?>
                                              <div class="product-item">
                                                  <div class="item-inner">
                                                      <div class="product-thumbnail">
                                                          <?php if($bestSeller->promotion_price != 0):?>
                                                          <div class="icon-sale-label sale-left">Sale</div>
                                                          <?php endif?>
                                                          <?php if($bestSeller->new == 1):?>
                                                          <div class="icon-new-label new-right">New</div>
                                                          <?php endif?>
                                                          <div class="pr-img-area">
                                                              <a title="<?=$bestSeller->name?>"
                                                                  href="<?=$bestSeller->id.'-'.$bestSeller->url?>">
                                                                  <figure>
                                                                      <img class="first-img"
                                                                          src="public/source/images/products-images/<?=$bestSeller->image?>"
                                                                          alt="html template">
                                                                      <img class="hover-img"
                                                                          src="public/source/images/products-images/<?=$bestSeller->image?>"
                                                                          alt="html template">
                                                                  </figure>
                                                              </a>
                                                              <button type="button" class="add-to-cart-mt"
                                                                  data-id="<?=$bestSeller->id?>">
                                                                  <i class="fa fa-shopping-cart"></i>
                                                                  <span> Thêm Vào Giỏ Hàng</span>
                                                              </button>
                                                          </div>

                                                      </div>
                                                      <div class="item-info">
                                                          <div class="info-inner">
                                                              <div class="item-title">
                                                                  <a title="<?=$bestSeller->name?>"
                                                                      href="<?=$bestSeller->id.'-'.$bestSeller->url?>"><?=$bestSeller->name?>
                                                                  </a>
                                                              </div>
                                                              <div class="item-content">

                                                                  <div class="item-price">
                                                                      <div class="price-box">
                                                                          <span class="regular-price">
                                                                              <?php if($bestSeller->promotion_price != 0):?>
                                                                              <p class="special-price">
                                                                                  <span
                                                                                      class="price"><?= number_format($bestSeller->promotion_price)?></span>
                                                                              </p>
                                                                              <p class="old-price">
                                                                                  <span
                                                                                      class="price"><?= number_format($bestSeller->price)?></span>
                                                                              </p>
                                                                              <?php else:?>
                                                                              <p class="special-price">
                                                                                  <span
                                                                                      class="price"><?= number_format($bestSeller->price)?></span>
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

                                              <?php endforeach?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- end main container -->

  <!--special-products-->

  <div class="container">
      <div class="special-products">
          <div class="page-header">
              <h2>sản phẩm mới</h2>
          </div>
          <div class="special-products-pro">
              <div class="slider-items-products">
                  <div id="special-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                          <?php foreach ($data['newProduct'] as $newProduct): ?>
                          <div class="product-item">

                              <div class="item-inner">
                                  <div class="product-thumbnail">
                                      <!-- <div class="icon-sale-label sale-left">Sale</div> -->
                                      <div class="icon-new-label new-right">New</div>
                                      <div class="pr-img-area">
                                          <a title="<?=$newProduct->name?>"
                                              href="<?=$newProduct->id.'-'.$newProduct->url?>">
                                              <figure>
                                                  <img class="first-img"
                                                      src="public/source/images/products-images/<?=$newProduct->image?>"
                                                      alt="html template">
                                                  <img class="hover-img"
                                                      src="public/source/images/products-images/<?=$newProduct->image?>"
                                                      alt="html template">
                                              </figure>
                                          </a>
                                          <button type="button" class="add-to-cart-mt" data-id="<?=$newProduct->id?>">
                                              <i class="fa fa-shopping-cart"></i>
                                              <span> Thêm Vào Giỏ Hàng</span>
                                          </button>
                                      </div>

                                  </div>
                                  <div class="item-info">
                                      <div class="info-inner">
                                          <div class="item-title">
                                              <a title="Ipsums Dolors Untra"
                                                  href="<?=$newProduct->id.'-'.$newProduct->url?>"><?=$newProduct->name?>
                                              </a>
                                          </div>
                                          <div class="item-content">
                                              <div class="item-price">
                                                  <div class="price-box">
                                                      <?php if($newProduct->promotion_price != 0): ?>
                                                      <p class="special-price">
                                                          <span class="price">
                                                              <?=number_format($newProduct->promotion_price)?> </span>
                                                      </p>
                                                      <p class="old-price">
                                                          <span class="price"> <?=number_format($newProduct->price)?>
                                                          </span>
                                                      </p>
                                                      <?php else:?>
                                                      <p class="special-price">
                                                          <span class="price"> <?=number_format($newProduct->price)?>
                                                          </span>
                                                      </p>
                                                      <?php endif?>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                          <?php endforeach?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="special-products">
          <div class="page-header">
              <h2>sản phẩm giảm giá</h2>
          </div>
          <div class="special-products-pro">
              <div class="slider-items-products">
                  <div id="special-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                          <?php foreach ($data['specialSale'] as $specialSale): ?>
                          <div class="product-item">

                              <div class="item-inner">
                                  <div class="product-thumbnail">
                                      <div class="icon-sale-label sale-left">Sale</div>
                                      <!-- <div class="icon-new-label new-right">New</div> -->
                                      <div class="pr-img-area">
                                          <a title="<?=$specialSale->name?>"
                                              href="<?=$specialSale->id.'-'.$specialSale->url?>">
                                              <figure>
                                                  <img class="first-img"
                                                      src="public/source/images/products-images/<?=$specialSale->image?>"
                                                      alt="html template">
                                                  <img class="hover-img"
                                                      src="public/source/images/products-images/<?=$specialSale->image?>"
                                                      alt="html template">
                                              </figure>
                                          </a>
                                          <button type="button" class="add-to-cart-mt" data-id="<?=$specialSale->id?>">
                                              <i class="fa fa-shopping-cart"></i>
                                              <span> Thêm Vào Giỏ Hàng</span>
                                          </button>
                                      </div>

                                  </div>
                                  <div class="item-info">
                                      <div class="info-inner">
                                          <div class="item-title">
                                              <a title="Ipsums Dolors Untra"
                                                  href="<?=$specialSale->id.'-'.$specialSale->url?>"><?=$specialSale->name?>
                                              </a>
                                          </div>
                                          <div class="item-content">
                                              <div class="item-price">
                                                  <div class="price-box">
                                                      <?php if($specialSale->promotion_price != 0): ?>
                                                      <p class="special-price">
                                                          <span class="price">
                                                              <?=number_format($specialSale->promotion_price)?> </span>
                                                      </p>
                                                      <p class="old-price">
                                                          <span class="price"> <?=number_format($specialSale->price)?>
                                                          </span>
                                                      </p>
                                                      <?php else:?>
                                                      <p class="special-price">
                                                          <span class="price"> <?=number_format($specialSale->price)?>
                                                          </span>
                                                      </p>
                                                      <?php endif?>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                          <?php endforeach?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container">
      <div class="special-products">
          <div class="page-header">
              <h2>sản phẩm cũ</h2>
          </div>
          <div class="special-products-pro">
              <div class="slider-items-products">
                  <div id="special-products-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                          <?php foreach ($data['oldProduct'] as $oldProduct): ?>
                          <div class="product-item">

                              <div class="item-inner">
                                  <div class="product-thumbnail">
                                      <!-- <div class="icon-sale-label sale-left">Sale</div> -->
                                      <div class="icon-new-label new-right">Old</div>
                                      <div class="pr-img-area">
                                          <a title="<?=$oldProduct->name?>"
                                              href="<?=$oldProduct->id.'-'.$oldProduct->url?>">
                                              <figure>
                                                  <img class="first-img"
                                                      src="public/source/images/products-images/<?=$oldProduct->image?>"
                                                      alt="html template">
                                                  <img class="hover-img"
                                                      src="public/source/images/products-images/<?=$oldProduct->image?>"
                                                      alt="html template">
                                              </figure>
                                          </a>
                                          <button type="button" class="add-to-cart-mt" data-id="<?=$oldProduct->id?>">
                                              <i class="fa fa-shopping-cart"></i>
                                              <span> Thêm Vào Giỏ Hàng</span>
                                          </button>
                                      </div>

                                  </div>
                                  <div class="item-info">
                                      <div class="info-inner">
                                          <div class="item-title">
                                              <a title="Ipsums Dolors Untra"
                                                  href="<?=$oldProduct->id.'-'.$oldProduct->url?>"><?=$oldProduct->name?>
                                              </a>
                                          </div>
                                          <div class="item-content">
                                              <div class="item-price">
                                                  <div class="price-box">
                                                      <?php if($oldProduct->promotion_price != 0): ?>
                                                      <p class="special-price">
                                                          <span class="price">
                                                              <?=number_format($oldProduct->promotion_price)?> </span>
                                                      </p>
                                                      <p class="old-price">
                                                          <span class="price"> <?=number_format($oldProduct->price)?>
                                                          </span>
                                                      </p>
                                                      <?php else:?>
                                                      <p class="special-price">
                                                          <span class="price"> <?=number_format($oldProduct->price)?>
                                                          </span>
                                                      </p>
                                                      <?php endif?>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                          <?php endforeach?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- category area start -->
  <div class="jtv-category-area">
      <div class="container-fluid">
          <div class="row">
              <!-- <div class="col-md-4 col-sm-6">
                  <div class="jtv-single-cat">
                      <h2 class="cat-title">SẢN PHẨM CŨ</h2>
                      <?php foreach ($data['oldProduct'] as $oldProduct): ?>
                      <div class="jtv-product">
                          <div class="product-img">
                              <a href="<?=$oldProduct->id.'-'.$oldProduct->url?>">
                                  <img src="public/source/images/products-images/<?=$oldProduct->image?>"
                                      alt="html template">
                                  <img class="secondary-img"
                                      src="public/source/images/products-images/<?=$oldProduct->image?>"
                                      alt="html template"> </a>
                          </div>
                          <div class="jtv-product-content">
                              <h3>
                                  <a href="<?=$oldProduct->id.'-'.$oldProduct->url?>"><?=$oldProduct->name?></a>
                              </h3>
                              <div class="price-box">
                                  <span class="regular-price">
                                      <?php if($oldProduct->promotion_price != 0):?>
                                      <p class="special-price">
                                          <span class="price"><?= number_format($oldProduct->promotion_price)?></span>
                                      </p>
                                      <p class="old-price">
                                          <span class="price"><?= number_format($oldProduct->price)?></span>
                                      </p>
                                      <?php else:?>
                                      <p class="special-price">
                                          <span class="price"><?= number_format($oldProduct->price)?></span>
                                      </p>
                                      <?php endif?>
                                  </span>
                              </div>
                              <div class="jtv-product-action">
                                  <div class="jtv-extra-link">
                                      <div class="button-cart">
                                          <button class="add-to-cart" data-id="<?=$oldProduct->id?>">
                                              <i class="fa fa-shopping-cart"></i>
                                          </button>
                                      </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php endforeach?>
                  </div>
              </div> -->
              <!-- <div class="col-md-4 col-sm-6">
                  <div class="jtv-single-cat">
                      <h2 class="cat-title">SẢN PHẨM GIẢM GIÁ</h2>
                      <?php foreach ($data['specialSale'] as $specialSale): ?>
                      <div class="jtv-product">
                          <?php if($specialSale->promotion_price != 0):?>
                          <div class="product-img">
                              <a href="<?=$specialSale->id.'-'.$specialSale->url?>">
                                  <img src="public/source/images/products-images/<?=$specialSale->image?>"
                                      alt="html template">
                                  <img class="secondary-img"
                                      src="public/source/images/products-images/<?=$specialSale->image?>"
                                      alt="html template"> </a>

                          </div>
                          <div class="jtv-product-content">
                              <h3>
                                  <a href="<?=$specialSale->id.'-'.$specialSale->url?>"><?=$specialSale->name?></a>
                              </h3>
                              <div class="price-box">
                                  <?php if($specialSale->promotion_price != 0): ?>
                                  <p class="special-price">
                                      <span class="price"> <?=number_format($specialSale->promotion_price)?> </span>
                                  </p>
                                  <p class="old-price">
                                      <span class="price"> <?=number_format($specialSale->price)?> </span>
                                  </p>

                                  <?php endif?>
                              </div>
                              <div class="jtv-product-action">
                                  <div class="jtv-extra-link">
                                      <div class="button-cart">
                                          <button class="add-to-cart" data-id="<?=$specialSale->id?>">
                                              <i class="fa fa-shopping-cart"></i>
                                          </button>
                                      </div>

                                  </div>
                              </div>
                          </div>
                          <?php endif?>
                      </div>
                      <?php endforeach?>
                  </div>
              </div> -->

                <div class="col-md-7 col-sm-12 col-12">
                        <img src="./public/source/images/products-images/1705436.jpg" alt="" style="height: 502px; width:100%">
                </div>

              <!-- service area start -->
              <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="jtv-service-area">

                      <!-- jtv-single-service start -->

                      <div class="jtv-single-service">
                          <div class="service-icon">
                              <img alt="html template" src="public/source/images/customer-service-icon.png"> </div>
                          <div class="service-text">
                              <h2>24/7 customer service</h2>
                              <p>
                                  <span>Call us 24/7 at 000 - 123 - 456</span>
                              </p>
                          </div>
                      </div>
                      <div class="jtv-single-service">
                          <div class="service-icon">
                              <img alt="html template" src="public/source/images/shipping-icon.png"> </div>
                          <div class="service-text">
                              <h2>free shipping worldwide</h2>
                              <p>
                                  <span>On order over $199 - 7 days a week</span>
                              </p>
                          </div>
                      </div>
                      <div class="jtv-single-service">
                          <div class="service-icon">
                              <img alt="html template" src="public/source/images/guaratee-icon.png"> </div>
                          <div class="service-text">
                              <h2>money back guaratee!</h2>
                              <p>
                                  <span>Send within 30 days</span>
                              </p>
                          </div>
                      </div>

                      <!-- jtv-single-service end -->

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- <div>
      <img src="./public/source/images/products-images/apple-watch-3-band-dock-charger-accessories-australia.jpg"
          style="width:100%" alt="">
  </div> -->
  <!-- category-area end -->

  <script src="public/source/js/floater_xlib.js"></script>
  <SCRIPT type=text/javascript>

    var slideTime = 700;

    var floatAtBottom = false;

    function pepsi_floating_init()

    {

        xMoveTo('floating_banner_right', 887 - (1024-screen.width), 0);

        winOnResize(); // set initial position

        xAddEventListener(window, 'resize', winOnResize, false);

        xAddEventListener(window, 'scroll', winOnScroll, false);

    }

    function winOnResize() {

        checkScreenWidth();

        winOnScroll(); // initial slide

    }

    function winOnScroll() {

    var y = xScrollTop();

    if (floatAtBottom) {

        y += xClientHeight() - xHeight('floating_banner_left');

    }

    xSlideTo('floating_banner_left', (screen.width - (800-775) - 770)/2-115 , y, slideTime);  // Chỉnh khoảng cách bên trái

    xSlideTo('floating_banner_right', (screen.width - (800-795) + 770)/2, y, slideTime); // // Chỉnh khoảng cách bên Phải

    }

    function checkScreenWidth()

    {

        if( document.body.clientWidth < 926 )

        {

            document.getElementById('floating_banner_left').style.display = 'none';

            document.getElementById('floating_banner_right').style.display = 'none';

        }

        else

        {

            document.getElementById('floating_banner_left').style.display = '';

            document.getElementById('floating_banner_right').style.display = '';

        }

    }

</SCRIPT>