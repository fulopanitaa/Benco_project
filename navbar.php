<!DOCTYPE html>
<html lang="ro">

<head>
    
<?php include('header.html'); ?>

</head>
<body>
     
     
     <header>
        <div class="headercontainer">
            <div class="top-header flex">
                <div class="top-h-content flex top-h-content-left">
                    <a>Hotline: <strong>(800) 123 4567</strong></a>
                    <a><strong>Welcome to Benco store!</strong></a>
                </div>
                <div class="top-h-content top-h-content-right">
                    <a>Language: <span class="language-selector "><strong>English </strong></span></a>
                    <a>Currency: </a>
                    <a class="myaccount"><strong>My account</strong></a>
                </div>
            </div>
            <div class="main-header flex">
                <div class="logo">
                    <a href="/about" >
                        <img alt="logo" height="76px" width="123px" src="images/logo-black.png">
                    </a>
                </div>
                <div class="navigation-menu">
                    <nav class="navbar flex">
                        <li class="menu-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="menu-item">
                            <a href="about_us.php">About us</a>
                        </li>
                        <li class="menu-item">
                            <a href="faq.php">FAQ</a>
                        </li>
                        <li class="menu-item">
                            <a href="contact.php">Contact</a>
                        </li>
                    </nav>
                </div>
                <div class="main-header-right">
                    <a href="#">
                        <i class="icons fa fa-search" style="font-size:14px;"></i>
                    </a>
                    <a href="#">
                        <i class="icons fa fa-cart-plus" style="font-size:14px;"></i>
                    </a>
                </div>
            </div>
            <div class="mobile-menu">
                <div class="mobile-menu-container flex font-s-normal" href="#">
                    <div class="mobile-menu-toggle">Menu</div>
                    <div><i class="fa fa-bars"></i></div>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="index.php">Home</a>
                        <a href="shop.php">Shop</a>
                        <a href="about-us.php">About us</a>
                        <a href="faq.php">FAQ</a>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>
