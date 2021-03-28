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
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							<li class="breadcrumb-item active">My Account</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<div class="page-section inner-page-sec-padding">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<!-- My Account Tab Menu Start -->
							<div class="col-lg-3 col-12">
								<div class="myaccount-tab-menu nav" role="tablist">
									<a href="#dashboad" class="active" data-toggle="tab"><i
											class="fas fa-tachometer-alt"></i>
										Dashboard</a>
									<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
									<a href="#download" data-toggle="tab"><i class="fas fa-download"></i> Download</a>
									<a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
										Payment
										Method</a>
									<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
										address</a>
									<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
										Details</a>
									<a href="login-register.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</div>
							<!-- My Account Tab Menu End -->
							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-12 mt--30 mt-lg--0">
								<div class="tab-content" id="myaccountContent">
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
										<div class="myaccount-content">
											<h3>Dashboard</h3>
											<div class="welcome mb-20">
												<p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni
														!</strong><a href="login-register.php" class="logout">
														Logout</a>)</p>
											</div>
											<p class="mb-0">From your account dashboard. you can easily check &amp; view
												your
												recent orders, manage your shipping and billing addresses and edit your
												password and account details.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="orders" role="tabpanel">
										<div class="myaccount-content">
											<h3>Orders</h3>
											<div class="myaccount-table table-responsive text-center">
												<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>No</th>
															<th>Name</th>
															<th>Date</th>
															<th>Status</th>
															<th>Total</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Mostarizing Oil</td>
															<td>Aug 22, 2018</td>
															<td>Pending</td>
															<td>$45</td>
															<td><a href="cart.php" class="btn">View</a></td>
														</tr>
														<tr>
															<td>2</td>
															<td>Katopeno Altuni</td>
															<td>July 22, 2018</td>
															<td>Approved</td>
															<td>$100</td>
															<td><a href="cart.php" class="btn">View</a></td>
														</tr>
														<tr>
															<td>3</td>
															<td>Murikhete Paris</td>
															<td>June 12, 2017</td>
															<td>On Hold</td>
															<td>$99</td>
															<td><a href="cart.php" class="btn">View</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="download" role="tabpanel">
										<div class="myaccount-content">
											<h3>Downloads</h3>
											<div class="myaccount-table table-responsive text-center">
												<table class="table table-bordered">
													<thead class="thead-light">
														<tr>
															<th>Product</th>
															<th>Date</th>
															<th>Expire</th>
															<th>Download</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Mostarizing Oil</td>
															<td>Aug 22, 2018</td>
															<td>Yes</td>
															<td><a href="#" class="btn">Download File</a></td>
														</tr>
														<tr>
															<td>Katopeno Altuni</td>
															<td>Sep 12, 2018</td>
															<td>Never</td>
															<td><a href="#" class="btn">Download File</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="payment-method" role="tabpanel">
										<div class="myaccount-content">
											<h3>Payment Method</h3>
											<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="address-edit" role="tabpanel">
										<div class="myaccount-content">
											<h3>Billing Address</h3>
											<address>
												<p><strong>Alex Tuntuni</strong></p>
												<p>1355 Market St, Suite 900 <br>
													San Francisco, CA 94103</p>
												<p>Mobile: (123) 456-7890</p>
											</address>
											<a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
												Address</a>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="account-info" role="tabpanel">
										<div class="myaccount-content">
											<h3>Account Details</h3>
											<div class="account-details-form">
												<form action="#">
													<div class="row">
														<div class="col-lg-6 col-12  mb--30">
															<input id="first-name" placeholder="First Name" type="text">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="last-name" placeholder="Last Name" type="text">
														</div>
														<div class="col-12  mb--30">
															<input id="display-name" placeholder="Display Name"
																type="text">
														</div>
														<div class="col-12  mb--30">
															<input id="email" placeholder="Email Address" type="email">
														</div>
														<div class="col-12  mb--30">
															<h4>Password change</h4>
														</div>
														<div class="col-12  mb--30">
															<input id="current-pwd" placeholder="Current Password"
																type="password">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="new-pwd" placeholder="New Password"
																type="password">
														</div>
														<div class="col-lg-6 col-12  mb--30">
															<input id="confirm-pwd" placeholder="Confirm Password"
																type="password">
														</div>
														<div class="col-12">
															<button class="btn btn--primary">Save Changes</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- Single Tab Content End -->
								</div>
							</div>
							<!-- My Account Tab Content End -->
						</div>
					</div>
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
