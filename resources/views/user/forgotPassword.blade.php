<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from template.hasthemes.com/selphy/selphy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:03:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Forgot Password</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.webp"> -->
		
		<!-- Google Fonts -->		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>	   

		<!-- CSS -->
	
		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery-ui-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.simpleLens.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.simpleGallery.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	
		<!-- Main Style CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('css/customer.css') }}">
		<link rel="stylesheet" href="{{ asset('css/registerUser.css') }}">
    </head>
    <body>
		<!-- Header Area -->
		<div class="header-area">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<!-- Header Top Bar-->
					<div class="header-top-bar">
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<!-- Header Top Left-->
								<div class="header-top-left">
									<div class="call-header">
										<p><i class="fa fa-phone"></i><span> 0949003635 - 01234097161</span></p>
									</div>
									{{-- <div class="header-login">
										<a href="my-account.html">Log in</a>
									</div> --}}
								</div><!-- End Header Top Left-->
							</div>
							<div class="col-lg-7 col-md-6">
								<!-- Header Top Right-->
								<div class="header-top-right">
									<!-- Header Link Area -->
									<div class="header-link-area">
										<div class="header-link">
											<ul>
												<li><a class="english" href="#">English<i class="fa fa-angle-down"></i></a>
													<ul>
														<li><a href="#">English</a></li>
														<li><a href="#">Viet Nam</a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="header-link">
											<ul>
												<li class=""><a class="usd" href="#">USD<i class="fa fa-angle-down"></i></a>
													<ul>
														<li><a href="#">USD</a></li>
														<li><a href="#">VND</a></li>
													</ul>
												</li>
												<li><a class="account" href="{{ route('loginForm') }}">Login</a>
													<!-- <ul>
														<li><a href="wishlist.html">My Wishlist</a></li>
														<li><a href="cart.html">My Cart</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li><a href="my-account.html">Log Out</a></li>
													</ul> -->
												</li> 
											</ul>
										</div>
									</div><!-- End Header Link Area -->
								</div><!-- End Header Top Right-->
							</div>
						</div>
					</div>
					<!-- End Header Top Bar-->
				</div>
			</div><!-- End Header Top -->

			<!-- Header Bottom -->
			<div class="header-bottom">
				<div class="container">
					<!-- Header Bottom Inner-->
					<div class="header-bottom-inner">
						<div class="row justify-content-between">
							<div class="col-lg-3 col-md-4 col-sm-4 col-6 order-lg-1">
								<!-- Header Logo -->
								<div class="header-logo">
									<a href="{{ route('home') }}"><img src="images/myPC.png" alt="logo"></a>
								</div>
							</div>
							<div class="col-lg-2  col-md-3 col-sm-4 col-5 order-lg-3">
								<!-- Header Actions Area-->
								<div class="header-actions">
									<div class="header-cart">
										<a class="cart" href="#">
											<i class="fa fa-shopping-cart"></i>
											<span class="my-cart">Cart</span>
										</a>
										<div class="header-cart-dropdown">
											<div class="dropdown-cart-items">
												<!-- <div class="cart-item">
													<div class="cart-img">
														<a href="#"><img src="assets/images/cart/c1.webp" alt="cart" /></a>
													</div>
													<div class="cart-content">
														<h5 class="title"><a href="#">Aliquam consequat</a></h5>
														<p>1 x <span>$432.00</span></p>
													</div>
													<div class="cart-action">
														<a href="#"><i class="fa fa-pencil"></i></a>
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div> -->
												<!-- <div class="cart-item">
													<div class="cart-img">
														<a href="#"><img src="assets/images/cart/c2.webp" alt="cart" /></a>
													</div>
													<div class="cart-content">
														<h5 class="title"><a href="#">Proin lectus ipsum</a></h5>
														<p>1 x <span>$432.00</span></p>
													</div>
													<div class="cart-action">
														<a href="#"><i class="fa fa-pencil"></i></a>
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div> -->
											</div>
											
											<div class="cart-total-btn">
												<div class="cart-subtotal">
													<!-- <p>Subtotal: <span>$1,131.00</span></p> -->
												</div>
												<div class="cart-btn">
													<button type="button" class="btn">checkout</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- End Header Actions Area-->
							</div>
							<div class="col-lg-7 order-lg-2">
								<div class="header-search">
									<!-- All Categories -->
									<div class="all-categories">
										<select id="product-categori">
											<option value="All Categories">All Categories</option>
											<option value="Categorie laptop">Macbook</option>
											<option value="Categorie moblie">Iphone</option>
											<option value="Categorie table">Ipad </option>
											<option value="Categorie headphone">Airpods </option>
										</select>
									</div>
									<!-- End All Categorie -->
									<div class="search-form">
										<form action="#">
											<input type="text" class="input-text" name="search" id="search" placeholder="Search entire store here...">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Header Bottom Inner-->
				</div>
			</div><!-- End Header Bottom -->

		</div>
		<!-- End Header Area -->
        
        <div class="register-box">
            <img src="../images/loginLogo.png" alt="Apple Logo" width="50" height="50">
            <h2>Recovery Password</h2>
            <form method="post" action="{{ route('send-verify-mail') }}">
				@csrf
                <div class="notation">
                    Please enter your username or email address. <br>
                    You will receive an email message with instructions on how to reset your password.
                </div>
				@if ($errors->any())
                        <div class="alert alert-danger" style="text-align: center">Error Data Format</div>
                @endif
				@if (session('msg'))
                	<div class="alert alert-success">{{session('msg')}}</div>
            	@endif
                <div class="user-box">
                    <input type="email" name="username" required="">
                    <label>Enter Your Email Address</label>
                </div>
				<button type="submit" class="btn btn-warning">Send</button>
            </form>
        </div>
    
    <!-- Footer Area -->
		<div class="footer-area">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<!-- Block Subscribe -->
							<div class="block-subscribe">
							<div class="subscribe-title">
								<div class="icon"><i class="fa fa-envelope-o"></i></div>
							</div>
								<div class="subscribe-form">
									<form action="#">
										<div class="subscribe-input-box subscribe-action">
										   <input type="text" title="Sign up for our newsletter" name="email" required="required">
										   <!-- <button title="Subscribe" type="submit">Subscribe</button> -->
										</div>
										<div class="subscribe-action">
											<button title="Subscribe" type="submit">Subscribe</button>
										</div> 
									</form>
								</div>
							</div><!-- End Block Subscribe -->
						</div>
						<div class="col-lg-4">
							<!-- Social Footer -->
							<div class="social-footer">
								<ul class="link-follow">
									<li class="first">
										<a href="#" class="facebook fa fa-facebook"></a>
									</li>
									<li>
										<a href="#" class="twitter fa fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="google fa fa-google-plus"></a>
									</li>
									<li>
										<a href="#" class="instagram fa fa-instagram"></a>
									</li>
								</ul>
							</div><!-- End Social Footer -->
						</div>
					</div>
				</div>
			</div><!-- End Footer Top -->
			<!-- Footer Static -->
			<div class="footer-static">
				<div class="container">
				    <div class="footer-bottom-wrap">
				        <!-- Single Footer Static -->
                        <div class="single-footer-static static-info">
                            <div class="footer-static-title">
                                <h3>Information</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li><a href="{{ route('contact') }}">About us</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static">
                            <div class="footer-static-title">
                                <h3>Customer Service</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static static-shipping">
                            <div class="footer-static-title">
                                <h3>Payment & Shipping</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>	
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static static-account">
                            <div class="footer-static-title">
                                <h3>My Account</h3>
                            </div>
                            <div class="footer-static-content">
                                <ul>								
                                    <li><a href="#">My Addresses</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Returns and Exchanges</a></li>
                                    <li><a href="#">Shipping Options</a></li>
                                    <li><a href="#">My personal info</a></li>
                                </ul>
                            </div>
                        </div><!-- End Single Footer Static -->
                        <!-- Single Footer Static -->
                        <div class="single-footer-static static-contact">
                            <div class="footer-static-title">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="footer-static-content">							
                                <div class="contact-info">
                                    <p class="phone">01234097161</p>
                                    <p class="email">trunghnts2110025@gmail.com</p>
                                    <p class="adress">FPT Aptech</p>
                                </div>
                            </div>
                        </div><!-- End Single Footer Static -->
				    </div>
				</div>
			</div><!-- End Footer Static -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<!-- Copyright -->
							<div class="copyright">
								<p>&copy; <span> myPC site</span> MADE BY GROUP 6</p>							</div>						
						</div>
						<div class="col-md-6">
							<!-- Footer Payment -->
							<div class="footer-payment">
								<a href="#"><img src="assets/images/logo/payment.webp" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Footer Bottom -->
		</div><!-- End Footer Area -->
<!-- Mirrored from template.hasthemes.com/selphy/selphy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:04:30 GMT -->
    </body>
</html>
