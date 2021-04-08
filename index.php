<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BookWagon - Why buy if you can rent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header header-4 mb--20 d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="index.php" class="site-brand">
                                <img src="image/Logo1.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-search-block">
                                <input type="text" placeholder="Search entire store here">
                                <button>Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                  <!-- login block -->
                                    <div class="login-block">
                                      <?php
                                        if(isset($_SESSION['id'])){
                                        echo  "<p class='font-weight-bold'>Welcome,".$_SESSION['name']."</p>";
                                        } else {
                                        echo '<a href="login-register.php" class="font-weight-bold">Login</a> <br>
                                        <span>or</span><a href="login-register.php">Register</a>';
                                        }
                                        ?>
                                    </div>
                                    <!-- shopping cart logo  -->
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            <span class="text-number" id="cart-item">
                                                1
                                            </span>
                                            <span class="text-item">
                                                Shopping Cart
                                            </span>
                                            <span class="price" >
                                                ₹0.00
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="cart-dropdown-block">
                                            <!-- <div class=" single-cart-block ">
                                                <div class="cart-product">
                                                    <a href="product-details.php" class="image">
                                                        <img src="image/products/cart-product-1.jpg" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h3 class="title"><a href="product-details.php">Kodak PIXPRO
                                                                Astro Zoom AZ421 16 MP</a>
                                                        </h3>
                                                        <p class="price"><span class="qty">1 ×</span> ₹87.34</p>
                                                        <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class=" single-cart-block ">
                                                <div class="btn-block">
                                                    <a href="cart.php" class="btn">View Cart <i
                                                            class="fas fa-chevron-right"></i></a>
                                                    <a href="checkout.php" class="btn btn--primary">Check Out <i
                                                            class="fas fa-chevron-right"></i></a>
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
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">+01-202-555-0181</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="main-navigation flex-lg-right">
                              <ul class="main-menu menu-right li-last-0">
                                  <li class="menu-item ">
                                      <!-- <a href="javascript:void(0)">Home <i
                                              class="fas fa-chevron-down dropdown-arrow"></i></a> -->
                                              <a href="index.php">Home</a><!--changes have been made here-->
                                      <!-- <ul class="sub-menu">
                                          <li> <a href="index.php">Home One</a></li>
                                          <li> <a href="index-2.php">Home Two</a></li>
                                          <li> <a href="index-3.php">Home Three</a></li>
                                          <li> <a href="index.php">Home Four</a></li>
                                          <li> <a href="index-5.php">Home Five</a></li>
                                      </ul> -->
                                  </li>
                                  <!-- Shop -->
                                  <li class="menu-item  mega-menu">
                                                    <a href="shop-grid-left-sidebar.php">shop </a>
                                                    <!-- <ul class="sub-menu four-column">
                                                        <li class="cus-col-25">
                                                            <h3 class="menu-title"><a href="javascript:void(0)">Shop</a></h3>
                                                            <ul class="mega-single-block">
                                                                <li><a href="shop-grid.php">Fullwidth</a></li>
                                                                <li><a href="shop-grid-left-sidebar.php">Shop</a></li>
                                                                <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <!-- <li class="cus-col-25">
                                                            <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                                            <ul class="mega-single-block">
                                                                <li><a href="shop-list.php">Fullwidth</a></li>
                                                                <li><a href="shop-list-left-sidebar.php">List</a></li>
                                                              <li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
                                                            </ul>
                                                        </li>-->
                                                        <!-- <li class="cus-col-25">
                                                            <h3 class="menu-title"> <a href="javascript:void(0)">Product Details
                                                                    </a></h3>
                                                            <ul class="mega-single-block">
                                                                <li><a href="product-details.php">Product Details Page</a></li>
                                                                <li><a href="product-details-affiliate.php">Product Details
                                                                        Affiliate</a></li>
                                                                <li><a href="product-details-group.php">Product Details Group</a>
                                                                </li>
                                                                <li><a href="product-details-variable.php">Product Details
                                                                        Variables</a></li>
                                                            </ul>
                                                        </li> -->
                                                        <!-- <li class="cus-col-25">
                                                            <h3 class="menu-title"><a href="javascript:void(0)">Product Details
                                                                    2</a></h3>
                                                            <ul class="mega-single-block">
                                                                <li><a href="product-details-left-thumbnail.php">Thumbnail</a>
                                                                </li> -->
                                                                <!-- <li><a href="product-details-right-thumbnail.php">Right Thumbnail</a></li> -->
                                                                <!-- <li><a href="product-details-left-gallery.php">Gallery</a>
                                                                </li> -->
                                                                <!-- <li><a href="product-details-right-gallery.php">Right Gallery</a>
                                                                </li> -->
                                                            <!-- </ul>
                                                        </li> -->

                                                </li>
                                  <!-- Pages -->
                                  <li class="menu-item has-children">
                                      <a href="javascript:void(0)">Pages <i
                                              class="fas fa-chevron-down dropdown-arrow"></i></a>
                                      <ul class="sub-menu">
                                          <li><a href="cart.php">Cart</a></li>
                                          <li><a href="checkout.php">Checkout</a></li>
                                          <!-- <li><a href="compare.php">Compare</a></li> -->
                                          <li><a href="wishlist.php">Wishlist</a></li>
                                          <li><a href="login-register.php">Login Register</a></li>
                                          <li><a href="my-account.php">My Account</a></li>
                                          <li><a href="order-complete.php">Order Complete</a></li>
                                          <li><a href="faq.php">Faq</a></li>
                                          <!-- made a change here -->
                                          <li><a href="contact.php">contact</a></li>
                                      </ul>
                                  </li>
                                  <!-- Blog -->
                                  <li class="menu-item mega-menu">
                                      <a href="blog-list.php">Blog </a>
                                      <!-- <ul class="sub-menu three-column">
                                          <li class="cus-col-33">
                                              <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                              <ul class="mega-single-block">
                                                  <li><a href="blog.php">Full Widh (Default)</a></li>
                                                  <li><a href="blog-left-sidebar.php">left Sidebar</a></li>
                                                  <li><a href="blog-right-sidebar.php">Right Sidebar</a></li>
                                              </ul>
                                          </li>
                                          <li class="cus-col-33">
                                              <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                              <ul class="mega-single-block">
                                                  <li><a href="blog-list.php">Full Widh (Default)</a></li>
                                                  <li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
                                                  <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li>
                                              </ul>
                                          </li>
                                          <li class="cus-col-33">
                                              <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
                                              </h3>
                                              <ul class="mega-single-block">
                                                  <li><a href="blog-details.php">Image Format (Default)</a></li>
                                                  <li><a href="blog-details-gallery.php">Gallery</a></li>
                                                  <li><a href="blog-details-audio.php">Audio Format</a></li>
                                                  <li><a href="blog-details-video.php">Video Format</a></li>
                                                  <li><a href="blog-details-left-sidebar.php">Blog</a></li>
                                              </ul>
                                          </li>
                                      </ul> -->
                                  </li>
                                  <li class="menu-item">
                                      <a href="contact.php">Contact</a>
                                  </li>
                              </ul>
                          </div>
                        </div>
                        <!-- logout button -->
                        <div class="login-block">
                          <?php
                          if(isset($_SESSION['id'])){
                          echo  '<a href="logout.php" class="btn btn--primary font-weight-bold">Logout</a>';
                          } else {
                          echo '<button type="button" action="" name="button" class="btn btn--primary" style="display:none;">Logout</button>';
                          }
                          ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="index.php" class="site-brand">
                            <img src="image/Logo1.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                      <div class="main-navigation flex-lg-right">
                          <ul class="main-menu menu-right li-last-0">
                              <li class="menu-item ">
                                  <!-- <a href="javascript:void(0)">Home <i
                                          class="fas fa-chevron-down dropdown-arrow"></i></a> -->
                                          <a href="index.php">Home</a><!--changes have been made here-->
                                  <!-- <ul class="sub-menu">
                                      <li> <a href="index.php">Home One</a></li>
                                      <li> <a href="index-2.php">Home Two</a></li>
                                      <li> <a href="index-3.php">Home Three</a></li>
                                      <li> <a href="index.php">Home Four</a></li>
                                      <li> <a href="index-5.php">Home Five</a></li>
                                  </ul> -->
                              </li>
                              <!-- Shop -->
                              <li class="menu-item  mega-menu">
                                                <a href="shop-grid-left-sidebar.php">shop </a>
                                                <!-- <ul class="sub-menu four-column">
                                                    <li class="cus-col-25">
                                                        <h3 class="menu-title"><a href="javascript:void(0)">Shop</a></h3>
                                                        <ul class="mega-single-block">
                                                            <li><a href="shop-grid.php">Fullwidth</a></li>
                                                            <li><a href="shop-grid-left-sidebar.php">Shop</a></li>
                                                            <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li>
                                                        </ul> -->
                                                    </li>
                                                    <!-- <li class="cus-col-25">
                                                        <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                                        <ul class="mega-single-block">
                                                            <li><a href="shop-list.php">Fullwidth</a></li>
                                                            <li><a href="shop-list-left-sidebar.php">List</a></li>
                                                          <li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
                                                        </ul>
                                                    </li>-->
                                                    <!-- <li class="cus-col-25">
                                                        <h3 class="menu-title"> <a href="javascript:void(0)">Product Details
                                                                </a></h3>
                                                        <ul class="mega-single-block">
                                                            <li><a href="product-details.php">Product Details Page</a></li>
                                                            <li><a href="product-details-affiliate.php">Product Details
                                                                    Affiliate</a></li>
                                                            <li><a href="product-details-group.php">Product Details Group</a>
                                                            </li>
                                                            <li><a href="product-details-variable.php">Product Details
                                                                    Variables</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <!-- <li class="cus-col-25">
                                                        <h3 class="menu-title"><a href="javascript:void(0)">Product Details
                                                                2</a></h3>
                                                        <ul class="mega-single-block">
                                                            <li><a href="product-details-left-thumbnail.php">Thumbnail</a>
                                                            </li> -->
                                                            <!-- <li><a href="product-details-right-thumbnail.php">Right Thumbnail</a></li> -->
                                                            <!-- <li><a href="product-details-left-gallery.php">Gallery</a>
                                                            </li> -->
                                                            <!-- <li><a href="product-details-right-gallery.php">Right Gallery</a>
                                                            </li> -->
                                                        <!-- </ul>
                                                    </li> -->

                                            </li>
                              <!-- Pages -->
                              <li class="menu-item has-children">
                                  <a href="javascript:void(0)">Pages <i
                                          class="fas fa-chevron-down dropdown-arrow"></i></a>
                                  <ul class="sub-menu">
                                      <li><a href="cart.php">Cart</a></li>
                                      <li><a href="checkout.php">Checkout</a></li>
                                      <!-- <li><a href="compare.php">Compare</a></li> -->
                                      <li><a href="wishlist.php">Wishlist</a></li>
                                      <li><a href="login-register.php">Login Register</a></li>
                                      <li><a href="my-account.php">My Account</a></li>
                                      <li><a href="order-complete.php">Order Complete</a></li>
                                      <li><a href="faq.php">Faq</a></li>
                                      <!-- made a change here -->
                                      <li><a href="contact.php">contact</a></li>
                                  </ul>
                              </li>
                              <!-- Blog -->
                              <li class="menu-item mega-menu">
                                  <a href="blog-list.php">Blog </a>
                                  <!-- <ul class="sub-menu three-column">
                                      <li class="cus-col-33">
                                          <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                          <ul class="mega-single-block">
                                              <li><a href="blog.php">Full Widh (Default)</a></li>
                                              <li><a href="blog-left-sidebar.php">left Sidebar</a></li>
                                              <li><a href="blog-right-sidebar.php">Right Sidebar</a></li>
                                          </ul>
                                      </li>
                                      <li class="cus-col-33">
                                          <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                          <ul class="mega-single-block">
                                              <li><a href="blog-list.php">Full Widh (Default)</a></li>
                                              <li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
                                              <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li>
                                          </ul>
                                      </li>
                                      <li class="cus-col-33">
                                          <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
                                          </h3>
                                          <ul class="mega-single-block">
                                              <li><a href="blog-details.php">Image Format (Default)</a></li>
                                              <li><a href="blog-details-gallery.php">Gallery</a></li>
                                              <li><a href="blog-details-audio.php">Audio Format</a></li>
                                              <li><a href="blog-details-video.php">Video Format</a></li>
                                              <li><a href="blog-details-left-sidebar.php">Blog</a></li>
                                          </ul>
                                      </li>
                                  </ul> -->
                              </li>
                              <li class="menu-item">
                                  <a href="contact.php">Contact</a>
                              </li>
                          </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        Hero Area
    ===================================== -->
        <section class="hero-area hero-slider-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="sb-slick-slider" data-slick-setting='{
                                                                    "autoplay": true,
                                                                    "autoplaySpeed": 8000,
                                                                    "slidesToShow": 1,
                                                                    "dots":true
                                                                    }'>
                            <div class="single-slide bg-image bg-overlay--white"
                                data-bg="image/bg-images/home-4-slider-1.jpg">
                                <div class="home-content text-left pl--30">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <span class="title-small">Magazine Cover</span>
                                            <h1>Mockup.</h1>
                                            <p>Cover up front of book and
                                                <br>leave summary</p>
                                            <a href="shop-grid-left-sidebar.php" class="btn btn-outlined--pink">
                                                Shop Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide bg-image bg-overlay--dark"
                                data-bg="image/bg-images/home-4-slider-2.jpg">
                                <div class="home-content text-center">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-8">
                                            <h1 class="v2">I Love This Idea!</h1>
                                            <h2>Cover up front of book and
                                                leave summary</h2>
                                            <a href="shop-grid-left-sidebar.php" class="btn btn--yellow">
                                                Shop Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Features Section
    ===================================== -->
        <section class="mb--30">
            <h2 class="sr-only">Feature Section</h2>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over $500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                                <p>Lorem ipsum dolor amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : + 0123.4567.89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Category Gallery
    ===================================== -->
        <!-- <section class="section-margin">
            <h2 class="sr-only">Category Gallery Section</h2>
            <div class="container">
                <div class="category-gallery-block">
                    <a href="#" class="single-block hr-large">
                        <img src="image/others/cat-gal-large.png" alt="">
                    </a>
                    <div class="single-block inner-block-wrapper">
                        <a href="#" class="single-image mid-image">
                            <img src="image/others/cat-gal-mid.png" alt="">
                        </a>
                        <a href="#" class="single-image small-image">
                            <img src="image/others/cat-gal-small.png" alt="">
                        </a>
                        <a href="#" class="single-image small-image">
                            <img src="image/others/cat-gal-small-2.jpg" alt="">
                        </a>
                        <a href="#" class="single-image mid-image">
                            <img src="image/others/cat-gal-mid-2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
        <!--=================================
        Home Two Column Section
    ===================================== -->
        <section class="section-margin">
            <h1 class="sr-only">Promotion Section</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="home-left-side text-center text-lg-left">
                            <div class="single-block">
                                <h3 class="home-sidebar-title">
                                    BEST SELLERS
                                </h3>
                                <div class="product-slider product-list-slider multiple-row sb-slick-slider home-4-left-sidebar"
                                    data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":1,
                                            "rows":4,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2, "rows":2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-1.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="#" class="author">
                                                        Fpple
                                                    </a>
                                                    <h3><a href="product-details.php">Get Through To Your
                                                            BOOK</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-2.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Gpple
                                                    </a>
                                                    <h3><a href="product-details.php">What Can You Do To Save Your
                                                            BOOK</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-3.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a class="author">
                                                        Hpple
                                                    </a>
                                                    <h3><a href="product-details.php">From Destruction By Social
                                                            Media?</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-4.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="#" class="author">
                                                        Gpple
                                                    </a>
                                                    <h3><a href="product-details.php">Find Out More About BOOK ?</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-5.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="#" class="author">
                                                        Dpple
                                                    </a>
                                                    <h3><a href="product-details.php">Controversial BOOK
                                                            Social Media?</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-6.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Robert .T .Kiyosaki
                                                    </a>
                                                        <h3><a href="product-details.php">Rich Dad Poor Dad</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-7.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Apple
                                                    </a>
                                                        <h3><a href="product-details.php">Ways To Have More
                                                                BOOK</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-8.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Xpple
                                                    </a>
                                                        <h3><a href="product-details.php">Ways To Have More
                                                                BOOK</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-9.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Tpple
                                                    </a>
                                                        <h3><a href="product-details.php">10 Minutes, I'll Give You
                                                                The Truth</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-10.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Fpple
                                                    </a>
                                                        <h3><a href="product-details.php">What Can You Do To Save Your
                                                                BOOK</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-9.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Tpple
                                                    </a>
                                                        <h3><a href="product-details.php">10 Minutes, I'll Give You
                                                                The Truth</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card card-style-list">
                                            <div class="card-image">
                                                <img src="image/products/product-10.jpg" alt="">
                                            </div>
                                            <div class="product-card--body">
                                                <div class="product-header">
                                                    <a href="" class="author">
                                                        Fpple
                                                    </a>
                                                        <h3><a href="product-details.php">What Can You Do To Save Your
                                                                BOOK</a></h3>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="single-block text-center">
                                <a href="" class="promo-image home-sidebar-promo promo-overlay">
                                    <img src="image/others/home-side-promo.jpg" alt="">
                                </a>
                            </div> -->
                            <!-- <div class="single-block text-center">
                                <h3 class="home-sidebar-title style-2">
                                    Special offer
                                </h3>
                                <div class="product-slider countdown-single with-countdown sb-slick-slider product-border-reset"
                                    data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow": 1,
                                                "dots":true
                                            }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Ypple
                                                </a>
                                                    <h3><a href="product-details.php">BOOK: Do You Really Need It? This
                                                            Will Help You</a></h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-2.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.php" class="hover-image">
                                                            <img src="image/products/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.php" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.php" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Upple
                                                </a>
                                                    <h3><a href="product-details.php">Here Is A Quick Cure For BOOK
                                                            This Will Help</a></h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-2.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.php" class="hover-image">
                                                            <img src="image/products/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.php" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.php" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Ypple
                                                </a>
                                                    <h3><a href="product-details.php">Simple Things
                                                            You Can Do Save BOOK save money</a>
                                                    </h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-3.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.php" class="hover-image">
                                                            <img src="image/products/product-2.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.php" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.php" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Epple
                                                </a>
                                                    <h3><a href="product-details.php">What You Can Learn From Bill
                                                            Gates reading a book</a></h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-5.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.php" class="hover-image">
                                                            <img src="image/products/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.php" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.php" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Rpple
                                                </a>
                                                    <h3><a href="product-details.php">3 Ways Create Better BOOK With
                                                            The Help Of Your Dog</a>
                                                    </h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-6.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.php" class="hover-image">
                                                            <img src="image/products/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.php" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.php" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="product-card">
                                            <div class="product-header">
                                                <a href="" class="author">
                                                    Tpple
                                                </a>
                                                    <h3><a href="product-details.php">Turn Your BOOK Into A High
                                                            Performing Machine</a></h3>
                                            </div>
                                            <div class="product-card--body">
                                                <div class="card-image">
                                                    <img src="image/products/product-8.jpg" alt="">
                                                    <div class="hover-contents">
                                                        <a href="product-details.php" class="hover-image">
                                                            <img src="image/products/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="hover-btns">
                                                            <a href="cart.php" class="single-btn">
                                                                <i class="fas fa-shopping-basket"></i>
                                                            </a>
                                                            <a href="wishlist.php" class="single-btn">
                                                                <i class="fas fa-heart"></i>
                                                            </a>
                                                            <a href="compare.php" class="single-btn">
                                                                <i class="fas fa-random"></i>
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                                                class="single-btn">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-block">
                                                    <span class="price">₹51.20</span>
                                                    <del class="price-old">₹51.20</del>
                                                    <span class="price-discount">20%</span>
                                                </div>
                                                <div class="count-down-block">
                                                    <div class="product-countdown" data-countdown="01/05/2020"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-block">
                                <h3 class="home-sidebar-title">
                                    CLIENT TESTIMONIALS
                                </h3>
                                <div class="sb-slick-slider testimonial-slider slider-one-column" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow":1,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                {"breakpoint":490, "settings": {"slidesToShow": 1} }
            ]'>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-1.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>version This is Photoshops of Lorem Ipsum. Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor
                                                        sit amet, consectetur
                                                        adipiscing elit. In molestie augue magna. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-2.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>In molestie augue magna.This is Photoshops version of Lorem
                                                        Ipsum. Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-3.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>Lorem Ipsum This is Photoshops version of . Proin gravida nibh
                                                        vel velit.Lorem ipsum
                                                        dolor sit amet, consectetur
                                                        adipiscing elit. In molestie augue magna. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-4.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>elit. In molestie This is Photoshops version of Lorem Ipsum.
                                                        Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing augue magna. Pell..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="testimonial-card">
                                            <div class="testimonial-image">
                                                <img src="image/others/client-5.png" alt="">
                                            </div>
                                            <div class="testimonial-body">
                                                <article>
                                                    <h2 class="sr-only">Testimonial Article</h2>
                                                    <p>Pell Photoshops version of Lorem Ipsum. Proin gravida nibh vel
                                                        velit.Lorem ipsum dolor
                                                        sit amet, consectetur
                                                        adipiscing elit. In molestie augue magna. This is..</p>
                                                    <span class="d-block client-name">Rebecka Filson</span>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="home-right-side">
                            <div class="single-block">
                                <div class="sb-custom-tab text-lg-left text-center">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="shop-tab" data-toggle="tab" href="#shop"
                                                role="tab" aria-controls="shop" aria-selected="true">
                                                Featured Products
                                            </a>
                                            <span class="arrow-icon"></span>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab"
                                                aria-controls="men" aria-selected="true">
                                                New Arrivals
                                            </a>
                                            <span class="arrow-icon"></span>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="woman-tab" data-toggle="tab" href="#woman"
                                                role="tab" aria-controls="woman" aria-selected="false">
                                                Most view products
                                            </a>
                                            <span class="arrow-icon"></span>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content space-db--30" id="myTabContent">
                                        <div class="tab-pane show active" id="shop" role="tabpanel"
                                            aria-labelledby="shop-tab">
                                            <div class="product-slider multiple-row slider-border-multiple-row  sb-slick-slider"
                                                data-slick-setting='{
                        "autoplay": true,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 3,
                        "rows":2,
                        "dots":true
                    }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {"slidesToShow": 3} },
                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                    ]'>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                    Robert.T.Kiyosaki
                                                            </a>
                                                                <h3><a href="product-details.php">Rich Dad Poor Dad</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-1.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-1.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Napoleon Hill
                                                            </a>
                                                                <h3><a href="product-details.php">Think And Grow Rich</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-2.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-3.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                J.K.Rowling
                                                            </a>
                                                                <h3><a href="product-details.php">Harry Potter</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-3.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-2.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Dpple
                                                            </a>
                                                                <h3><a href="product-details.php">Beats Solo2 Solo 2
                                                                        Wired On-Ear</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-4.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-5.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Lpple
                                                            </a>
                                                                <h3><a href="product-details.php">Beats Solo3 Wireless
                                                                        Headphones 2</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-5.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-4.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Fpple
                                                            </a>
                                                                <h3><a href="product-details.php">Ways To Have
                                                                        Appealing BOOK</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-6.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-7.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Epple
                                                            </a>
                                                                <h3><a href="product-details.php">10 Minutes, I'll
                                                                        Give You Truth About</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-7.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-6.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Fpple
                                                            </a>
                                                                <h3><a href="product-details.php">Ways To Get Through
                                                                        BOOK</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-8.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-9.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Gpple
                                                            </a>
                                                                <h3><a href="product-details.php">What Can You Do To
                                                                        Save Your BOOK</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-9.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-8.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Hpple
                                                            </a>
                                                                <h3><a href="product-details.php">From Destruction By
                                                                        Social Media?</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-10.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-11.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Gpple
                                                            </a>
                                                                <h3><a href="product-details.php">Find Out More About
                                                                        BOOK ?</a></h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-11.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-10.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slide">
                                                    <div class="product-card">
                                                        <div class="product-header">
                                                            <a href="" class="author">
                                                                Vpple
                                                            </a>
                                                                <h3><a href="product-details.php">Read This
                                                                        Contro versial BOOK?</a>
                                                                </h3>
                                                        </div>
                                                        <div class="product-card--body">
                                                            <div class="card-image">
                                                                <img src="image/products/product-12.jpg" alt="">
                                                                <div class="hover-contents">
                                                                    <a href="product-details.php" class="hover-image">
                                                                        <img src="image/products/product-11.jpg" alt="">
                                                                    </a>
                                                                    <div class="hover-btns">
                                                                        <a href="cart.php" class="single-btn">
                                                                            <i class="fas fa-shopping-basket"></i>
                                                                        </a>
                                                                        <a href="wishlist.php" class="single-btn">
                                                                            <i class="fas fa-heart"></i>
                                                                        </a>
                                                                        <a href="compare.php" class="single-btn">
                                                                            <i class="fas fa-random"></i>
                                                                        </a>
                                                                        <a href="#" data-toggle="modal"
                                                                            data-target="#quickModal"
                                                                            class="single-btn">
                                                                            <i class="fas fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="price-block">
                                                                <span class="price">₹51.20</span>
                                                                <del class="price-old">₹51.20</del>
                                                                <span class="price-discount">20%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-block">
                                <div class="blog-slider sb-slick-slider slider-one-column" data-slick-setting='{
                        "autoplay": false,
                        "autoplaySpeed": 8000,
                        "slidesToShow": 1,
                        "dots": true
                    }'>
                                    <div class="single-slide">
                                        <div class="blog-card">
                                            <div class="image">
                                                <img src="image/others/home-blog-1.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="content-header">
                                                    <div class="date-badge">
                                                        <span class="date">
                                                            30
                                                        </span>
                                                        <span class="month">
                                                            OCT
                                                        </span>
                                                    </div>
                                                    <h3 class="title"><a href="blog-details-left-sidebar.php">How to Water and Care
                                                            for Mounted</a></h3>
                                                </div>
                                                <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a
                                                        href="#">Hastech</a></p>
                                                <article class="blog-paragraph">
                                                    <h2 class="sr-only">blog-paragraph</h2>
                                                    <p>Virtual reality and 3-D technology are already well-established
                                                        in the entertainment...</p>
                                                </article>
                                                <a href="blog-details-left-sidebar.php" class="card-link">Read More <i
                                                        class="fas fa-chevron-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slide">
                                        <div class="blog-card">
                                            <div class="image">
                                                <img src="image/others/home-blog-2.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="content-header">
                                                    <div class="date-badge">
                                                        <span class="date">
                                                            30
                                                        </span>
                                                        <span class="month">
                                                            OCT
                                                        </span>
                                                    </div>
                                                    <h3 class="title"><a href="blog-details-left-sidebar.php">How to Grow Epiphytic
                                                            Tropical Plants</a></h3>
                                                </div>
                                                <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a
                                                        href="#">Hastech</a></p>
                                                <article class="blog-paragraph">
                                                    <h2 class="sr-only">blog-paragraph</h2>
                                                    <p>Virtual reality and 3-D technology are already well-established
                                                        in the entertainment...</p>
                                                </article>
                                                <a href="blog-details-left-sidebar.php" class="card-link">Read More <i
                                                        class="fas fa-chevron-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->

        <!--=================================
    Footer
