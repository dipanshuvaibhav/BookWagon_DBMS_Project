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
												<!-- Support button removed -->
										</div>
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
																						</li>
															<!-- Pages -->
															<li class="menu-item has-children">
																	<a href="javascript:void(0)">Pages <i
																					class="fas fa-chevron-down dropdown-arrow"></i></a>
																	<ul class="sub-menu">
																			<li><a href="cart.php">Cart</a></li>
																			<li><a href="checkout.php">Checkout</a></li>
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
							<li class="breadcrumb-item active">Shop</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>

		<main class="inner-page-sec-padding-bottom">
			<!-- adding success bar if item added to cart -->
			<div id="message">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9 order-lg-2">
						<div class="shop-toolbar with-sidebar mb--30">
							<div class="row align-items-center">
								<div class="col-lg-2 col-md-2 col-sm-6">
									<!-- Product View Mode -->
									<div class="product-view-mode">
										<a href="#" class="sorting-btn active" data-target="grid"><i
												class="fas fa-th"></i></a>
										<a href="#" class="sorting-btn" data-target="grid-four">
											<span class="grid-four-icon">
												<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
											</span>
										</a>
									</div>
								</div>
								<div class="col-xl-4 col-md-4 col-sm-6  mt--10 mt-sm--0">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
								</div>
							</div>
						</div>
						<div class="shop-toolbar d-none">
							<div class="row align-items-center">
								<div class="col-lg-2 col-md-2 col-sm-6">
									<!-- Product View Mode -->
									<div class="product-view-mode">
										<a href="#" class="sorting-btn active" data-target="grid"><i
												class="fas fa-th"></i></a>
										<a href="#" class="sorting-btn" data-target="grid-four">
											<span class="grid-four-icon">
												<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
							<?php
								include 'config.php';

								$stmt = $conn->prepare('SELECT * FROM heroku_adaaf59afa8e08a.product;');
								$stmt->execute();
								$result = $stmt->get_result();
								while($row = $result->fetch_assoc()):
							?>
							<div class="col-lg-4 col-sm-6">
								<div class="product-card">
									<div class="product-grid-content">
										<div class="product-card--body">
											<div class="card-image">
												<!-- taking image from database -->
												<img src="<?= $row['p_image'] ?>" alt="">
												<div class="hover-contents">
													<a href="product-details.php" class="hover-image">
														<img src="<?= $row['p_image'] ?>" alt="">
													</a>
													<div class="hover-btns">
														<!-- cart button -->
														<form class="form-submit" action="" >
															<input type="hidden" class="pid" value="<?= $row['p_id']?>">
															<input type="hidden" class="p_name" value="<?= $row['p_name']?>">
															<input type="hidden" class="p_price" value="<?= $row['p_price']?>">
															<input type="hidden" class="p_image" value="<?= $row['p_image']?>">
															<input type="hidden" class="p_code" value="<?= $row['p_code']?>">
															<button  class="single-btn addItemButton"><i class="fas fa-shopping-basket "></i></button>
														</form>

														<!-- wishlist button -->
														<!-- <a href="wishlist.php" class="single-btn">
															<i class="fas fa-heart"></i>
														</a> -->
													</div>
												</div>
												<div class="product-header">
													<a href="" class="author">
														<!-- Deep -->
													</a>
													<h3><a href="product-details.php"><?= $row['p_name']?></a></h3>
												</div>
											</div>
											<div class="price-block">
												<span class="price">₹<?= $row['p_price']?></span>
												<del class="price-old">₹151.20</del>
												<span class="price-discount">-₹51.20</span>
											</div>
										</div>
									</div>
									<!-- <div class="product-list-content">
										<div class="card-image">
											<img src="image/products/product-3.jpg" alt="">
										</div>
										<div class="product-card--body">
											<div class="product-header">
												<a href="" class="author">
													Gpple
												</a>
												<h3><a href="product-details.php" tabindex="0">Qpple cPad with Retina
														Display MD510LL/A</a></h3>
											</div>
											<article>
												<h2 class="sr-only">Card List Article</h2>
												<p>More room to move. With 80GB or 160GB of storage and up to 40 hours
													of battery life, the new iPod classic lets you enjoy
													up to 40,000 songs or..</p>
											</article>
											<div class="price-block">
												<span class="price">₹51.20</span>
												<del class="price-old">₹51.20</del>
												<span class="price-discount">20%</span>
											</div>
											<div class="rating-block">
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star star_on"></span>
												<span class="fas fa-star "></span>
											</div>
											<div class="btn-block">
												<a href="" class="btn btn-outlined">Add To Cart</a>
												<a href="" class="card-link"><i class="fas fa-heart"></i> Add To
													Wishlist</a>
												<a href="" class="card-link"><i class="fas fa-random"></i> Add To
													Cart</a>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						<?php endwhile;?>
						</div>
						<!-- Pagination Block -->
						<!-- <div class="row pt--30">
							<div class="col-md-12">
								<div class="pagination-block">
									<ul class="pagination-btns flex-center">
										<li><a href="" class="single-btn prev-btn ">|<i
													class="zmdi zmdi-chevron-left"></i> </a></li>
										<li><a href="" class="single-btn prev-btn "><i
													class="zmdi zmdi-chevron-left"></i> </a></li>
										<li class="active"><a href="" class="single-btn">1</a></li>
										<li><a href="" class="single-btn">2</a></li>
										<li><a href="" class="single-btn">3</a></li>
										<li><a href="" class="single-btn">4</a></li>
										<li><a href="" class="single-btn next-btn"><i
													class="zmdi zmdi-chevron-right"></i></a></li>
										<li><a href="" class="single-btn next-btn"><i
													class="zmdi zmdi-chevron-right"></i>|</a></li>
									</ul>
								</div>
							</div>
						</div> -->
						<!-- Modal -->
						<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
							aria-labelledby="quickModal" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
										aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="product-details-modal">
										<div class="row">
											<div class="col-lg-5">
												<!-- Product Details Slider Big Image-->
												<div class="product-details-slider sb-slick-slider arrow-type-two"
													data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
													<div class="single-slide">
														<img src="image/products/product-details-1.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-2.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-3.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-4.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-5.jpg" alt="">
													</div>
												</div>
												<!-- Product Details Slider Nav -->
												<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
													data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
													<div class="single-slide">
														<img src="image/products/product-details-1.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-2.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-3.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-4.jpg" alt="">
													</div>
													<div class="single-slide">
														<img src="image/products/product-details-5.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="col-lg-7 mt--30 mt-lg--30">
												<div class="product-details-info pl-lg--30 ">
													<p class="tag-block">Tags: <a href="#">Movado</a>, <a
															href="#">Omega</a></p>
													<h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
													<ul class="list-unstyled">
														<li>Ex Tax: <span class="list-value"> ₹60.24</span></li>
														<li>Brands: <a href="#" class="list-value font-weight-bold">
																Canon</a></li>
														<li>Product Code: <span class="list-value"> model1</span></li>
														<li>Reward Points: <span class="list-value"> 200</span></li>
														<li>Availability: <span class="list-value"> In Stock</span></li>
													</ul>
													<div class="price-block">
														<span class="price-new">₹73.79</span>
														<del class="price-old">₹91.86</del>
													</div>
													<div class="rating-widget">
														<div class="rating-block">
															<span class="fas fa-star star_on"></span>
															<span class="fas fa-star star_on"></span>
															<span class="fas fa-star star_on"></span>
															<span class="fas fa-star star_on"></span>
															<span class="fas fa-star "></span>
														</div>
														<div class="review-widget">
															<a href="">(1 Reviews)</a> <span>|</span>
															<a href="">Write a review</a>
														</div>
													</div>
													<article class="product-details-article">
														<h4 class="sr-only">Product Summery</h4>
														<p>Long printed dress with thin adjustable straps. V-neckline
															and wiring under the Dust with ruffles at the bottom
															of the
															dress.</p>
													</article>
													<div class="add-to-cart-row">
														<div class="count-input-block">
															<span class="widget-label">Qty</span>
															<input type="number" class="form-control text-center"
																value="1">
														</div>
														<div class="add-cart-btn">
															<a href="" class="btn btn-outlined--primary"><span
																	class="plus-icon">+</span>Add to Cart</a>
														</div>
													</div>
													<div class="compare-wishlist-row">
														<a href="" class="add-link"><i class="fas fa-heart"></i>Add to
															Wish List</a>
														<a href="" class="add-link"><i class="fas fa-random"></i>Add to
															Compare</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<div class="widget-social-share">
											<span class="widget-label">Share:</span>
											<div class="modal-social-share">
												<a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
												<a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
												<a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3  mt--40 mt-lg--0">
						<div class="inner-page-sidebar">

						</div>
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
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- <script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script> -->

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
