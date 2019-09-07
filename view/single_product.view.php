    <!-- Main Container -->
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-main">
                    <div class="product-view-area" style="width:100%">
                        <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                            <?php 
                $product = $data['product'];
                if($product->promotion_price != 0):?>
                            <div class="icon-sale-label sale-left">Sale</div>
                            <?php endif?>
                            <?php
              if($product->new == 1):?>
                            <div class="icon-new-label new-right">New</div>
                            <?php endif?>
                            <div class="large-image">
                                <a href="public/source/images/products-images/<?=$product->image?>" class="cloud-zoom"
                                    id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                                    <img class="zoom-img"
                                        src="public/source/images/products-images/<?=$product->image?>" alt="products"
                                        width="100%"> </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                            <div class="product-name">
                                <h1><?=$product->name?></h1>
                            </div>
                            <div class="price-box">
                                <?php if($product->promotion_price != 0):?>
                                <p class="special-price">
                                    <span class="price"><?= number_format($product->promotion_price)?></span>
                                </p>
                                <p class="old-price">
                                    <span class="price"><?= number_format($product->price)?></span>
                                </p>
                                <?php else:?>
                                <p class="special-price">
                                    <span class="price"><?= number_format($product->price)?></span>
                                </p>
                                <?php endif?>
                            </div>

                            <div class="short-description">
                                <h2>GIỚI THIỆU SẢN PHẨM</h2>
                                <div><?=$product->detail?></div>
                            </div>
                            <div>
                                <?php if($product->status==1):?>
                                <h4>KHUYẾN MÃI KÈM THEO</h4>
                                <div><?=$product->promotion?></div>
                                <?php endif?>
                            </div>

                            <div class="product-variation">
                                <form action="#" method="post">
                                    <div class="cart-plus-minus">
                                        <label for="qty">Quantity:</label>
                                        <div class="numbers-row">
                                            <div class="dec qtybutton"
                                                onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty>1) result.value--;return false;">
                                                <i class="fa fa-minus">&nbsp;</i>
                                            </div>
                                            <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty"
                                                name="qty">
                                            <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty<10) result.value++;return false;"
                                                class="inc qtybutton">
                                                <i class="fa fa-plus">&nbsp;</i>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="button pro-add-to-cart" title="Add to Cart" type="button"
                                        data-id="<?=$product->id?>">
                                        <span>
                                            <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</span>
                                    </button>
                                </form>
                            </div>
                            <div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
           <?php if(isset($_SESSION['name'])):?>
            <div id="comment_fb">
                <div class="fb-comments" data-href="http://localhost:1603/shop2408/<?=$product->id?>" data-width="100%"
                    data-numposts="5"></div>
            </div>
            <?php else:?>
            
            <?php endif?>
        </div>
    </div>



    <!-- Main Container End -->
    <!-- Related Product Slider -->
    <section class="upsell-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="page-header">
                        <h2>sản phẩm cùng loại</h2>
                    </div>
                    <div class="slider-items-products">
                        <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                <?php foreach($data['relatedProducts'] as $relatedProducts):?>
                                <div class="product-item">
                                    <div class="item-inner fadeInUp">
                                        <div class="product-thumbnail">
                                            <?php if($relatedProducts->promotion_price != 0):?>
                                            <div class="icon-sale-label sale-left">Sale</div>
                                            <?php endif?>
                                            <?php if($relatedProducts->new == 1):?>
                                            <div class="icon-new-label new-right">New</div>
                                            <?php endif?>
                                            <div class="pr-img-area">
                                                <a title="<?=$relatedProducts->name?>"
                                                    href="<?=$relatedProducts->id.'-'.$relatedProducts->url?>">
                                                    <figure>
                                                        <img class="first-img"
                                                            src="public/source/images/products-images/<?=$relatedProducts->image?>"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="public/source/images/products-images/<?=$relatedProducts->image?>"
                                                            alt="">
                                                    </figure>
                                                </a>
                                                <button type="button" class="add-to-cart-mt"
                                                    data-id="<?=$relatedProducts->id?>">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>thêm vào giỏ hàng</span>
                                                </button>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title="<?=$relatedProducts->name?>"
                                                        href="<?=$relatedProducts->id.'-'.$relatedProducts->url?>.html"><?=$relatedProducts->name?>
                                                    </a>
                                                </div>
                                                <div class="item-content">

                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <?php if($relatedProducts->promotion_price != 0):?>
                                                                <p class="special-price">
                                                                    <span
                                                                        class="price"><?= number_format($relatedProducts->promotion_price)?></span>
                                                                </p>
                                                                <p class="old-price">
                                                                    <span
                                                                        class="price"><?= number_format($relatedProducts->price)?></span>
                                                                </p>
                                                                <?php else:?>
                                                                <p class="special-price">
                                                                    <span
                                                                        class="price"><?= number_format($relatedProducts->price)?></span>
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
    </section>
    <!-- Related Product Slider End -->

    <script type="text/javascript" src="public/source/js/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

    </script>