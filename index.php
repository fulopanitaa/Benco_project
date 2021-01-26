<!DOCTYPE html>
<html lang="ro">
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Slick --> 
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<?php include('header.html'); ?>

</head>
<body>

<!-- navbar -->
<?php include('navbar.php'); ?>
<!-- navbar -->


<!-- Slideshow-->
    <div class="slideshow-container"> 

        <div class="mySlides fade">
          <img src="images/cover1.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="images/cover2.jpg" style="width:100%">
        </div>
        
        <a class="prev font-s-normal" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next font-s-normal" onclick="plusSlides(1)">&#10095;</a>

        <div class="centered">
            <img src="images/slidericon1.jpg">
            <div class="centeredcontent">
                <p class="center-title font-s-normal">DEER DECOR</p>
                <p class="center-text">Typi non habent claritatem insitam.Typi non habent claritatem insitamTypi non habent claritatem insitamTypi non habent claritatem insitam </p>
            </div>
            <a href="#" class="shop-now">SHOP NOW</a>
        </div>
        
    </div>
        <br>
<!-- Categories-->
    <div class="categories">
        <div class="category flex">
            <div class="category-img">
            <img src="images/banner1.png" alt="Snow" style="width:100%"/>
            </div>
            <div class="category-container">
                <div class="category-description" style="max-width: 540px;">
                    <h3 class="category-name font-s-normal">Chairs & Sofas. </h3>
                    <p class="category-desc"> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula. </p>
                    <ul clas="desc-list">
                        <li>Claritas est etiam processus dynamicus.</li>
                        <li>Claritas est etiam processus dynamicus.</li>
                        <li>Claritas est etiam processus dynamicus.</li>
                    </ul>
                    <p>
                    <a href="#" class="shop-now" style="font-size:12px">SHOP NOW</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="categories">
        <div class="category flex">
            <div class="category-container">
                <div class="category-description" style="max-width: 540px; float:right">
                    <h3 class="category-name font-s-normal">Chairs & Sofas. </h3>
                    <p class="category-desc"> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula. </p>
                    <ul clas="desc-list">
                        <li>Claritas est etiam processus dynamicus.</li>
                        <li>Claritas est etiam processus dynamicus.</li>
                        <li>Claritas est etiam processus dynamicus.</li>
                    </ul>
                    <p>
                    <a href="#" class="shop-now" style="font-size:12px">SHOP NOW</a>
                    </p>
                </div>

            </div>
            <div class="category-img">
            <img src="images/banner2.png" alt="Snow" style="width:100%"/>
            </div>
        </div>
    </div>
<!-- Feautred products-->
    <div class="innerpage-container">
        <div class="ft-products-inner">
            <div class="ft-products-title">
                <h3 class="f20" >Featured Products</h3>
                <p>The most prominent product in the store, which was bought with the highest number</p>
            </div>
            <div class="slick-container">
                    <div class="slick-wrapper">
                        <div id="slick1">
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product1.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product2.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product3.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product4.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product5.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product6.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product7.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product8.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product9.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product10.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product11.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-item">

                                    <div class="image-container">
                                        <a href="product.php">
                                            <img src="images/product12.jpg" class="img-fluid">
                                        </a>
                                        <div class="product-overlay">
                                            <a href="#" class="overlayicon fa fa-compress"></a>
                                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                                            <a href="#" class="overlayicon fa fa-search"></a>
                                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                                        </div>
                                    </div>

                                    <div class="name-price">
                                        <div class="product-name">
                                            <a href="product.php">Auctor gravida enim</a>
                                        </div>
                                        <div class="product-price" style="color:black">
                                            <span class="price-amount"><span class="price-currency">$</span>60.00</span></ins>
                                        </div>
                                    </div>

                                </div>
                                
            
                        </div>
                    </div>
            </div>

            
        </div>

    </div>
<!-- Hero-image-->
    <div class="hero-image">
            <div class="hero-text">
                <img width="175" height="125" src="images/hotdeal.jpg" class="vc_single_image-img attachment-full" alt="">
                <h3 class="font-s-normal">Hot Deals This Week</h3>
                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                <a href="#" class="hero shop-now">SHOP NOW</a>
            </div>
    </div>
    
<!-- Footer-->
<footer>
<?php include('footer.html'); ?>
</footer>



</body>


</html>
