<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
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
  																		echo  "<a href='my-account.php' class='font-weight-bold'>Welcome,".$_SESSION['name']."</a>";
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
  																				</span>
  																				<span class="text-item">
  																						Shopping Cart
  																				</span>

  																		</div>
  																		<div class="cart-dropdown-block">

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
  								<div class="row align-items-right">
  										<div class="col-lg-6">
  											<div class="main-navigation flex-lg-right">
  													<ul class="main-menu menu-right li-last-0">
  															<li class="menu-item ">
  																<a href="index.php">Home</a>
  															</li>
  															<!-- Shop -->
  															<li class="menu-item  mega-menu">
  																<a href="shop-grid-left-sidebar.php">shop </a>
  															</li>
  															<!-- Pages -->
  															<li class="menu-item has-children">
  																<a href="faq.php">FAQ </a>
  															</li>
  															<!-- Blog -->
  															<li class="menu-item mega-menu">
  																<a href="blog-list.php">Blog </a>
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
  														<a href="index.php">Home</a>
  													</li>
  													<!-- Shop -->
  													<li class="menu-item  mega-menu">
  														<a href="shop-grid-left-sidebar.php">shop </a>
  													</li>
  													<!-- Pages -->
  													<li class="menu-item has-children">
  														<a href="faq.php">FAQ</a>
  													</li>
  													<!-- Blog -->
  													<li class="menu-item mega-menu">
  														<a href="blog-list.php">Blog </a>
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
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- contact area Start -->
        <main class="contact_area inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            <form id="contact-form" action="php/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Name <span class="required">*</span></label>
                                            <input type="text" id="con_name" name="con_name" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input type="email" id="con_email" name="con_email" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea id="con_message" name="con_message"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black w-100"
                                                name="submit">send</button>
                                        </div>
                                        <div class="form__output"></div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div id="google-map"></div> -->
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1st%20Cross%20Rd,%20Bharathi%20Layout,%20S.G.%20Palya,%20Bengaluru,%20Karnataka%20560029&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                          <a href="https://fmovies2.org">fmovies</a>
                          <br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                          <a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
                          </style>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- contact area End -->
        <div class="contact-bottom-info inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <div class="content">
                                <h3 class="title">Contact By Phone</h3>
                                <p>1800-CALL-BW<br> 1800-CALL-8003</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <div class="content">
                                <h3 class="title">Contact By Email</h3>
                                <p>contact@bookwagon.com <br> info@bookwagon.com</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <div class="content">
                                <h3 class="title">Come To See Us</h3>
                                <p>Christ University<br>Hosur Main Road, Bangalore</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->

                    <!--Contact Information Start-->
                    <div class="col-lg-3 col-sm-6 col-12 mb-30">
                        <div class="contact-info">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <div class="content">
                                <h3 class="title">BookWagon Social</h3>
                                <ul class="social-list list-inline">
                                    <li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a></li>
                                    <li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                                    <li class="single-social google"><a href=""><i class="ion ion-social-googleplus-outline"></i></a></li>
                                    <li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Contact Information End-->
                </div>
            </div>
        </div>
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
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-4 col-sm-6">
                <div class="footer-title">
                    <h3>Newsletter Subscribe</h3>
                </div>
                <div class="newsletter-form mb--30">
                    <form action="./php/mail.php">
                        <input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
                        <button class="btn btn--primary w-100">Subscribe</button>
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
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
  		$(document).ready(function(){

  			load_cart_item_number();

  			function load_cart_item_number(){
  				$.ajax({
  					url :'action.php',
  					method:'get',
  					data: {cartItem:"cart_item"},
  					success:function(response){
  						$("#cart-item").html(response);
  					}
  				});
  			}
  		});
  	</script>
</body>

</html>
