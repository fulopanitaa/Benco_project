
<!-- navbar -->
<?php include('navbar.php'); ?>
<!-- navbar -->

<div class="product-page">
    <div class="inner-container">

        <div class="breadcrumb-container">
                <ul class='breadcrumb'>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='shop.php'>Shop</a></li>		
                    <li><a href="#">Category name</a></li>
                    <li><a id="active">Product name</a></li>
                </ul>
        </div>



        <div class="product flex">
            <!-- Product image --> 
            <div class="product-image">
                <div class="expanded-image">
                     <img id="expandedImg" src="images/product1.jpg">
               </div>
               <div class="image-gallery flex">
                    <div class="column">
                        <img src="images/product1.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="images/product2.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="images/product3.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                        <img src="images/product4.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>

            <!-- Product description --> 
            <div class="product-desc font-s-normal">
                <div class="product-title font-s-normal">
                    <h1>Aliquam lobortis</h1>
                </div>

                <!-- Rating stars-->
                <div class="rating">
                    <div class="stars">
                        <span class="fa fa-star-o "></span>
                        <span class="fa fa-star-o "></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="fa fa-star-o"></span>
                        <a style="font-size:14px" href="#reviews" class="review-result" rel="nofollow">(<span class="count">1</span> customer review)</a>
                    </div>
                </div>

                <!-- Product price-->
                <p class="price">
                    <span class="price-amount"><span class="price-currency">$</span>145.00</span> – 
                    <span class="price-amount"><span class="price-currency">$</span>146.00</span>
                </p>

                <!--Short descroption-->
                <div class="short-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                </div>


                <!-- Product form -->
                <form class="product-form" action="" method="post">

                    <!-- Color -->
                    <div class="product-color">
                        <label for="p-color">
                            Color
                        </label>
                        <div class="color-value">
                            <select id="p_color" class="">
                                <option value="">Choose an option</option>
                                <option value="black">Black</option>
                                <option value="blue">Blue</option>
                                <option value="gold">Gold</option>
                            </select>
                        </div>
                    </div>

                        <!-- Quantity -->
                    <div class="quantity">
                        <label style="display:none" class="p-quantity" for="quantity">Quantity</label>
                        <input type="number" id="quantity" class="input-text qty text" step="1" min="1" max="200" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*">
                        <button type="submit" class="qty-button"><span><i class="fa fa-cart-plus btn-icon"></i></span>Add to cart</button>
                    </div>

                </form>

                    <!-- Add to wish and compare button --> 
                <div class="wish-compare">
                    <a class="wishlist-button" href="#"><span><i class="fa fa-heart-o btn-icon"></i></span>Add to Wishlist</a>
                    <a class="compare-button" href="#"><span><i class="fa fa-compress btn-icon"></i></span>Add to Compare</a>
                </div>

                    <!-- Meta tags --> 
                <div class="product-meta"> 	
                    <span class="meta-title">SKU: <span class="sku">N/A</span></span>
                    <span class="meta-title">Categories: 
                        <a href="" rel="tag">Decor &amp; Furniture</a> 
                        <a href="" rel="tag">Furniture</a>
                    </span>
                    <span class="meta-title">Tag: <a href="" rel="tag">men</a></span>
                </div>

                <!-- Share buttons--> 
                <div class="share-buttons flex">
                    <h3 style="margin-right:30px" class="share-title">Share this product</h3>
                    <ul class="share-buttonlist">
                        <li><a href="#" class="share-button fa fa-facebook"><span class="tooltiptext">Facebook</span></a></li>
                        <li><a href="#" class="share-button fa fa-twitter"><span class="tooltiptext">Twitter</span></a></li>
                        <li><a href="#" class="share-button fa fa-google"><span class="tooltiptext">Google</span></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Full page tabs-->

        <div class="tab-container">

            <div class="tab-buttons">
                <div class="tabs flex">
                    <button class="tablink" onclick="openPage('Description', this)" id="defaultOpen"><span>Description</span></button>
                    <button class="tablink" onclick="openPage('AddInfo', this)"><span>Additional Information</span></button>
                    <button class="tablink" onclick="openPage('Reviews', this)"><span>Reviews</span></button>
                </div>
            </div>

            <div id="Description" class="tabcontent">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</p>
                <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
            </div>

            <div id="AddInfo" class="tabcontent">
                <h2 class="font-s-normal">Additional information</h2>
                <table class="add-info-table">
                    <tr>
                        <th class="f12">Color</th>
                        <td>Black, Blue, Gold</td>
                    </tr>
                </table>
            </div>

            <div id="Reviews" class="tabcontent font-s-normal">
                <h3>Reviews</h3>
                <p>Get in touch, or swing by for a cup of coffee.</p>
            </div>
        </div>

        <!-- Related products-->

        <div class="related-container ft-products-inner">



            <div class="ft-products-title">
                <h3 class="f20 font-s-normal" >Related products</h3>
                <p>The most prominent product in the store, which was bought with the highest number</p>
            </div>

            <div class="products flex nowrap">

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


            </div>



        </div>


    </div>
</div>



<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<!-- Footer-->
<footer>
<?php include('footer.html'); ?>
</footer>
