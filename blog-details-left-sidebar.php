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
												<form action="searchpage.php" method= "post">
														<input type="text" name="search" placeholder="Search entire store here">
														<button type="submit" name = "search1" class="btn btn-outlined">Search</button>
                                                    								</form>
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
							<li class="breadcrumb-item active">Blog Details</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<section class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 order-lg-2 mb--40 mb-lg--0">
						<div class="blog-post post-details mb--50">
							<div class="blog-image">
								<img src="image/others/blog-img-big-1.jpg

            " alt="">
							</div>
							<div class="blog-content mt--30">
								<header>
									<h3 class="blog-title"> How BLOG TITLE Made Me A Better Salesperson</h3>
									<div class="post-meta">
										<span class="post-author">
											<i class="fas fa-user"></i>
											<span class="text-gray">Posted by : </span>
											admin
										</span>
										<span class="post-separator">|</span>
										<span class="post-date">
											<i class="far fa-calendar-alt"></i>
											<span class="text-gray">On : </span>
											March 10, 2015
										</span>
									</div>
								</header>
								<article>
									<h3 class="d-none sr-only">blob-article</h3>
									<p class="p-0">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
										ex. Aenean posuere
										libero eu augue condimentum
										rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus
										pharetra, bibendum massa
										nec, fermentum
										odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut
										lectus fermentum
										eleifend. Pellentesque
										faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
									<blockquote>
										<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In
											venenatis elit ac
											ultrices convallis.
											Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper
											sit amet ligula ut
											eleifend. Proin dictum
											tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque
											scelerisque.</p>
									</blockquote>
									<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam
										tempor, sed efficitur ex
										ultrices.
										Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh.
										Phasellus nec lacus id
										arcu facilisis
										elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio,
										nec iaculis lacus sem
										non lorem. Duis
										suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend
										odio, ac fringilla mi
										vehicula nec. Nunc
										vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus
										consectetur, placerat
										suscipit justo
										dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
									<p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
										vitae lorem non
										mollis. Praesent
										pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl,
										accumsan placerat justo
										ultricies vel.
										Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum
										velit. Curabitur sagittis
										quam quis
										consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget
										neque. Nunc ante quam,
										luctus et neque a,
										interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula
										quam. Suspendisse quis eros
										cursus, viverra
										urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra
										facilisis nunc.
										Curabitur vitae orci id
										nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
								</article>
								<footer class="blog-meta">
									<div> <a href="#">3 comments </a> / TAGS: <a href="#">fashion</a>, <a
											href="#">t-shirt</a>, <a href="#">white</a></div>
								</footer>
							</div>
						</div>
						<div class="share-block mb--50">
							<h3>Share Now</h3>
							<div class="social-links  justify-content-center  mt--10">
								<a href="#" class="single-social social-rounded"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-twitter"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-pinterest-p"></i></a>
								<a href="#" class="single-social social-rounded"><i
										class="fab fa-google-plus-g"></i></a>
								<a href="#" class="single-social social-rounded"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
						<div class="comment-block-wrapper mb--50">
							<h3>3 Comments</h3>
							<div class="single-comment">
								<div class="comment-avatar">
									<img src="image/icon/author-logo.png" alt="">
								</div>
								<div class="comment-text">
									<h5 class="author"> <a href="#"> Author</a></h5>
									<span class="time">October 8, 2014 at 12:38 pm</span>
									<p>Ame No Parade</p>
								</div>
								<a href="#" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>
							</div>
							<div class="single-comment">
								<div class="comment-avatar">
									<img src="image/icon/author-logo.png" alt="">
								</div>
								<div class="comment-text">
									<h5 class="author"> <a href="#">Jack</a></h5>
									<span class="time">January 19, 2018 at 3:00 am</span>
									<p>just a nice post</p>
								</div>
								<a href="#" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>
							</div>
							<div class="single-comment">
								<div class="comment-avatar">
									<img src="image/icon/author-logo.png" alt="">
								</div>
								<div class="comment-text">
									<h5 class="author"> <a href="#">Dexter</a></h5>
									<span class="time">august 31, 2021 at 3:30 am</span>
									<p>Awesome Post </p>
								</div>
								<a href="#" class="btn btn-outlined--primary btn-rounded reply-btn">Reply</a>
							</div>
						</div>
						<div class="replay-form-wrapper">
							<h3 class="mt-0">LEAVE A REPLY</h3>
							<p>Your email address will not be published. Required fields are marked *</p>
							<form action="./" class="blog-form">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="message">Comment</label>
											<textarea name="message" id="message" cols="30" rows="10"
												class="form-control"></textarea>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="name">Name *</label>
											<input type="text" id="name" class="form-control">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="email">Email *</label>
											<input type="text" id="email" class="form-control">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label for="website">Website</label>
											<input type="text" id="website" class="form-control">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="submit-btn">
											<a href="#" class="btn btn-black">Post Comment</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="inner-page-sidebar">
							<div class="single-block">
								<h2 class="sidebar-title mb--30">Search</h2>
								<div class="site-mini-search">
									<input type="text" placeholder="Search">
									<button><i class="fas fa-search"></i></button>
								</div>
							</div>
							<div class="single-block">
								<h2 class="sidebar-title mb--30">BLOG ARCHIVES</h2>
								<ul class="sidebar-list mb--30">
									<li><a href="#"> March 2015 (1)</a></li>
									<li><a href="#">December 2014 (3)</a></li>
									<li> <a href="#">November 2014 (4)</a></li>
									<li><a href="#">September 2014 (1)</a></li>
									<li><a href="#">August 2014 (1)</a></li>
								</ul>
							</div>
							<div class="single-block ">
								<h2 class="sidebar-title mb--30">RECENT POSTS</h2>
								<ul class="sidebar-list">
									<li><a href="#"> Blog image post</a></li>
									<li><a href="#">Post with Gallery</a></li>
									<li> <a href="#">Post with Audio</a></li>
									<li><a href="#">Post with Video</a></li>
									<li><a href="#">Maecenas ultricies</a></li>
								</ul>
							</div>
							<!-- <div class="single-block ">
								<h2 class="sidebar-title mb--30">Tags</h2>
								<ul class="sidebar-tag-list">
									<li><a href="#"> Chilled</a></li>
									<li><a href="#">Dark</a></li>
									<li> <a href="#">Euro</a></li>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Food</a></li>
									<li><a href="#">Hardware</a></li>
									<li><a href="#">Hat</a></li>
									<li><a href="#">Hipster</a></li>
									<li><a href="#">Holidays</a></li>
									<li><a href="#">Light</a></li>
									<li><a href="#">Mac</a></li>
									<li><a href="#">Place</a></li>
									<li><a href="#">T-Shirt</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#">Video-2</a></li>
									<li><a href="#">White</a></li>
								</ul>
							</div> -->
							<!-- Promo Block -->
							<div class="single-block">
								<a href="" class="promo-image sidebar">
									<img src="image/others/home-side-promo.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
