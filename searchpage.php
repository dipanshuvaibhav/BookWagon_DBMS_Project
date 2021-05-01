
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
					
						<div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
							<?php
								include 'config.php';
                                				$str= $_POST['search'];
								$stmt = $conn->prepare("SELECT * FROM heroku_adaaf59afa8e08a.product WHERE p_name LIKE '%$str%';");
								$stmt->execute();
								$result = $stmt->get_result();
								if(mysqli_num_rows($result)<1){
									echo '<h3>No result matches your search</h3>';}
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
													<a href="" class="hover-image">
														<img src="<?= $row['p_image'] ?>" alt="">
													</a>
													<div class="hover-btns">
														<!-- cart button -->

														<form class="form-submit" action="" >
															<input type="hidden" class="pid" value="<?= $row['p_id']?>">
															<input type="hidden" class="usr_id"  value="<?=$_SESSION['id']?>">
															<input type="hidden" class="p_name" value="<?= $row['p_name']?>">
															<input type="hidden" class="p_price" value="<?= $row['p_price']?>">
															<input type="hidden" class="p_image" value="<?= $row['p_image']?>">
															<input type="hidden" class="producer_id" value="<?= $row['producer_id']?>">
															<?php
															if(isset($_SESSION['id'])){
															echo  '<button  class="single-btn addItemButton"><i class="fas fa-shopping-basket "></i></button>';
															} else {
															echo '<p>Please login to add to cart.</p>';
															}
															?>
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
													<h3><a href=""><?= $row['p_name']?></a></h3>
												</div>
											</div>
											<div class="price-block">
												<span class="price">₹<?= $row['p_price']?></span>
												<del class="price-old">₹151.20</del>
												<span class="price-discount">-₹51.20</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						<?php endwhile;?>
						</div>
					</div>
				</div>
					</main>
					</div>
						<!-- Pagination Block -->

						<!-- Modal -->

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
				var usr_id=$form.find(".usr_id").val();
				var p_name = $form.find(".p_name").val();
				var p_price = $form.find(".p_price").val();
				var p_image = $form.find(".p_image").val();
				var producer_id = $form.find(".producer_id").val();
				$.ajax({
					url: 'action.php',
					method: 'post',
					data: {pid:pid,usr_id:usr_id,p_name:p_name,p_price:p_price,p_image:p_image,producer_id:producer_id},
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

