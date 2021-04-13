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
																<li class="menu-item mega-menu">
																	<a href="my-account.php">Account</a>
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
														<li class="menu-item mega-menu">
																	<a href="my-account.php">Account</a>
																</li>
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
                            <p class="p-0">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                Aenean posuere
                                libero eu augue condimentum
                                rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                bibendum massa
                                nec, fermentum
                                odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus
                                fermentum
                                eleifend. Pellentesque
                                faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
                            <blockquote>
                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In
                                    venenatis elit ac
                                    ultrices convallis.
                                    Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet
                                    ligula ut
                                    eleifend. Proin dictum
                                    tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                            </blockquote>
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed
                                efficitur ex
                                ultrices.
                                Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh.
                                Phasellus nec lacus id
                                arcu facilisis
                                elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec
                                iaculis lacus sem
                                non lorem. Duis
                                suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac
                                fringilla mi
                                vehicula nec. Nunc
                                vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus
                                consectetur, placerat
                                suscipit justo
                                dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae
                                lorem non
                                mollis. Praesent
                                pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan
                                placerat justo
                                ultricies vel.
                                Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit.
                                Curabitur sagittis
                                quam quis
                                consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque.
                                Nunc ante quam,
                                luctus et neque a,
                                interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam.
                                Suspendisse quis eros
                                cursus, viverra
                                urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis
                                nunc.
                                Curabitur vitae orci id
                                nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                        </article>
                        <footer class="blog-meta">
                            <div> <a href="#">3 comments </a> / TAGS: <a href="#">fashion</a>, <a href="#">t-shirt</a>,
                                <a href="#">white</a></div>
                        </footer>
                    </div>
                </div>
                <div class="share-block mb--50">
                    <h3>Share Now</h3>
                    <div class="social-links  justify-content-center  mt--10">
                        <a href="#" class="single-social social-rounded"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-social social-rounded"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-social social-rounded"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" class="single-social social-rounded"><i class="fab fa-google-plus-g"></i></a>
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
        </section>
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
