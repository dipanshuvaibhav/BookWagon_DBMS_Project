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
							<li class="breadcrumb-item active">Blog</li>
						</ol>
					</nav>
				</div>
			</div>

			<div class="flex-lg-right container">
			<?php
				if(isset($_SESSION['id'])){
					echo  '<a href="blogpost.php" class="btn btn--primary">Add Blog</a>';
				} else {
				 	echo '<a href="login-register.php" class="btn btn--primary">Login to add a blog</a>';
					}
				?>

			</div>
		</section>
		<div style="padding: 39px;">

		</div>
		<section class="inner-page-sec-padding-bottom">
			<div class="container">
				<div class="blog-list-cards">
				<?php
								include 'config.php';

								$stmt = $conn->prepare('SELECT * FROM heroku_adaaf59afa8e08a.posts;');
								$stmt->execute();
								$result = $stmt->get_result();
								while($row = $result->fetch_assoc()):
				?>
					<div class="blog-card card-style-list">
						<div class="row">
							<div class="col-md-4">

									<img src="<?= $row['post_img']?>" alt="" style="max-width: 250px;max-height: 233px;">

							</div>
							<div class="col-md-6">
								<div class="card-content">
									<h3 class="title"><?= $row['title']; ?></h3>
									<p class="post-meta"><span><?= $row['created_at'];?> </span> | By <?= $row['author']; ?> </p>
									<article>
										<h2 class="sr-only">
											Blog Article
										</h2>
										<p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;"><?= $row['content']; ?></p>
										<form class="" action="blog-details.php" method="post">
											<input type="hidden" name="postId" value="<?= $row['post_id'];?>">
											<button action="submit" class=" btn--primary " >Read More</button>

										</form>

									</article>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile;?>
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
