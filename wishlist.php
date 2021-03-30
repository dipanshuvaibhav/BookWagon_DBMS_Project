<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BookWagon - Why buy when you can rent</title>
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
																<div class="cart-block">
																		<div class="cart-total">
																				<span class="text-number">
																						1
																				</span>
																				<span class="text-item">
																						Shopping Cart
																				</span>
																				<span class="price">
																						£0.00
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
																														Astro Zoom AZ421 16 MP</a>
																										</h3>
																										<p class="price"><span class="qty">1 ×</span> £87.34</p>
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
<<<<<<< Updated upstream
=======
												</li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Business & Money</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Calendars</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Children's Books</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item has-children"><a href="#">Comics</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item"><a href="#">Perfomance Filters</a></li>
										<li class="cat-item has-children"><a href="#">Cookbooks</a>
											<ul class="sub-menu">
												<li><a href="">Brake Tools</a></li>
												<li><a href="">Driveshafts</a></li>
												<li><a href="">Emergency Brake</a></li>
												<li><a href="">Spools</a></li>
											</ul>
										</li>
										<li class="cat-item "><a href="#">Accessories</a></li>
										<li class="cat-item "><a href="#">Education</a></li>
										<li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
										<li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
												Categories</a></li>
									</ul>
								</div>
							</nav>
						</div>-->
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
										<a href="login-register.html" class="font-weight-bold">Login</a> <br>
										<span>or</span><a href="login-register.html">Register</a>
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
													<a href="product-details.html" class="image">
														<img src="image/products/cart-product-1.jpg" alt="">
													</a>
													<div class="content">
														<h3 class="title"><a href="product-details.html">Kodak PIXPRO
																Astro Zoom AZ421 16 MP</a></h3>
														<p class="price"><span class="qty">1 ×</span> ₹87.34</p>
														<button class="cross-btn"><i class="fas fa-times"></i></button>
													</div>
												</div>
											</div>
											<div class=" single-cart-block ">
												<div class="btn-block">
													<a href="cart.html" class="btn">View Cart <i
															class="fas fa-chevron-right"></i></a>
													<a href="checkout.html" class="btn btn--primary">Check Out <i
															class="fas fa-chevron-right"></i></a>
												</div>
>>>>>>> Stashed changes
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
						<a href="index.html" class="site-brand">
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
		<section class="breadcrumb-section">
			<h2 class="sr-only">Site Breadcrumb</h2>
			<div class="container">
				<div class="breadcrumb-contents">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active">Wishlist</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Wishlist Page Start -->
		<div class="cart_area inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="./">
							<!-- Cart Table -->
							<div class="cart-table table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">Product</th>
											<th class="pro-price">Price</th>
											<th class="pro-quantity">Quantity</th>
											<th class="pro-subtotal">Total</th>
											<th class="pro-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-1.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
											<td class="pro-price"><span>$395.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$395.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-2.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Silacon Glasses</a></td>
											<td class="pro-price"><span>$275.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$550.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-3.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Easin Glasses</a></td>
											<td class="pro-price"><span>$295.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$295.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
										<tr>
											<td class="pro-thumbnail"><a href="#"><img
														src="image/products/product-4.jpg" alt="Product"></a></td>
											<td class="pro-title"><a href="#">Macrox Glasses</a></td>
											<td class="pro-price"><span>$220.00</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1">
													</div>
												</div>
											</td>
											<td class="pro-subtotal"><span>$220.00</span></td>
											<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Cart Page End -->
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
		<h2 class="sr-only">Brand Slider</h2>
		<div class="container">
			<div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-3.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-4.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-5.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-6.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
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
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
