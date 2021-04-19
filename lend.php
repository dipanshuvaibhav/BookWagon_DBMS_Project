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
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
	<div class="site-wrapper" id="top">
		<div class="site-header d-none d-lg-block">
			<div class="header-middle pt--10 pb--10">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3 ">
							<a href="index.php" class="site-brand">
								<img src="image/Logo1.png" alt="">
							</a>
						</div>
						<div class="col-lg-3">
							<div class="header-phone ">
								<div class="icon">
									<i class="fas fa-headphones-alt"></i>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-navigation flex-lg-right">
									<ul class="main-menu menu-right li-last-0">
											<li class="menu-item ">
												<a href="index.php">Home</a>
											</li>
											<!-- Shop -->
											<li class="menu-item  mega-menu">
                                       			<a href="shop-grid-left-sidebar.php">Shop </a>
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
					</div>
				</div>
			</div>
			<div class="header-bottom pb--10">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<div class="header-search-block">
								<input type="text" placeholder="Search entire store here">
								<button>Search</button>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="main-navigation flex-lg-right">
								<div class="cart-widget">
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
									<!--<div class="cart-block">
										<div class="cart-total">
											<span class="text-number">
												1
											</span>
											<span class="text-item">
												Shopping Cart
											</span>
											<span class="price">
												₹0.00
												<i class="fas fa-chevron-down"></i>
											</span>
										</div>
										<div class="cart-dropdown-block">
											<div class=" single-cart-block ">
												<div class="cart-product">
													<a href="product-details.php" class="image">
														<img src="image/products/cart-product-1.jpg" alt="">
													</a>
													<div class="content">
														<h3 class="title"><a href="product-details.php">Kodak PIXPRO
																Astro Zoom AZ421 16 MP</a></h3>
														<p class="price"><span class="qty">1 ×</span> ₹87.34</p>
														<button class="cross-btn"><i class="fas fa-times"></i></button>
													</div>
												</div>
											</div>
											<div class=" single-cart-block ">
												<div class="btn-block">
													<a href="cart.php" class="btn">View Cart <i
															class="fas fa-chevron-right"></i></a>
													<a href="checkout.php" class="btn btn--primary">Check Out <i
															class="fas fa-chevron-right"></i></a>
												</div>
											</div>
										</div>-->
									</div>
								</div>
							</div>
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
                                <a href="faq.php">Faq</a>
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
							<li class="breadcrumb-item active">Book registration</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!--=============================================
    =            Lender page content         =
    =============================================-->
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
						<form action="bookadded.php" method="post">
							<div class="book-form">
								<h4 class="login-title">Lend a book</h4>
								<p><span class="font-weight-bold">Enter the details about the book you want to lend</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="name">Book Title</label>
										<input class="mb-0 form-control" type="text" id="name" name="name"
											placeholder="Enter book title" required>
									</div>
									<div class="col-12 mb--20">
										<label for="price">Price</label>
										<input class="mb-0 form-control" type="text" id="price" name="price" placeholder="Enter book price here.." required>
									</div>
									<div class="col-lg-6 mb--20">
										<label for="image">Upload Book image</label>
										<input class="mb-0 form-control" type="file" name="fileToUpload" id="fileToUpload" required>
									</div>
									<div class="col-md-12">
                    					<button type="submit" name = "registerbtn" class="btn btn-outlined">REgister book</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
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
												<li><a href="contact.php">Contact us</a></li>
												<li><a href="faq.php">About Us</a></li>
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
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>