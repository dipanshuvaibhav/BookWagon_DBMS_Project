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
							<li class="breadcrumb-item active">Blog Post</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!--=============================================
    =            Login Register page content         =
    =============================================-->
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xs-12  mb--30 mb-lg--0">
						<!-- Login Form s-->
						<form action="postblog.php" method="post" enctype="multipart/form-data">
							<div class="login-form">
								<h4 class="login-title">Add New Blog</h4>
								<p><span class="font-weight-bold">Write here to express your feelings to the world</span></p>
								<div class="row">
								<!-- author name -->
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Full Name</label>
										<input class="mb-0 form-control" type="text" id="name" name="name1"
											placeholder="Enter your full name" required>
									</div>
									<!-- heading -->
									<div class="col-md-12 col-12 mb--15">
										<label for="heading">Heading</label>
										<input class="mb-0 form-control" type="text" id="heading" name="heading"
											placeholder="Enter heading" required>
									</div>
									<!-- content -->
									<div class="col-12 mb--20">
										<label for="content"></label>
										<textarea class="form-control" id="content" name="content" rows="3" coll="5" placeholder="Write Blog....."></textarea>
									</div>
									<!-- image -->
									<div class="col-12 mb--20">
										<label for="image">Upload image:</label>
										<input type="file" id="image" name="image">
                    <progress value="0" max="100" id="uploader" >0%</progress>
                    <input type="hidden" id="imageUrl" name="imageUrl" >
                    <input type="hidden"  name="user" value="<?=$_SESSION['id'];?>" >
									</div>

									<div class="col-md-12">
										<!-- <a href="#" class="btn btn-outlined">Register</a> -->
                    				<button type="submit" name = "upload" class="btn btn-outlined">Upload</button>
									</div>
								</div>
							</div>
						</form>
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

<!-- : Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-storage.js"></script>
<!-- set cookie cdn -->
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script>

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBrhZur6_whcp3JM6DRQC9Zytu2NgTCuUQ",
    authDomain: "bookwagon-6afb8.firebaseapp.com",
    projectId: "bookwagon-6afb8",
    storageBucket: "bookwagon-6afb8.appspot.com",
    messagingSenderId: "643972165142",
    appId: "1:643972165142:web:afd46bda82f60751a04f37",
    measurementId: "G-4YG0SD2T0B"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  //Getting File
  var fileButton = document.getElementById('image');

  // listen for file selection
  fileButton.addEventListener('change', function(e){
    // document.cookie = "ImageURL=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    // Get File
    var file = e.target.files[0];
   // Create a storage ref
  var storageRef =  firebase.storage().ref('image/blog_images/'+ file.name);
  // Upload file
  var task = storageRef.put(file);
  // task.on('state_changed',
  //   function progress(snapshot){
  //     var percentage = (snapshot.bytesTransferred / snapshot.totalBytes)*100;
  //     uploader.value = percentage;
  //   },
  //   function error(err){
  //
  //   },
  //   function complete(){
  //
  //   }
  // );
  setTimeout(() => {
	  storageRef.getDownloadURL().then((url)=>{
          var imageLink = url;

          document.getElementById("imageUrl").value = imageLink;
          console.log(imageLink);

		  var  prog ;
		  for(i=0;i<imageLink.length;i++){
			var percentage = i*10;
   		   uploader.value = percentage;
		  }
		  alert("Image uploaded successfully!");

    });
}, 10000);
  // storageRef.getDownloadURL().then((url)=>{
  //         var imageLink = url;
  //
  //         document.getElementById("imageUrl").value = imageLink;
  //         console.log(imageLink);
  //
  //   });


  });

</script>

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
