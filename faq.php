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
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">FAQ</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>

		<!-- faq Page Start -->
		<div class="faq-area inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner text-center">
							<h1>GENERAL QUESTION</h1>
						</div>
					</div>
				</div>
				<div class="row mbn-30">

					<div class="col-lg-6 col-12">
						<!--FAQ (Accordion) Start-->
						<div class="accordion" id="gq-faqs-1">
							<!--Cart Start-->
							<div class="card">
								<div class="card-header">
									<h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-1">Why rent instead of buying?</button></h5>
								</div>
								<div id="gq-faq-1" class="collapse show" data-parent="#gq-faqs-1">
									<div class="card-body">
										<p>Renting is a better option that buying since it takes away the hassle of storing too many paperback, that way, you can never have "enough" books. Moreover, renting focuses and conpliments affordability as compared to paperbacks. Therefore, stop paying a fortune for your love of reading.</p>
									</div>
								</div>
							</div><!--Cart End-->

							<!--Cart Start-->
							<div class="card">
								<div class="card-header">
									<h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-2">How is BookWagon different?</button></h5>
								</div>
								<div id="gq-faq-2" class="collapse" data-parent="#gq-faqs-1">
									<div class="card-body">
										<p>Other than being an affordable and user friendly book rental site, BookWagon goes a step ahead by prioritising the formation of an intellectual community by creating a book review blog alongside. We understand the importance of bringing together bibliophiles and the convergence and exchange of opinion over books. We make sure to give you a space to go beyond your reads, therefore stepping ahead of other e-commerce sites.</p>
									</div>
								</div>
							</div><!--Cart End-->

							<!--Cart Start-->
							<div class="card">
								<div class="card-header">
									<h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-3">Why enroll as a member?</button></h5>
								</div>
								<div id="gq-faq-3" class="collapse" data-parent="#gq-faqs-1">
									<div class="card-body">
										<p>A guest member can only avail the renting of books whereas a member can contribute books and earn, be a part of our intellectual community, we often open up various oppurtunities and sales exclusively for our members.</p>
									</div>
								</div>
							</div><!--Cart End-->

							<!--Cart Start-->
							<div class="card">
								<div class="card-header">
									<h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-4">How is the pricing transparent?</button></h5>
								</div>
								<div id="gq-faq-4" class="collapse" data-parent="#gq-faqs-1">
									<div class="card-body">
										<p>We don't just rent books at a subsidised price but we also keep our cutomers on loop with the pricing process making them aware of the original price and the division of our rental rates. Our pricing takes essential factors into consideration such as the delivery associate fees, transportation fees and the base rental amount. But we make sure that these factor do not make us compromise with our very objective of putting your convenience first.</p>
									</div>
								</div>
							</div><!--Cart End-->

						</div><!--FAQ (Accordion) End-->
					</div>

					<div class="col-lg-6 col-12 accordion-2">
						<!--FAQ (Accordion) Start-->
						<div class="accordion" id="gq-faqs-2">

							<!--Cart Start-->
							<div class="card">
								<div class="card-header">
									<h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-5">How is the BookWagon blog different?</button></h5>
								</div>
								<div id="gq-faq-5" class="collapse show" data-parent="#gq-faqs-2">
									<div class="card-body">
										<p>The BookWagon blog is more than just a blog, it is an exclusive community which is made keeping in the mind the fact that reading is more than an activity or a hobby, it is an experience worth sharing. Therefore, the4 BookWagon blog is like a bibliophile's haven where ideas and imagination converge to make our reader's experience worthwhile. BookWagon is less about a commercial site and more about a sense of community.</p>
									</div>
								</div>
							</div><!--Cart End-->

							<!--Cart Start-->
							<div class="card">
								<div class="card-header">
									<h5 class="mb-0"><button class="collapsed" data-toggle="collapse" data-target="#gq-faq-6">Why choose books over e-books at all?</button></h5>
								</div>
								<div id="gq-faq-6" class="collapse" data-parent="#gq-faqs-2">
									<div class="card-body">
										<p>As we've always stressed on the fact that reading is an experience, the market certainly bears witness too the fact that e-books can't beat paperbacks when it comes to creating that experience. With the advent of technology it has been well proved that the world is in a stage where it wants to unwind and strive towards having rich offline experiences. Bringing these points together is what brought BookWagon to existence.</p>
									</div>
								</div>
							</div><!--Cart End-->

						</div><!--FAQ (Accordion) End-->
					</div>

				</div>
			</div>
		</div>
		<!-- faq Page End -->
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
												<p><span class="label">Address:</span><span class="text">Sg Palya ,Hosur Road,karnataka,Bangalore, India</span></p>
												<p><span class="label">Phone:</span><span class="text">9887456215</span></p>
												<p><span class="label">Email:</span><span class="text">suport@bookswagon.com</span></p>
										</div>
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