===================================== -->
    </div>
    <!--=================================
  Brands Slider
===================================== -->

    <!--=================================
    Footer Area
===================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row justify-content-between  section-padding">
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="brand-footer footer-title">
                            <img src="image/Logo1.png" alt="">
                        </div>
                        <div class="footer-contact">
                            <p><span class="label">Address:</span><span class="text">Sg Palya ,Hosur Road,karnataka,Bangalore
                                     India</span></p>
                            <p><span class="label">Phone:</span><span class="text">9887456215</span></p>
                            <p><span class="label">Email:</span><span class="text">suport@bookswagon.com</span></p>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="footer-title">
                            <h3>Information</h3>
                        </div>
                        <ul class="footer-list normal-list">
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="footer-title">
                            <h3>Extras</h3>
                        </div>
                        <ul class="footer-list normal-list">
                            <!-- <li><a href="">Delivery</a></li> -->
                            <li><a href="">About Us</a></li>
                            <!-- <li><a href="">Stores</a></li> -->
                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h3>Newsletter Subscribe</h3>
                    </div>
                    <div class="newsletter-form mb--30">
                        <form action="newsletter-signup.php">
                            <input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
                            <button type="submit" class="btn btn--primary w-100">Subscribe</button>
                        </form>
                    </div>
                    <div class="social-block">
                        <h3 class="title">STAY CONNECTED</h3>
                        <ul class="social-list list-inline">
                            <li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a>
                            </li>
                            <li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                            <li class="single-social google"><a href=""><i
                                        class="ion ion-social-googleplus-outline"></i></a></li>
                            <li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-heading"></p>
                <a href="#" class="payment-block">
                    <img src="image/icon/payment.png" alt="">
                </a>
                <p class="copyright-text">Copyright © 2019 <a href="#" class="author">BookWagon</a>. All Right Reserved.
                    <br>
                    Design By BookWagon</p>
            </div>
        </div>
    </footer>
    <!-- Use Minified Plugins Version For Fast Page Load -->
        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
