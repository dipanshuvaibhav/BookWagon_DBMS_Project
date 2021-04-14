<?php
session_start();
?>
<?php
require 'config.php';

$grand_total = 0;
$allItems='';
$items = array();
$usr_id= $_SESSION['id'];

$sql = "SELECT CONCAT(p_name, '(',c_qty,')') AS ItemQty , tot_price FROM heroku_adaaf59afa8e08a.cart WHERE cust_id=? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$usr_id);
$stmt->execute();
$result= $stmt->get_result();
while($row = $result->fetch_assoc()){
  $grand_total +=$row['tot_price'];
  $items[]=$row['ItemQty'];
}

$allItems = implode(", ",$items);
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
							<li class="breadcrumb-item active">Checkout</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Checkout Form s-->
						<div class="checkout-form">
							<div class="row row-40">
								<div class="col-12">
									<h1 class="quick-title">Checkout</h1>
									<!-- Slide Down Trigger  -->
									<div class="checkout-quick-box">
										<p><i class="far fa-sticky-note"></i>Returning customer? <a href="javascript:"
												class="slide-trigger" data-target="#quick-login">Click
												here to login</a></p>
									</div>
									<!-- Slide Down Blox ==> Login Box  -->
									<div class="checkout-slidedown-box" id="quick-login">
										<form action="login.php" method="post">
											<div class="quick-login-form">
												<p>If you have shopped with us before, please enter your details in the
													boxes below. If you are a new
													customer
													please
													proceed to the Billing & Shipping section.</p>
												<div class="form-group">
													<label for="email1">Email *</label>
													<input  type="email" id="email1" name = "email1" placeholder="Enter you email address here..." required>
												</div>
												<div class="form-group">
													<label for="password">Password *</label>
													<input  type="password" id="password" name = "password" placeholder="Enter your password" required>
												</div>
												<div class="form-group">
													<div class="d-flex align-items-center flex-wrap">
														<button type="submit" class="btn btn-outlined">Login</button>
														<div class="d-inline-flex align-items-center">
															<input type="checkbox" id="accept_terms" class="mb-0 mr-1" required>
															<label for="accept_terms" class="mb-0">I’ve read and accept
																the terms &amp; conditions</label>
														</div>
													</div>

												</div>
											</div>
										</form>
									</div>
<!-- added an extra div -->
                  <div id="order">
                  <div class="col-lg-5">
                   <div class="row">
                     <!-- Cart Total -->
                     <div class="col-12">
                       <div class="checkout-cart-total">
                         <h2 class="checkout-title">YOUR ORDER</h2>
                         <h4>Product(s):<span><?= $allItems; ?></span></h4>


                         <h4>Grand Total <span><?= $grand_total; ?></span></h4>


                       </div>
                     </div>
                   </div>
                 </div>
									<!-- coupon code -->
								<div class="col-lg-7 mb--20">
									<!-- Billing Address -->
									<div  class="mb-40">
										<h4 class="checkout-title">Shipping Address</h4>
										<div class="row">
                      <form  action="" method="post" id="placeOrder">
                        <input type="hidden" name="products" value="<?= $allItems; ?>">
                        <input type="hidden" name="$grand_total" value="<?= $grand_total; ?>">
											<div class="col-12 mb--20">
												<label>Name*</label>
												<input type="text" name="name" placeholder="Name" required>
											</div>
											<div class="col-12 mb--20">
												<label>Email Address*</label>
												<input type="email" name="email" placeholder="Email Address" required>
											</div>
											<div class="col-12 mb--20">
												<label>Phone no*</label>
												<input type="text" name="phone" placeholder="Phone number" required>
											</div>
											<div class="col-12 mb--20">
												<label>Address*</label>
												<textarea class="form-control " name="address" rows="3" cols="10" required></textarea>
											</div>
                      <input class="btn btn--primary w-100" type="submit" name="submit" value="Place Order">
                      </form>
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

                        <li><a href="">About Us</a></li>

                        <li><a href="contact.php">Contact us</a></li>
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

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script type="text/javascript">
		$(document).ready(function(){
      $("#placeOrder").submit(function(e){
        e.preventDefault();
        $.ajax({
          url:'action.php',
          method:'post',
          data: $('form').serialize()+"&action=order",
          success:function(response){
            $("#order").html(response);
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
