<!-- Main Container -->
<div class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                <div class="category-description std">
                    <div class="slider-items-products">
                        <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                <!-- Item -->
                                <div class="item">
                                    <a href="#x">
                                        <img alt="" src="public/source/images/cat-slider-img1.jpg">
                                    </a>
                                    <div class="inner-info">
                                        <div class="cat-img-title">
                                            <span>Our new range of</span>
                                            <h2 class="cat-heading">
                                                <strong>Smartphone</strong>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                            <a class="info" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="item">
                                    <a href="#x">
                                        <img alt="" src="public/source/images/cat-slider-img2.jpg">
                                    </a>
                                </div>

                                <!-- End Item -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-inner">
                    <div class="page-title">
                        <h2><?=$data['type']->name?></h2>
                    </div>

                    <div class="product-grid-area">
                        <ul class="products-grid">
                            <?php foreach($data['products'] as $products):?>
                            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                <div class="product-item">
                                    <div class="item-inner">
                                        <div class="product-thumbnail">
                                            <!-- <div class="icon-sale-label sale-left">Sale</div>
                          <div class="icon-new-label new-right">New</div> -->
                                            <div class="pr-img-area">
                                                <a title="<?=$products->name?>"
                                                    href="<?=$products->id.'-'.$products->url?>">
                                                    <figure>
                                                        <img class="first-img"
                                                            src="public/source/images/products-images/<?=$products->image?>"
                                                            alt="" height="270px">
                                                        <img class="hover-img"
                                                            src="public/source/images/products-images/<?=$products->image?>"
                                                            alt="">
                                                    </figure>
                                                </a>
                                                <button type="button" class="add-to-cart-mt"
                                                    data-id="<?=$products->id?>">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>thêm vào giỏ hàng</span>
                                                </button>
                                            </div>

                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title">
                                                    <a title="<?=$products->name?>"
                                                        href="<?=$products->id.'-'.$products->url?>"><?=$products->name?>
                                                    </a>
                                                </div>
                                                <div class="item-content">

                                                    <div class="item-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <?php if($products->promotion_price != 0):?>
                                                                <p class="special-price">
                                                                    <span
                                                                        class="price"><?= number_format($products->promotion_price)?></span>
                                                                </p>
                                                                <p class="old-price">
                                                                    <span
                                                                        class="price"><?= number_format($products->price)?></span>
                                                                </p>
                                                                <?php else:?>
                                                                <p class="special-price">
                                                                    <span
                                                                        class="price"><?= number_format($products->price)?></span>
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
                        </ul>
                    </div>
                    <div class="pagination-area">
                        <?=$data['pagination']?>
                    </div>
                </div>
            </div>
            <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <div class="block category-sidebar">
                    <div class="sidebar-title">
                        <h3>Categories</h3>
                    </div>
                </div>
                <div class="block shop-by-side">
                    <div class="sidebar-bar-title">
                        <h3>Shop By</h3>
                    </div>
                    <div class="block-content">
                        <p class="block-subtitle">Shopping Options</p>
                        <div class="layered-Category">
                            <h2 class="saider-bar-title">Danh mục</h2>
                            <div class="layered-content">
                                <ul class="check-box-list">
                                    <?php foreach($data['allType'] as $allType):?>
                                    <li>
                                        <input type="checkbox" class="input-type" id="type<?=$allType->id?>" name="jtvc"
                                            data-id="<?=$allType->id?>">
                                        <label for="type<?=$allType->id?>">
                                            <span class="button"></span> <?=$allType->name?>
                                            <span class="count">(<?=$allType->Soluong?>)</span>
                                        </label>
                                    </li>
                                    <?php endforeach?>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            
                <div class="block sidebar-cart">
                    <div class="sidebar-bar-title">
                        <h3>shop</h3>
                    </div>
                    <div class="block-content">
                        <p class="amount">There are
                            <a href="shopping_cart.html">2 items</a> in your cart.</p>
                        <ul>
                            <li class="item">
                                <a href="shopping_cart.html" title="Sample Product" class="product-image">
                                    <img src="public/source/images/products/img07.jpg" alt="Sample Product ">
                                </a>
                                <div class="product-details">
                                    <div class="access">
                                        <a href="#" title="Remove This Item" class="remove-cart">
                                            <i class="icon-close"></i>
                                        </a>
                                    </div>
                                    <p class="product-name">
                                        <a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a>
                                    </p>
                                    <strong>1</strong> x
                                    <span class="price">$19.99</span>
                                </div>
                            </li>
                            <li class="item last">
                                <a href="#" title="Sample Product" class="product-image">
                                    <img src="public/source/images/products/img08.jpg" alt="Sample Product">
                                </a>
                                <div class="product-details">
                                    <div class="access">
                                        <a href="#" title="Remove This Item" class="remove-cart">
                                            <i class="icon-close"></i>
                                        </a>
                                    </div>
                                    <p class="product-name">
                                        <a href="shopping_cart.html">Consectetur utes anet adipisicing elit</a>
                                    </p>
                                    <strong>1</strong> x
                                    <span class="price">$8.00</span>
                                    <!--access clearfix-->
                                </div>
                            </li>
                        </ul>
                        <div class="summary">
                            <p class="subtotal">
                                <span class="label">Cart Subtotal:</span>
                                <span class="price">$27.99</span>
                            </p>
                        </div>
                        <div class="cart-checkout">
                            <button class="button button-checkout" title="Submit" type="submit">
                                <i class="fa fa-check"></i>
                                <span>Checkout</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="single-img-add sidebar-add-slider ">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="public/source/images/add-slide1.jpg" alt="slide1">
                                <div class="carousel-caption">
                                    <h3>
                                        <a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="#" class="info">shopping Now</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="public/source/images/add-slide2.jpg" alt="slide2">
                                <div class="carousel-caption">
                                    <h3>
                                        <a href="single_product.html" title=" Sample Product">Smartwatch Collection</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="#" class="info">All Collection</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="public/source/images/add-slide3.jpg" alt="slide3">
                                <div class="carousel-caption">
                                    <h3>
                                        <a href="single_product.html" title=" Sample Product">Summer Sale</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="block special-product">
                    <div class="sidebar-bar-title">
                        <h3>Special Products</h3>
                    </div>
                    <div class="block-content">
                        <ul>
                            <li class="item">
                                <?php foreach ($data['specialProduct'] as $specialProduct):?>
                                <div class="products-block-left">
                                    <a href="<?=$specialProduct->id.'-'.$specialProduct->url?>"
                                        title="<?=$specialProduct->name?>" class="product-image">
                                        <img src="public/source/images/products-images/<?=$specialProduct->image?>"
                                            alt="Sample Product " height="60px">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="single_product.html"><?=$specialProduct->name?></a>
                                    </p>
                                    <?php if($specialProduct->promotion_price != 0):?>
                                    <p class="special-price">
                                        <span class="price"><?= number_format($specialProduct->promotion_price)?></span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price"><?= number_format($specialProduct->price)?></span>
                                    </p>
                                    <?php else:?>
                                    <p class="special-price">
                                        <span class="price"><?= number_format($specialProduct->price)?></span>
                                    </p>
                                    <?php endif?>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </li>
                        </ul>
                        <!-- <a class="link-all" href="shopping_grid.php">All Products</a> -->
                    </div>
                </div>


            </aside>
        </div>
    </div>
</div>
<!-- Main Container End -->

<script type="text/javascript" src="public/source/js/jquery.min.js"></script>

<script>
$(document).ready(function() {
    var oldContent = $('.products-grid').html()
    $(".input-type").click(function() {
        var check = $(this).prop("checked")
        var idType = $(this).attr('data-id')

        if (check) {
            // console.log(idType)
            $.ajax({
                url: 'shopping_grid.php',
                type: 'POST',
                data: {
                    idType
                },
                success: function(res) {
                    // console.log(res)

                    $('.shop-inner').removeClass('shop-inner')
                    $('.page-title').hide()
                    $('.pagination-area').hide()

                    if ($('.products-grid').hasClass('append')) {
                        $('.products-grid').append(res)

                    } else {
                        $('.products-grid').html(res)
                        $('.products-grid').addClass('append')
                    }

                },
                error: function(error) {
                    console.log(error)
                }
            })
        } else {
            // console.log(idType)
            $('.type-product-' + idType).remove()
            if ($('.append').find('li.item').length == 0) {
                $('.page-title').show()
                $('.pagination-area').show()
                $('.products-grid').html(oldContent)
                $('.shop-inner').addClass('shop-inner')
                $('.append').removeClass('append')
            }
        }
    })
})
</script>