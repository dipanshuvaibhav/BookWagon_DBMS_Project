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
		<div class="site-header header-2 mb--20 d-none d-lg-block">
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
									<div class="login-block">
										<a href="login-register.php" class="font-weight-bold">Login</a> <br>
										<span>or</span><a href="login-register.php">Register</a>
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
																Astro Zoom AZ421 16 MP</a></h3>
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
								<!-- @include('menu.htm') -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom bg-primary">
					<div class="container">
							<div class="row align-items-center">
									<div class="col-lg-3">
											<nav class="category-nav  primary-nav show">
													<div>
															<a href="javascript:void(0)" class="category-trigger"><i
																			class="fa fa-bars"></i>Browse
																	categories</a>
															<ul class="category-menu">
																	<li class="cat-item has-children">
																			<a href="#">Arts & Photography</a>

																	</li>
																	<li class="cat-item has-children mega-menu"><a href="#">Biographies</a>

																	</li>
																	<li class="cat-item has-children"><a href="#">Business & Money</a>

																	</li>
																	<li class="cat-item has-children"><a href="#">Calendars</a>

																	</li>
																	<li class="cat-item has-children"><a href="#">Children's Books</a>

																	</li>
																	<li class="cat-item has-children"><a href="#">Comics</a>

																	</li>
																	<!-- <li class="cat-item"><a href="#">Perfomance Filters</a></li> -->
																	<li class="cat-item has-children"><a href="#">Cookbooks</a>
																			<!-- <ul class="sub-menu">
																					<li><a href="">Brake Tools</a></li>
																					<li><a href="">Driveshafts</a></li>
																					<li><a href="">Emergency Brake</a></li>
																					<li><a href="">Spools</a></li>
																			</ul> -->
																	</li>
																	<li class="cat-item hidden-menu-item"><a href="#">Accessories</a></li>
																	<li class="cat-item hidden-menu-item"><a href="#">Education</a></li>
																	<li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
																	<li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
																					Categories</a></li>
															</ul>
													</div>
											</nav>
									</div>
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
															<li class="menu-item has-children">
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
															<li class="menu-item has-children mega-menu">
																	<a href="javascript:void(0)">shop <i
																					class="fas fa-chevron-down dropdown-arrow"></i></a>
																	<ul class="sub-menu four-column">
																			<li class="cus-col-25">
																					<h3 class="menu-title"><a href="javascript:void(0)">Shop</a></h3>
																					<ul class="mega-single-block">
																							<!-- <li><a href="shop-grid.php">Fullwidth</a></li> -->
																							<li><a href="shop-grid-left-sidebar.php">Shop</a></li>
																							<!-- <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li> -->
																					</ul>
																			</li>
																			<!-- <li class="cus-col-25">
																					<h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
																					<ul class="mega-single-block">
																							 <li><a href="shop-list.php">Fullwidth</a></li>
																							<li><a href="shop-list-left-sidebar.php">List</a></li>
																							<li><a href="shop-list-right-sidebar.php">Right Sidebar</a></li>
																					</ul>
																			</li> -->
																			<li class="cus-col-25">
																					<h3 class="menu-title"> <a href="javascript:void(0)">Product Details
																									</a></h3>
																					<ul class="mega-single-block">
																							<li><a href="product-details.php">Product Details Page</a></li>
																							<!-- <li><a href="product-details-affiliate.php">Product Details
																											Affiliate</a></li>
																							<li><a href="product-details-group.php">Product Details Group</a>
																							</li>
																							<li><a href="product-details-variable.php">Product Details
																											Variables</a></li> -->
																					</ul>
																			</li>
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
																	</ul>
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
															<li class="menu-item has-children mega-menu">
																	<a href="javascript:void(0)">Blog <i
																					class="fas fa-chevron-down dropdown-arrow"></i></a>
																	<ul class="sub-menu three-column">
																			<li class="cus-col-33">
																					<h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
																					<ul class="mega-single-block">
																							<!-- <li><a href="blog.php">Full Widh (Default)</a></li> -->
																							<li><a href="blog-left-sidebar.php">left Sidebar</a></li>
																							<!-- <li><a href="blog-right-sidebar.php">Right Sidebar</a></li> -->
																					</ul>
																			</li>
																			<li class="cus-col-33">
																					<h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
																					<ul class="mega-single-block">
																							<!-- <li><a href="blog-list.php">Full Widh (Default)</a></li> -->
																							<li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
																							<!-- <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li> -->
																					</ul>
																			</li>
																			<li class="cus-col-33">
																					<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a>
																					</h3>
																					<ul class="mega-single-block">
																							<!-- <li><a href="blog-details.php">Image Format (Default)</a></li> -->
																							<li><a href="blog-details-gallery.php">Gallery</a></li>
																							<!-- <li><a href="blog-details-audio.php">Audio Format</a></li>
																							<li><a href="blog-details-video.php">Video Format</a></li> -->
																							<li><a href="blog-details-left-sidebar.php">Blog</a></li>
																					</ul>
																			</li>
																	</ul>
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
												<ul class="main-menu menu-right ">
														<li class="menu-item has-children">
																<a href="index.php">Home</a>

														</li>
														<!-- Shop -->
														<li class="menu-item has-children mega-menu">
																<a href="javascript:void(0)">shop <i
																				class="fas fa-chevron-down dropdown-arrow"></i></a>
																<ul class="sub-menu four-column">
																		<li class="cus-col-25">
																				<h3 class="menu-title"><a href="javascript:void(0)">Shop</a></h3>
																				<ul class="mega-single-block">
																						<!-- <li><a href="shop-grid.php">Fullwidth</a></li> -->
																						<li><a href="shop-grid-left-sidebar.php">Shop</a></li>
																						<!-- <li><a href="shop-grid-right-sidebar.php">Right Sidebar</a></li> -->
																				</ul>
																		</li>

																		<li class="cus-col-25">
																				<h3 class="menu-title"> <a href="javascript:void(0)">Product Details
																								</a></h3>
																				<ul class="mega-single-block">
																						<li><a href="product-details.php">Product Details Page</a></li>

																				</ul>
																		</li>

																</ul>
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
																		<li><a href="contact.php">contact</a></li>
																</ul>
														</li>
														<!-- Blog -->
														<li class="menu-item has-children mega-menu">
																<a href="javascript:void(0)">Blog <i
																				class="fas fa-chevron-down dropdown-arrow"></i></a>
																<ul class="sub-menu three-column">
																		<li class="cus-col-33">
																				<h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
																				<ul class="mega-single-block">
																						<!-- <li><a href="blog.php">Full Widh (Default)</a></li> -->
																						<li><a href="blog-left-sidebar.php">left Sidebar</a></li>
																						<!-- <li><a href="blog-right-sidebar.php">Right Sidebar</a></li> -->
																				</ul>
																		</li>
																		<li class="cus-col-33">
																				<h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
																				<ul class="mega-single-block">
																						<!-- <li><a href="blog-list.php">Full Widh (Default)</a></li> -->
																						<li><a href="blog-list-left-sidebar.php">left Sidebar</a></li>
																						<!-- <li><a href="blog-list-right-sidebar.php">Right Sidebar</a></li> -->
																				</ul>
																		</li>
																		<li class="cus-col-33">
																				<h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
																				<ul class="mega-single-block">
																						<!-- <li><a href="blog-details.php">Image Format (Default)</a></li> -->
																						<li><a href="blog-details-gallery.php">Gallery Format</a></li>
																						<!-- <li><a href="blog-details-audio.php">Audio Format</a></li> -->
																						<!-- <li><a href="blog-details-video.php">Video Format</a></li> -->
																						<li><a href="blog-details-left-sidebar.php">left Sidebar</a></li>
																				</ul>
																		</li>
																</ul>
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
							<li class="breadcrumb-item active">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- Cart Page Start -->
		<main class="cart-page-main-block inner-page-sec-padding-bottom">
			<div class="cart_area cart-area-padding  ">
				<div class="container">
					<div class="page-section-title">
						<h1>Shopping Cart</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<form action="#" class="">
								<!-- Cart Table -->
								<div class="cart-table table-responsive mb--40">
									<table class="table">
										<!-- Head Row -->
										<thead>
											<tr>
												<th class="pro-remove"></th>
												<th class="pro-thumbnail">Image</th>
												<th class="pro-title">Product</th>
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<th class="pro-subtotal">Total</th>
											</tr>
										</thead>
										<tbody>
											<!-- Product Row -->
											<tr>
												<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td>
												<td class="pro-thumbnail"><a href="#"><img
															src="image/products/product-1.jpg" alt="Product"></a></td>
												<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
												<td class="pro-price"><span>$395.00</span></td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<div class="count-input-block">
															<input type="number" class="form-control text-center"
																value="1">
														</div>
													</div>
												</td>
												<td class="pro-subtotal"><span>$395.00</span></td>
											</tr>
											<!-- Product Row -->
											<tr>
												<td class="pro-remove"><a href="#"><i class="far fa-trash-alt"></i></a>
												</td>
												<td class="pro-thumbnail"><a href="#"><img
															src="image/products/product-2.jpg" alt="Product"></a></td>
												<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
												<td class="pro-price"><span>$395.00</span></td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<div class="count-input-block">
															<input type="number" class="form-control text-center"
																value="1">
														</div>
													</div>
												</td>
												<td class="pro-subtotal"><span>$395.00</span></td>
											</tr>
											<!-- Discount Row  -->
											<tr>
												<td colspan="6" class="actions">
													<div class="coupon-block">
														<div class="coupon-text">
															<label for="coupon_code">Coupon:</label>
															<input type="text" name="coupon_code" class="input-text"
																id="coupon_code" value="" placeholder="Coupon code">
														</div>
														<div class="coupon-btn">
															<input type="submit" class="btn btn-outlined"
																name="apply_coupon" value="Apply coupon">
														</div>
													</div>
													<div class="update-block text-right">
														<input type="submit" class="btn btn-outlined" name="update_cart"
															value="Update cart">
														<input type="hidden" id="_wpnonce" name="_wpnonce"
															value="05741b501f"><input type="hidden"
															name="_wp_http_referer" value="/petmark/cart/">
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-section-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb--30 mb-lg--0">
							<!-- slide Block 5 / Normal Slider -->
							<div class="cart-block-title">
								<h2>YOU MAY BE INTERESTED IN…</h2>
							</div>
							<div class="product-slider sb-slick-slider" data-slick-setting='{
							          "autoplay": true,
							          "autoplaySpeed": 8000,
							          "slidesToShow": 2
									  }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Lpple
											</span>
											<h3><a href="product-details.php">Revolutionize Your BOOK With These
													Easy-peasy Tips</a></h3>
										</div>
										<div class="product-card--body">
											<div class="card-image">
												<img src="image/products/product-10.jpg" alt="">
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
												<span class="price">£51.20</span>
												<del class="price-old">£51.20</del>
												<span class="price-discount">20%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Jpple
											</span>
											<h3><a href="product-details.php">Turn Your BOOK Into High Machine</a></h3>
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
												<span class="price">£51.20</span>
												<del class="price-old">£51.20</del>
												<span class="price-discount">20%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Wpple
											</span>
											<h3><a href="product-details.php">3 Ways Create Better BOOK With</a></h3>
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
												<span class="price">£51.20</span>
												<del class="price-old">£51.20</del>
												<span class="price-discount">20%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Epple
											</span>
											<h3><a href="product-details.php">What You Can Learn From Bill Gates</a>
											</h3>
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
												<span class="price">£51.20</span>
												<del class="price-old">£51.20</del>
												<span class="price-discount">20%</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-slide">
									<div class="product-card">
										<div class="product-header">
											<span class="author">
												Hpple
											</span>
											<h3><a href="product-details.php">Simple Things You To Save BOOK</a></h3>
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
												<span class="price">£51.20</span>
												<del class="price-old">£51.20</del>
												<span class="price-discount">20%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Cart Summary -->
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Cart Summary</span></h4>
									<p>Sub Total <span class="text-primary">$1250.00</span></p>
									<p>Shipping Cost <span class="text-primary">$00.00</span></p>
									<h2>Grand Total <span class="text-primary">$1250.00</span></h2>
								</div>
								<div class="cart-summary-button">
									<a href="checkout.php" class="checkout-btn c-btn btn--primary">Checkout</a>
									<button class="update-btn c-btn btn-outlined">Update Cart</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Cart Page End -->
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
