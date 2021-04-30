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
  														<form action="searchpage.php" method= "post">
														<input type="text" name="search" placeholder="Search entire store here">
														<button type="submit" name = "search1" class="btn btn-outlined">Search</button>
                                                    								</form>
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
                                data-bg="image/bg-images/3.png">
                                <div class="home-content text-left pl--30">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <a href="shop-grid-left-sidebar.php" class="btn btn-outlined--pink">
                                                Rent Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide bg-image bg-overlay--dark"
                                data-bg="image/bg-images/1.png">
                                <div class="home-content text-left pl--30">
                                    <div class="row">
                                        <div class="col-lg-5">
                                          <?php
            															if(isset($_SESSION['id'])){
            															echo  '<a href="blogpost.php" class="btn btn-outlined--pink">Write Now</a>';
            															} else {
            															echo '<a href="login-register.php" class="btn btn-outlined--pink">Write Now</a>';
            															}
            															?>
                                            <!-- <a href="blogpost.php" class="btn btn-outlined--pink">
                                                Write Now
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
				                     <div class="single-slide bg-image bg-overlay--white"
                                data-bg="image/bg-images/2.png">
                                <div class="home-content text-left pl--30">
                                    <div class="row">
                                        <div class="col-lg-5">
                                          <?php
            															if(isset($_SESSION['id'])){
            															echo  '<a href="blogpost.php" class="btn btn-outlined--pink">Lend Now</a>';
            															} else {
            															echo '<a href="login-register.php" class="btn btn-outlined--pink">Lend Now</a>';
            															}
            															?>
                                            <!-- <a href="lend.php" class="btn btn-outlined--pink">
                                                Lend Now
                                            </a> -->
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
					<h5>Doorstep Delivery</h5>
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

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>24x7 Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

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
               <!-- <div class=" col-xl-3 col-lg-2 col-sm-6">
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

                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>-->
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h3>Newsletter Subscribe</h3>
                    </div>
                    <div class="newsletter-form mb--30">
                        <form action="newsletter-signup.php" method="post">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address Here...">
                            <button type="submit" name="submit" class="btn btn--primary w-100">Subscribe</button>
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

    <script type="text/javascript">
  		$(document).ready(function(){
  			$(".addItemButton").click(function(e){
  				e.preventDefault();
  				var  $form = $(this).closest(".form-submit");
  				var pid = $form.find(".pid").val();
  				var p_name = $form.find(".p_name").val();
  				var p_price = $form.find(".p_price").val();
  				var p_image = $form.find(".p_image").val();
  				var p_code = $form.find(".p_code").val();
  				$.ajax({
  					url: 'action.php',
  					method: 'post',
  					data: {pid:pid,p_name:p_name,p_price:p_price,p_image:p_image,p_code:p_code},
  					success:function(response){
  						$("#message").html(response);

  						load_cart_item_number();
  					}
  				});
  			});

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
