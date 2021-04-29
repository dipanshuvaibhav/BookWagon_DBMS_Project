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
									<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
										Details</a>
									<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
											<!-- <div class="welcome mb-20">
												<p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni
														!</strong><a href="login-register.php" class="logout">
														Logout</a>)</p>
											</div>
											<p class="mb-0">From your account dashboard. you can easily check &amp; view
												your
												recent orders, manage your shipping and billing addresses and edit your
												password and account details.</p> -->
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="orders" role="tabpanel">
										<div class="myaccount-content">
											<h3>Orders</h3>

                      <div class="mb-20">
                        <?php
                          include 'config.php';
                          $user = $_SESSION['id'];
                          $stmt = $conn->prepare("SELECT * FROM heroku_adaaf59afa8e08a.order where customer_id=?");
                          $stmt->bind_param("i",$user);
                          $stmt->execute();
                          $result = $stmt->get_result();
                          while($row = $result->fetch_assoc()):
                        ?>
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th class="pro-title">Customer name</th>
                                          <!-- <th class="pro-title"></th> -->
                                          <th class="pro-title">phone</th>
                                          <th class="pro-title">Address</th>
                                          <!-- <th class="pro-title">Mode of payment</th> -->
                                          <th class="pro-title">products</th>
                                          <th class="pro-title">amount paid</th>
                                          <th class="pro-title">Date of Purchase</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>

                                          <td class="pro-title"><?=$row['o_name']?></td>
                                          <td class="pro-title"><?=$row['o_phone']?></td>
                                          <td class="pro-title"><?=$row['o_address']?></td>
                                          <td class="pro-title"><?=$row['o_products']?></td>
                                          <td class="pro-title"><?=$row['o_amt_paid']?></td>
                                          <td class="pro-title"><?=$row['o_date']?></td>
                                          <!-- <td class="pro-title">'Pitch Perfect(1), Batman(1), Fantastic Comics(1), The Beloved Wild(1)'</td>
                                          <td class="pro-title">400</td> -->

                                      </tr>
                                  </tbody>
                              </table>
                                  <?php endwhile; ?>
                          </div>

                      </div>
										</div>
									</div>
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->

									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->

									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<!-- <div class="tab-pane fade" id="address-edit" role="tabpanel">
										<div class="myaccount-content">
											<h3>Billing Address</h3>
											<a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
												Address</a>
										</div>
									</div> -->
									<!-- Single Tab Content End -->
									<!-- Single Tab Content Start -->
									<div class="tab-pane fade" id="account-info" role="tabpanel">
										<div class="myaccount-content">
											<h3>Account Details</h3>
											<div class="account-details-form">
												<form action="#">
													<div class="row">
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
						<li><a href="contact.php">Contact us</a></li>

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
