<!-- navbar -->
<?php include('navbar.php'); ?>
<!-- navbar -->

<div class="shop-container">
    <div class="row">
        <div class="side">
            <ul class='breadcrumb'>
                <li><a href='index.php'>Home</a></li>
                <li><a id="active" href='shop.php'>Shop</a></li>		
				<li><a></a></li>
			</ul>
            <div class="product-categories">
                <h3 class="title"> Product Categories</h3>
                <ul class="side-list">
                    <li class="cat-item"><a href="">Accessories</a> <span class="count">(5)</span></li>
                    <li class="cat-item"><a href="">Bedroom</a> <span class="count">(4)</span></li>
                    <li class="cat-item"><a href="">Decor &amp; Furniture</a> <span class="count">(12)</span></li>
                    <li class="cat-item"><a href="">Electronics &amp; Computer</a> <span class="count">(13)</span></li>
                    <li class="cat-item"><a href="">Fashion &amp; clothings</a> <span class="count">(13)</span></li>
                    <li class="cat-item"><a href="">Furniture</a> <span class="count">(4)</span></li>
                    <li class="cat-item"><a href="">Home, Garden &amp; Tools</a> <span class="count">(14)</span></li>
                    <li class="cat-item"><a href="">Laptops &amp; Desktops</a> <span class="count">(7)</span></li>
                    <li class="cat-item"><a href="">Livingroom</a> <span class="count">(4)</span></li>
                    <li class="cat-item"><a href="">Men</a> <span class="count">(4)</span></li>
                    <li class="cat-item"><a href="">Mobiles &amp; Tablets</a> <span class="count">(6)</span></li>
                    <li class="cat-item"><a href="">Sport &amp; Outdoors</a> <span class="count">(7)</span></li>
                    <li class="cat-item"><a href="">Toy, Kids &amp; Baby</a> <span class="count">(7)</span></li>
                    <li class="cat-item"><a href="">Uncategorized</a> <span class="count">(0)</span></li>
                    <li class="cat-item"><a href="">Women</a> <span class="count">(4)</span></li>
                </ul>
            </div>
            <div class="color">
                <h3 class="title"> Color </h3>
                <ul class="side-list">
                    <li class="cat-item"><a rel="nofollow" href="">Black</a> <span class="count">(1)</span></li>
                    <li class="cat-item"><a rel="nofollow" href="">Blue</a> <span class="count">(1)</span></li>
                    <li class="cat-item"><a rel="nofollow" href="">Gold</a> <span class="count">(2)</span></li></ul>
            </div>
            <div class="filter">
                <h3 class="title"> Filter</h3>
                <form method="get" action="">
                    <div class="price_slider_wrapper">
                        <input class="slider" type="range" min="40" max="499" value="50">
                        <div class="slider-text">
                            <button type="submit" class="button">Filter</button>
                            <div class="price_label font-s-normal">
                                Price: <span class="from">$40</span> — <span class="to">$499</span>
                            </div>
                        </div>
                    </div>
		        </form>

            </div>
            <div class="product-tags">
                <h3 class="title"> Product tags</h3>
                <div class="tagcloud">
                    <a href="">accesories</a>
                    <a href="">blouse</a>
                    <a href="">clothes</a>
                    <a href="">digital</a>
                    <a href="">fashion</a>
                    <a href="">handbag</a>
                    <a href="">laptop</a>
                </div>

            </div>

        </div>
        <div class="main">
            <div class="shop-banner"><img width="100%" src="images/shop-banner.jpg"></div>
            <div class="sort-bar flex">
                <div class="view-mode">
                    <a href="#" class="grid " id="activegrid"></a>
                    <a href="#" class="list"></a>
                </div>
                <div class="sorting">
                    <label></label>Sort By :</label>
                    <div class="custom-select" style="width:200px;">
                        <select name="orderby">
                                <option value="0" selected="true" >Default sorting</option>
                                <option value="1">Sort by popularity</option>
                                <option value="2">Sort by average rating</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                        </select>
                    </div>
                </div>
                <div class="sort-result">
                    <p>Showing 1–20 of 52 results</p>
                </div>
            </div>
            <!-- Products-->
            <div class="products flex">

            
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
                    <img src="images/product7.jpg" class="img-fluid" alt="12">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#" class="overlayicon fa fa-compress"></a>
                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                            <a href="#" class="overlayicon fa fa-search"></a>
                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <img src="images/product8.jpg" class="img-fluid" alt="12">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#" class="overlayicon fa fa-compress"></a>
                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                            <a href="#" class="overlayicon fa fa-search"></a>
                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <img src="images/product9.jpg" class="img-fluid" alt="12">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#" class="overlayicon fa fa-compress"></a>
                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                            <a href="#" class="overlayicon fa fa-search"></a>
                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <img src="images/product10.jpg" class="img-fluid" alt="12">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#" class="overlayicon fa fa-compress"></a>
                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                            <a href="#" class="overlayicon fa fa-search"></a>
                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <img src="images/product11.jpg" class="img-fluid" alt="12">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#" class="overlayicon fa fa-compress"></a>
                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                            <a href="#" class="overlayicon fa fa-search"></a>
                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                        </div>
                    </div>
                </div>
                
                <div class="product-item">
                    <img src="images/product12.jpg" class="img-fluid" alt="12">
                    <div class="overlay">
                        <div class="overlay-content">
                            <a href="#" class="overlayicon fa fa-compress"></a>
                            <a href="#" class="overlayicon fa fa-heart-o"></a>
                            <a href="#" class="overlayicon fa fa-search"></a>
                            <a href="#" class="overlayicon fa fa-cart-plus"></a>
                        </div>
                    </div>
                </div>
                            
            </div>

                     <!-- / Products-->
        </div>
    </div>
</div>


<!-- Footer-->
<footer>
<?php include('footer.html'); ?>
</footer>

<script src="scripts/custom-select.js"></script>

