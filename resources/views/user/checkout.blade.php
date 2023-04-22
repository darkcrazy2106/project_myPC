<!doctype html>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Check Out</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.webp"> -->
		
		<!-- Google Fonts -->		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>	   

		<!-- CSS
		============================================ -->
	
		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	
		<!-- Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery-ui-slider.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.simpleLens.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.simpleGallery.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

	
		<!-- Main Style CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <style>
			.nav > li > a {
				background: #fff none repeat scroll 0 0;
    			color: #000;
			}
		</style>
        

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
												@if (Auth::guard('user')->check())
													@php
														$user = Auth::guard('user')->user();
													@endphp
													<li><a class="account" href="#">{{$user->fullname}}<i class="fa fa-angle-down"></i></a>
														<ul>
															<li><a href="{{ route('userProfile') }}">My Account</a></li>
															<li><a href="wishlist.html">My Wishlist</a></li>
															<li><a href="{{ route('cart') }}">My Cart</a></li>
															<li><a href="{{ route('logout') }}">Log out</a></li>
														</ul>
													</li>
                                                @else
													<li><a class="account" href="{{ route('loginForm') }}">Login</li>
												@endif
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
										<a class="cart" href="{{ route('cart') }}">
											<i class="fa fa-shopping-cart"></i>
											<span class="my-cart">Cart</span>
										</a>
										<div class="header-cart-dropdown">
											<div class="dropdown-cart-items">
												@if (session()->get('cart')==true)
													@foreach (session()->get('cart') as $key => $cart)
														<div class="cart-item">
															<div class="cart-img">
																<a href="#">
																	<img src="images/{{$cart['product_img']}}" alt="{{$cart['product_name']}}"/>
																</a>
															</div>
															<div class="cart-content">
																<h5 class="title"><a href="#">{{$cart['product_name']}}</a></h5>
																<p>{{$cart['product_quantity']}} x <span>${{$cart['product_price']}}</span></p>
															</div>
															<div class="cart-action">
																<a href="{{ route('cart')}}"><i class="fa fa-pencil"></i></a>
																<a href="{{ url('/delete-cart',['id'=>$cart['session_id']]) }}"><i class="fa fa-times"></i></a>
															</div>
														</div>
													@endforeach
												@endif
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
									<!-- All Categorie -->
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
											<input type="text" class="input-text" name="q" id="search" placeholder="Search entire store here...">
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

		<!-- Main Menu Area -->
		<div class="main-menu-area main-menu-area-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<!-- Category Menu -->
								<div class="category-menu d-none d-lg-block">
									<div class="category-menu-title">
										<h2>Categories</h2>
									</div>
									<div class="categorie-list">
										<ul>
											<li><a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/iconMac.png') }}" alt="icon">Macbook<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Air</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/logo/macbookAir.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Pro 13</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/logo/macbook13.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Pro 14</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/logo/macbookPro14.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'mac']) }}">Macbook Pro 16</a></h2>
																<a href="{{ route('search-products', ['category'=>'mac']) }}"><img src="{{ asset('images/logo/macbookPro16.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/iconIphone.png') }}" alt="icon">Iphone<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 mini</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/logo/iphone13.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/logo/iphone13.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 Pro</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/logo/iphone13pm.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 ProMax</a></h2>
																<a href="{{ route('search-products', ['category'=>'iphone']) }}"><img src="{{ asset('images/logo/iphone13pm.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/iconIpad.png') }}" alt="icon">Ipad<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad gen 9</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/logo/ipadGen.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Air</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/logo/ipadAir.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 11</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/logo/ipadPro11.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 12.9</a></h2>
																<a href="{{ route('search-products', ['category'=>'ipad']) }}"><img src="{{ asset('images/logo/ipadPro12.9.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li><a href="#"><img src="{{ asset('images/iconAirpods.png') }}" alt="icon">Airpods<i class="fa fa-caret-right"></i></a>
												<ul class="mega-menu-ul">
													<li>
														<!--Mega Menu -->
														<div class="mega-menu">
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods 2</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/logo/airPod2.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods Pro</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/logo/airPodsPro.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods 3</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/logo/airPods3.jpg') }}" alt="logo"></a>
															</div>
															<div class="single-mega-menu">
																<h2><a href="shop-list.html">Airpods Max</a></h2>
																<a href="shop-list.html"><img src="{{ asset('images/logo/airPodsMax.jpg') }}" alt="logo"></a>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<!-- <li><a href="#"><img src="img/icon/m5.html" alt="icon">Camera & Photo</a></li>
											<li><a href="#"><img src="img/icon/m6.html" alt="icon">Accessories</a></li> -->
											<!-- Menu Accordion-->
											<!-- <li class=" rx-child"><a href="#"><img src="img/icon/m7.html" alt="icon">Destop</a></li>
											<li class=" rx-child"><a href="#">Shop All</a></li>
											<li class=" rx-parent">
												<a class="rx-default"><img src="img/icon/m8.html" alt="icon">More categories</a>
												<a class="rx-show"><img src="img/icon/m9.html" alt="icon">close menu</a>
											</li> -->
											<!-- End Menu Accordion-->
										</ul>
									</div>
								</div><!-- End Category Menu -->
							</div>
							<div class="col-lg-9">
								<!-- Main Menu -->
								<div class="main-menu d-none d-lg-block">
									<nav>
										<ul>
											<li><a href="{{ route('home') }}">Home</a>
											</li>
											<li><a href="{{ route('contact') }}">Contact Us</a></li>
											<li><a href="{{ route('blog') }}">Blog</a></li>
                                            <li><a href="{{ route('products') }}">All Products</a></li>
										</ul>
									</nav>
								</div><!-- End Main Menu -->
								<!-- Start Mobile Menu -->
								<div class="mobile-menu d-block d-lg-none">
									<nav>
										<ul>
											<li class=""><a href="{{ route('home') }}">Home</a>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Air</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Pro 13</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Pro 14</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook Pro 16</a>
													</li>
												</ul>
											</li>
											<li class=""><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 mini</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 Pro</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone 13 ProMax</a>
													</li>
												</ul>
											</li>
											<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad gen 9</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Air</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 11</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad Pro 12.9</a>
													</li>
												</ul>
											</li>														
											<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods</a>
												<ul class="">
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods 2</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods Pro</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods 3</a>
													</li>
													<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods Max</a>
													</li>
												</ul>
											</li>
										</ul>
									</nav>
								</div><!-- End Mobile Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Menu Area -->

        
		<div class="chart-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="cart-title">
							<h2>Check Out Form</h2>
						</div>
					</div>
				</div>
                @if (session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                @endif
                @if (session()->get('cart')==true)
                    <form action="{{ url('/confirm-checkout') }}" method="POST">
                        @csrf
                        <div class="my-account-area" style="margin: 50px">
                            <div class="container">
                                @if (Auth::guard('user')->check())
                                    @php
                                        $user = Auth::guard('user')->user();
                                    @endphp
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="resestered-customers customer">
                                                <div class="customer-inner">
                                                    <div class="user-title">
                                                        <h2 style="font-size: 25px">Verify Your Identity</h2>
                                                    </div>
                                                    <div class="user-content">
                                                        <p>Customer Information</p>
                                                    </div>
                                                    <div class="account-form">
                                                        <div class="form-goroup">
                                                            <label>Customer Name<sup>*</sup></label>
                                                            <input type="text" required="required" name="customer_name" class="form-control" value="{{$user->fullname}}">
                                                        </div>
                                                        
                                                        <div class="form-goroup">
                                                            <label>Phone Number <sup>*</sup></label>
                                                            <input type="text" required="required" name="customer_phone" class="form-control" value="{{$user->phone}}">
                                                        </div>
                                                        
                                                        <div class="form-goroup">
                                                            <label>Address<sup>*</sup></label>
                                                            <input type="text" required="required" name="customer_address" class="form-control" value="{{$user->address}}">
                                                        </div>
                                                        <div class="form-goroup">
                                                            <label>Payment<sup>*</sup></label> <br>
                                                            <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                                                            <label class="btn btn-primary" for="btn-check-2">COD</label>
                                                            <input type="checkbox" class="btn-check" id="btn-check-3" checked autocomplete="off" disabled>
                                                            <label class="btn btn-primary" for="btn-check-3">ATM</label>
                                                        </div>
                                                    </div>
                                                    <p class="reauired-fields floatright"><sup>*</sup> Required Fields</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="resestered-customers customer">
                                                <div class="customer-inner">
                                                    <div class="user-title">
                                                        <h2 style="font-size: 25px">Verify Your Identity</h2>
                                                    </div>
                                                    <div class="user-content">
                                                        <p>Customer Information</p>
                                                    </div>
                                                    <div class="account-form">
                                                        <div class="form-goroup">
                                                            <label>Customer Name<sup>*</sup></label>
                                                            <input type="text" required="required" name="customer_name" class="form-control" value="">
                                                        </div>
                                                        
                                                        <div class="form-goroup">
                                                            <label>Phone Number <sup>*</sup></label>
                                                            <input type="text" required="required" name="customer_phone" class="form-control" value="">
                                                        </div>
                                                        
                                                        <div class="form-goroup">
                                                            <label>Address<sup>*</sup></label>
                                                            <input type="text" required="required" name="customer_address" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                    <p class="reauired-fields floatright"><sup>*</sup> Required Fields</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Cart Item -->
                                <div class="chart-item table-responsive fix">
                                    <table class="col-md-12">
                                        <thead>
                                            <tr>
                                                <th class="th-product">Images</th>
                                                <th class="th-details">Product Name</th>
                                                {{-- <th class="th-edit">Edit</th> --}}
                                                <th class="th-price">Unit Price</th>
                                                <th class="th-qty">Qty</th>
                                                <th class="th-total">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                
                                            
                                            @php
                                                $total = 0;
                                            @endphp
                                            
                                            @foreach (session()->get('cart') as $key => $cart)
                                            @php
                                                $subtotal = $cart['product_price']*$cart['product_quantity'];
                                                $total+=$subtotal;
                                            @endphp
                                                <tr>
                                                    {{-- <td class="th-delate">
                                                        <button type="button" class="th-delate del-cart-product">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </td> --}}
                                                    <td class="th-product">
                                                        <a href="{{ route('products-details', ['id'=>$cart['product_id']]) }}"><img src="images/{{$cart['product_img']}}" alt="{{$cart['product_name']}}" style="max-width:50%"></a>
                                                    </td>
                                                    <td class="th-details">
                                                        <h2><a href="{{ route('products-details', ['id'=>$cart['product_id']]) }}">{{$cart['product_name']}}</a></h2>
                                                    </td>
                                                    {{-- <td class="th-edit"><a href="#">Edit</a></td> --}}
                                                    <td class="th-price">${{$cart['product_price']}}</td>
                                                    <td class="th-qty">
                                                        <input type="number" min="1" disabled="true" value="{{$cart['product_quantity']}}" class="cart_quantity" name="cart_quantity[{{$cart['session_id']}}]">
                                                    </td>
                                                    <td class="th-total">${{$subtotal}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div><!-- End Cart Item -->
                            </div>
                        </div>
                        <div class="cart-shopping-area fix">
                            <div class="row">
                                <div class="col-lg-4 col-md-12"></div>
                                <div class="col-lg-4 col-md-12"></div>
                                {{-- <div class="col-lg-4 col-md-12">
                                    <div class="calculate-shipping chart-all fix">
                                        <h2>Estimate Shipping and Tax</h2>
                                        <div class="cart-all-inner">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <h3>Country <sup>*</sup></h3>
                                            <select>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo - Brazzaville</option>
                                                <option value="CD">Congo - Kinshasa</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d’Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard &amp; McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong SAR China</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau SAR China</option>
                                                <option value="MK">Macedonia</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar (Burma)</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="KP">North Korea</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territories</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn Islands</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="VC">St. Vincent &amp; Grenadines</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option selected="selected" value="US">United States</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UM">U.S. Outlying Islands</option>
                                                <option value="VI">U.S. Virgin Islands</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican City</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <h3>State/Province</h3>
                                            <select>
                                                <option value="">Please select region, state or province</option>
                                                <option value="1">Alabama</option>
                                                <option value="2">Alaska</option>
                                                <option value="3">American Samoa</option>
                                                <option value="4">Arizona</option>
                                                <option value="5">Arkansas</option>
                                                <option value="6">Armed Forces Africa</option>
                                                <option value="7">Armed Forces Americas</option>
                                                <option value="8">Armed Forces Canada</option>
                                                <option value="9">Armed Forces Europe</option>
                                                <option value="10">Armed Forces Middle East</option>
                                                <option value="11">Armed Forces Pacific</option>
                                                <option value="12">California</option>
                                                <option value="13">Colorado</option>
                                                <option value="14">Connecticut</option>
                                                <option value="15">Delaware</option>
                                                <option value="16">District of Columbia</option>
                                                <option value="17">Federated States Of Micronesia</option>
                                                <option value="18">Florida</option>
                                                <option value="19">Georgia</option>
                                                <option value="20">Guam</option>
                                                <option value="21">Hawaii</option>
                                                <option value="22">Idaho</option>
                                                <option value="23">Illinois</option>
                                                <option value="24">Indiana</option>
                                                <option value="25">Iowa</option>
                                                <option value="26">Kansas</option>
                                                <option value="27">Kentucky</option>
                                                <option value="28">Louisiana</option>
                                                <option value="29">Maine</option>
                                                <option value="30">Marshall Islands</option>
                                                <option value="31">Maryland</option>
                                                <option value="32">Massachusetts</option>
                                                <option value="33">Michigan</option>
                                                <option value="34">Minnesota</option>
                                                <option value="35">Mississippi</option>
                                                <option value="36">Missouri</option>
                                                <option value="37">Montana</option>
                                                <option value="38">Nebraska</option>
                                                <option value="39">Nevada</option>
                                                <option value="40">New Hampshire</option>
                                                <option value="41">New Jersey</option>
                                                <option value="42">New Mexico</option>
                                                <option value="43">New York</option>
                                                <option value="44">North Carolina</option>
                                                <option value="45">North Dakota</option>
                                                <option value="46">Northern Mariana Islands</option>
                                                <option value="47">Ohio</option>
                                                <option value="48">Oklahoma</option>
                                                <option value="49">Oregon</option>
                                                <option value="50">Palau</option>
                                                <option value="51">Pennsylvania</option>
                                                <option value="52">Puerto Rico</option>
                                                <option value="53">Rhode Island</option>
                                                <option value="54">South Carolina</option>
                                                <option value="55">South Dakota</option>
                                                <option value="56">Tennessee</option>
                                                <option value="57">Texas</option>
                                                <option value="58">Utah</option>
                                                <option value="59">Vermont</option>
                                                <option value="60">Virgin Islands</option>
                                                <option value="61">Virginia</option>
                                                <option value="62">Washington</option>
                                                <option value="63">West Virginia</option>
                                                <option value="64">Wisconsin</option>
                                                <option value="65">Wyoming</option>
                                            </select>
                                            <h3>Zip/Postal Code</h3>
                                            <input type="text">
                                            <div class="shiping-cart-button">
                                                <button type="button" class="btn custom-button">Get A Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-4 col-md-12">
                                    <div class="chart-all fix">
                                        <h2>Discount Codes</h2>
                                        <div class="cart-all-inner">
                                            <p>Enter your coupon code if you have one.</p>
                                            <input type="text">
                                            <div class="shiping-cart-button">
                                                <button class="btn custom-button" type="button">Apply Coupon</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4 col-md-12">
                                    <div class="shopping-summary chart-all fix">
                                        <div class="shopping-cost-area">
                                            <div class="shopping-cost">
                                                <div class="shopping-cost-right">
                                                    <p>${{$total}}</p>
                                                    <p>${{$total}}</p>
                                                </div>
                                                <div class="shopping-cost-left">
                                                    <p class="floatright">Sub Total </p>
                                                    <p>GRAND TOTAL</p>
                                                </div>
                                            </div>
                                            <div class="shiping-cart-button">
                                                <button type="submit" class="btn custom-button">Confirm</button>
                                            </div>
                                            <a href="#">Checkout with Multiple Addresses</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Cart Shoping Area -->
                        </div>
                    </form>
                @endif
			</div>
		</div>

		<!-- Brand Area -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="brand-add">
							<a href="#"><img src="{{ asset('images/banner6.png') }}" alt="brand-logo"></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<!-- Brand Logo -->
						<div class="brand-logo">
								<a href="#"><img src="{{ asset('images/banner8.png') }}" alt="brand-logo"></a>
								<a href="#"><img src="{{ asset('images/banner7.jpg') }}" alt="brand-logo"></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Brand Area -->		
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
										<div class="subscribe-input-box">
										   <input type="text" title="Sign up for our newsletter" name="email" required="required">
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
		
		<!-- jquery
		============================================ -->		
        <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper JS
		============================================ -->		
        <script src="{{ asset('js/popper.min.js') }}"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- nivo slider js
		============================================ --> 
		<script src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
		<!-- Mean Menu js
		============================================ -->         
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
		<!-- price-slider JS
		============================================ -->		
        <script src="{{ asset('js/js/jquery-price-slider.js') }}"></script>
		<!-- Simple Lence JS
		============================================ -->
		<script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/jquery.simpleLens.min.js') }}"></script>	
		<!-- owl.carousel JS
		============================================ -->		
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
		<!-- DB Click JS
		============================================ -->
        <script src="{{ asset('js/dbclick.min.js') }}"></script>
		<!-- Countdown JS
		============================================ -->
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
				
        <script src="{{ asset('js/plugins.js') }}"></script>
		<!-- main JS
		============================================ -->		
        <script src="{{ asset('js/main.js') }} "></script>
        <script src="{{ asset('js/sweetalert.js') }} "></script>
        <script src="{{ asset('js/deleteconfirm.js') }} "></script>
        <script>
            $(document).ready(function(){
                // $('.comfirm-check-out').on('click', function(){
                //     alert('success');
                // });
            });
        </script>

    </body>


</html>
