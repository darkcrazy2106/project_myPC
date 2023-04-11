<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from template.hasthemes.com/selphy/selphy/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:05:08 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop List</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.webp"> -->

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet'
		type='text/css'>

	<!-- CSS
		============================================ -->

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
	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />


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
											<li><a class="account" href="#">{{$user->fullname}}<i
														class="fa fa-angle-down"></i></a>
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
								<a href="{{ route('home') }}"><img src="{{ asset('images/myPC.png') }}" alt="logo"></a>
							</div>
						</div>
						<div class="col-lg-2  col-md-3 col-sm-4 col-5 order-lg-3">
							<!-- Header Actions Area-->
							<div class="header-actions">
								<div class="header-cart">
									<a class="cart" href="{{ route('cart')}}">
										<i class="fa fa-shopping-cart"></i>
										<span class="my-cart">Cart</span>
									</a>
									<div class="header-cart-dropdown">
										<div class="dropdown-cart-items">
											@if (session()->get('cart')==true)
											@foreach (session()->get('cart') as $key => $cart)

											<div class="cart-item">
												<div class="cart-img">
													<a
														href="{{ route('products-details', ['id'=>$cart['product_id']]) }}">
														<img src="{{ asset('images/'.$cart['product_img']) }}"
															alt="{{$cart['product_name']}}" />
													</a>
												</div>
												<div class="cart-content">
													<h5 class="title"><a
															href="{{ route('products-details', ['id'=>$cart['product_id']]) }}">{{$cart['product_name']}}</a>
													</h5>
													<p>{{$cart['product_quantity']}} x
														<span>${{$cart['product_price']}}</span>
													</p>
												</div>
												<div class="cart-action">
													<a href="{{ route('cart')}}"><i class="fa fa-pencil"></i></a>
													<a href="{{ url('/delete-cart',['id'=>$cart['session_id']]) }}"><i
															class="fa fa-times"></i></a>
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
												<button type="button" class="btn check-out">checkout</button>
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
										<input type="text" class="input-text" name="q" id="search"
											placeholder="Search entire store here...">
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
										{{-- @foreach ($categoriesList as $category)
										<li><a
												href="{{ route('search-products', [ 'category' => $category-> category_name]) }}">{{
												$category -> category_name }}</a></li>
										@endforeach --}}
										<li><a href="{{ route('search-products', ['category'=>'mac']) }}"><img
													src="{{ asset('images/iconMac.png') }}" alt="icon">Macbook<i
													class="fa fa-caret-right"></i></a>
											<ul class="mega-menu-ul">
												<li>
													<!--Mega Menu -->
													<div class="mega-menu">
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'mac']) }}">Macbook
																	Air</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'mac']) }}"><img
																	src="{{ asset('images/logo/macbookAir.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'mac']) }}">Macbook
																	Pro 13</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'mac']) }}"><img
																	src="{{ asset('images/logo/macbook13.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'mac']) }}">Macbook
																	Pro 14</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'mac']) }}"><img
																	src="{{ asset('images/logo/macbookPro14.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'mac']) }}">Macbook
																	Pro 16</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'mac']) }}"><img
																	src="{{ asset('images/logo/macbookPro16.jpg') }}"
																	alt="logo"></a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li><a href="{{ route('search-products', ['category'=>'iphone']) }}"><img
													src="{{ asset('images/iconIphone.png') }}" alt="icon">Iphone<i
													class="fa fa-caret-right"></i></a>
											<ul class="mega-menu-ul">
												<li>
													<!--Mega Menu -->
													<div class="mega-menu">
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
																	13 mini</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'iphone']) }}"><img
																	src="{{ asset('images/logo/iphone13.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
																	13</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'iphone']) }}"><img
																	src="{{ asset('images/logo/iphone13.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
																	13 Pro</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'iphone']) }}"><img
																	src="{{ asset('images/logo/iphone13pm.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
																	13 ProMax</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'iphone']) }}"><img
																	src="{{ asset('images/logo/iphone13pm.jpg') }}"
																	alt="logo"></a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li><a href="{{ route('search-products', ['category'=>'ipad']) }}"><img
													src="{{ asset('images/iconIpad.png') }}" alt="icon">Ipad<i
													class="fa fa-caret-right"></i></a>
											<ul class="mega-menu-ul">
												<li>
													<!--Mega Menu -->
													<div class="mega-menu">
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
																	gen 9</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'ipad']) }}"><img
																	src="{{ asset('images/logo/ipadGen.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
																	Air</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'ipad']) }}"><img
																	src="{{ asset('images/logo/ipadAir.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
																	Pro 11</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'ipad']) }}"><img
																	src="{{ asset('images/logo/ipadPro11.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a
																	href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
																	Pro 12.9</a></h2>
															<a
																href="{{ route('search-products', ['category'=>'ipad']) }}"><img
																	src="{{ asset('images/logo/ipadPro12.9.jpg') }}"
																	alt="logo"></a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li><a href="#"><img src="{{ asset('images/iconAirpods.png') }}"
													alt="icon">Airpods<i class="fa fa-caret-right"></i></a>
											<ul class="mega-menu-ul">
												<li>
													<!--Mega Menu -->
													<div class="mega-menu">
														<div class="single-mega-menu">
															<h2><a href="shop-list.html">Airpods 2</a></h2>
															<a href="shop-list.html"><img
																	src="{{ asset('images/logo/airPod2.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a href="shop-list.html">Airpods Pro</a></h2>
															<a href="shop-list.html"><img
																	src="{{ asset('images/logo/airPodsPro.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a href="shop-list.html">Airpods 3</a></h2>
															<a href="shop-list.html"><img
																	src="{{ asset('images/logo/airPods3.jpg') }}"
																	alt="logo"></a>
														</div>
														<div class="single-mega-menu">
															<h2><a href="shop-list.html">Airpods Max</a></h2>
															<a href="shop-list.html"><img
																	src="{{ asset('images/logo/airPodsMax.jpg') }}"
																	alt="logo"></a>
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
										<li><a
												href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook</a>
											<ul class="">
												<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook
														Air</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook
														Pro 13</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook
														Pro 14</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'macbook']) }}">Macbook
														Pro 16</a>
												</li>
											</ul>
										</li>
										<li class=""><a
												href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone</a>
											<ul class="">
												<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
														13 mini</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
														13</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
														13 Pro</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'iphone']) }}">Iphone
														13 ProMax</a>
												</li>
											</ul>
										</li>
										<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad</a>
											<ul class="">
												<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
														gen 9</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
														Air</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
														Pro 11</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'ipad']) }}">Ipad
														Pro 12.9</a>
												</li>
											</ul>
										</li>
										<li><a href="{{ route('search-products', ['category'=>'airpod']) }}">Airpods</a>
											<ul class="">
												<li><a href="{{ route('search-products', ['category'=>'airpods']) }}">Airpods
														2</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'airpods']) }}">Airpods
														Pro</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'airpods']) }}">Airpods
														3</a>
												</li>
												<li><a href="{{ route('search-products', ['category'=>'airpods']) }}">Airpods
														Max</a>
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

	<!-- Breadcurb Area -->
	<div class="breadcurb-area">
		<div class="container">
			<ul class="breadcrumb">
				<li class="home"><a href="{{ route('home') }}">Home <i class="fa fa-angle-right" aria-hidden="true"></i>
					</a></li>
				<li>{{$category}}</li>
			</ul>
		</div>
	</div><!-- End Breadcurb Area -->

	<!-- Shop Product Area -->
	<div class="shop-product-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<!-- Left Sidebar-->
					<div class="left-sidebar">
						<div class="left-sidebar-title">
							<h2>Shop By</h2>
						</div>
						<!-- Shop Layout -->
						<div class="shop-layout">
							<div class="layout-title">
								<h2>Category</h2>
							</div>
							<div class="layout-list">
								<ul>
									<li><a href="{{ route('search-products', ['category'=>'Mac']) }}">Macbook</a></li>
									<li><a href="{{ route('search-products', ['category'=>'Iphone']) }}">Iphone</a></li>
									<li><a href="{{ route('search-products', ['category'=>'Ipad']) }}">Ipad</a></li>
									<li><a href="{{ route('search-products', ['category'=>'Airpods']) }}">Airpods</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- End Shop Layout Area -->
						<!-- Price Filter -->
						{{-- <div class="price-filter-area shop-layout">
							<div class="price-filter">
								<div class="layout-title">
									<h2>Price</h2>
								</div>
								<div id="slider-range"></div>
								<p>
									<input type="text" id="amount" readonly
										style="border:0; color:#f6931f; font-weight:bold;">
								</p>
								<button class="btn btn-default">Filter</button>
							</div>
						</div> --}}
						<!-- End Price Filter Area -->
						<!-- Shop Layout Banner -->
						<div class="shop-layout-banner single-banner">
							<a href="#">
								<img alt="banner" src="{{ asset('images/banner2.png') }}">
							</a>
						</div>
						<!-- End Shop Layout Banner -->
					</div>
					<!-- End Left Sidebar -->
				</div>
				<div class="col-lg-9 col-md-12">
					<!-- Shop Product View -->
					<div class="shop-product-view">
						<!-- Shop Category Image -->
						<div class="shop-category-image">
							<img src="{{ asset('images/banner5.png') }}" alt="banner">
						</div>
						<!-- Shop Product Tab Area -->
						<div class="product-tab-area">
							<!-- Tab Bar -->
							<div class="tab-bar">
								<div class="tab-bar-inner">
									<ul class="nav nav-tabs" role="tablist">
										<li><a href="#shop-product" data-bs-toggle="tab"><i
													class="fa fa-th-large"></i></a></li>
										<li><a class="active" href="#shop-list" data-bs-toggle="tab"><i
													class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								{{-- <div class="toolbar">
									<div class="sorter">
										<div class="sort-by">
											<label>Sort By</label>
											<select>
												<option value="name">Name</option>
												<option value="price">Price</option>
											</select>
											<a href="#"><i class="fa fa-long-arrow-up"></i></a>
										</div>
									</div>
									<div class="pager-list">
										<div class="limiter">
											<label>Show</label>
											<select>
												<option value="9">12</option>
												<option value="12">15</option>
												<option value="24">18</option>
												<option value="36">36</option>
											</select>
											per page
										</div>
									</div>
								</div> --}}
							</div><!-- End Tab Bar -->
							<!-- Tab Content -->
							<div class="tab-content">
								<!-- Shop Product-->
								<div class="tab-pane" id="shop-product">
									<!-- Tab Single Product-->
									<div class="tab-single-product">
										<!-- Single Product -->
										@foreach ($productsList as $product)
										<div class="singel-product single-product-col">
											<div class="label-pro-new">New</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="{{ route('products-details', ['id'=>$product->id]) }}"><img
														src="{{ asset(" images/$product->img_path ") }}"
													alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<form>
													@csrf
													<input type="hidden" value="{{$product->id}}"
														class="cart_product_id_{{ $product->id}}">
													<input type="hidden" value="{{$product->product_code}}"
														class="cart_product_code_{{ $product->id}}">
													<input type="hidden" value="{{$product->name}}"
														class="cart_product_name_{{ $product->id}}">
													<input type="hidden" value="{{$product->img_path}}"
														class="cart_product_img_{{ $product->id}}">
													<input type="hidden" value="{{$product->price}}"
														class="cart_product_price_{{ $product->id}}">
													<input type="hidden" value="1"
														class="cart_product_quantity_{{ $product->id}}">
													<h2 class="product-name"><a title="{{ $product->name }}"
															href="{{ route('products-details', ['id'=>$product->id]) }}">{{
															$product->name }}</a></h2>
													<div class="ratings">
														<div class="rating-box">
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
														</div>
													</div>
													<div class="product-price">
														<p>{{number_format($product->price,2)}}</p>
													</div>
													<div class="product-actions">
														<button class="button btn-cart add-to-cart"
															data-id="{{ $product->id}}" name="add-to-cart"
															title="Add to Cart" type="button"><i
																class="fa fa-shopping-cart">&nbsp;</i><span>Add to
																Cart</span></button>
														{{-- <div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button"
																		data-bs-target="#productModal"
																		data-bs-toggle="modal"><i
																			class="fa fa-search"></i>Quick view</button>
																</li>
																<li class="wishlist"><a href="#"><i
																			class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="#"><i
																			class="fa fa-refresh"></i></a></li>
															</ul>
														</div> --}}
													</div>
												</form>
											</div><!-- End Single Product Content -->
										</div>
										@endforeach
									</div>
								</div>
								<!-- End Shop Product-->
								<!-- Shop List -->
								<div class="tab-pane active" id="shop-list">
									<!-- Single Shop -->
									@foreach ($productsList as $product)
									<div class="single-shop single-product">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-5">
												<div class="single-product-img">
													<a href="{{ route('products-details', ['id'=>$product->id]) }}"><img
															src="{{ asset(" images/$product->img_path ") }}"
														alt="product"></a>
												</div>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-7">
												<div class="single-product-content">
													<form>
														@csrf
														<input type="hidden" value="{{$product->id}}"
															class="cart_product_id_{{ $product->id}}">
														<input type="hidden" value="{{$product->product_code}}"
															class="cart_product_code_{{ $product->id}}">
														<input type="hidden" value="{{$product->name}}"
															class="cart_product_name_{{ $product->id}}">
														<input type="hidden" value="{{$product->img_path}}"
															class="cart_product_img_{{ $product->id}}">
														<input type="hidden" value="{{$product->price}}"
															class="cart_product_price_{{ $product->id}}">
														<input type="hidden" value="{{$product->quantity}}"
															class="cart_product_storage_{{ $product->id}}">
														<input type="hidden" value="1"
															class="cart_product_quantity_{{ $product->id}}">
														<h2 class="product-name"><a
																href="{{ route('products-details', ['id'=>$product->id]) }}"
																title="{{ $product->name }}">{{ $product->name }}</a>
														</h2>
														<div class="ratings">
															<div class="rating-box">
																<div class="rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</div>
															</div>
														</div>
														<div class="product-price">
															<p>{{number_format($product->price,2)}}</p>
														</div>
														<div class="single-shop-details">
															{!!$product->description!!}
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button class="button btn-cart add-to-cart"
																data-id="{{ $product->id}}" name="add-to-cart"
																title="Add to Cart" type="button"><i
																	class="fa fa-shopping-cart">&nbsp;</i><span>Add to
																	Cart</span></button>
														</div><!-- End Single Product Actions -->
													</form>
												</div>
											</div>
										</div>
									</div>
									@endforeach

									<!-- End Single Shop -->


									<!-- Single Shop -->
								</div>
								<!-- End Shop List -->
							</div><!-- End Tab Content -->
							<!-- Tab Bar -->
							<div class="tab-bar tab-bar-bottom">
								<div class="toolbar">
									{{-- <div class="sorter">
										<div class="sort-by">
											<label>Sort By</label>
											<select>
												<option value="position">Position</option>
												<option value="name">Name</option>
												<option value="price">Price</option>
											</select>
											<a href="#"><i class="fa fa-long-arrow-up"></i></a>
										</div>
									</div> --}}
									<div class="pages">
										{{ $productsList->onEachSide(2)->links('vendor.pagination.bootstrap-4')}}
										{{-- <strong>Page:</strong>
										<ol>
											<li class="current">1</li>
											<li><a href="#">2</a></li>
											<li><a title="Next" href="#"><i class="fa fa-arrow-right"></i></a></li>
										</ol> --}}
									</div>
								</div>
							</div><!-- End Tab Bar -->
						</div><!-- End Shop Product Tab Area -->
					</div><!-- End Shop Product View -->
				</div>
			</div>
		</div>
	</div><!-- End Shop Product Area -->

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
										<input type="text" title="Sign up for our newsletter" name="email"
											required="required">
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
								<li><a href="#">About us</a></li>
								<li><a href="#">Blog</a></li>
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
							<p>&copy; <span> myPC site</span> MADE BY GROUP 6</p>
						</div>
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

	<!-- Quickview Product -->
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<div class="product-images">
								<div class="main-image images">
									<p>Image of Product</p>
									<img alt="product" src="">
								</div>
							</div><!-- End product-images -->
							<div class="product-info">
								<h1>Name of Product</h1>
								<div class="ratings">
									<div class="rating-box">
										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
								<p class="rating-links">
									<a href="#">1 Review(s)</a>
									<span class="separator">|</span>
									<a href="#" class="add-to-review">Add Your Review</a>
								</p>
								<p class="availability in-stock">Availability: <span>In stock</span></p>
								<div class="quick-desc">
									(Description)
									Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis
									vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in
									faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet
									congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada
									tincidunt. Class aptent taciti
								</div>
								<div class="price-box">
									<p class="price"><span class="special-price"><span
												class="amount">Price</span></span></p>
								</div>
								<div class="quick-add-to-cart">
									<form method="post" class="cart">
										<div class="qty-button">
											<input type="text" class="input-text qty" title="Qty" value="1"
												maxlength="12" id="qty" name="qty">

											<div class="box-icon button-plus">
												<input type="button" class="qty-increase "
													onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;"
													value="+">
											</div>
											<div class="box-icon button-minus">
												<input type="button" class="qty-decrease"
													onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;"
													value="-">
											</div>
										</div>
										<div class="product-actions">
											<button class="button btn-cart" title="Add to Cart" type="button"><i
													class="fa fa-shopping-cart">&nbsp;</i><span>Add to
													Cart</span></button>
										</div>
									</form>
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social-icons">
											<li><a target="_blank" title="Facebook" href="#"
													class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
											<li><a target="_blank" title="Twitter" href="#"
													class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" title="Pinterest" href="#"
													class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
											</li>
											<li><a target="_blank" title="Google +" href="#"
													class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
											<li><a target="_blank" title="LinkedIn" href="#"
													class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- End product-info -->
						</div><!-- End modal-product -->
					</div><!-- End modal-body -->
				</div><!-- End modal-content -->
			</div><!-- End modal-dialog -->
		</div><!-- End Modal -->
	</div><!-- End Quickview Product -->

	<!-- JS
		============================================ -->

	<!-- Modernizer & jQuery JS -->
	<script src="../js/modernizr-2.8.3.min.js"></script>
	<script src="../js/jquery-1.12.4.min.js"></script>

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
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<script>
		$(document).ready(function(){
				$('.add-to-cart').on('click', function(){
					let id = $(this).data('id');
					let cart_product_id = $('.cart_product_id_'+ id).val();
					let cart_product_name = $('.cart_product_name_'+ id).val();
					let cart_product_code = $('.cart_product_code_'+ id).val();
					let cart_product_img = $('.cart_product_img_'+ id).val();
					let cart_product_price = $('.cart_product_price_'+ id).val();
					let cart_product_quantity = $('.cart_product_quantity_'+ id).val();
					let cart_product_storage = $('.cart_product_storage_'+id).val();
					let _token = $('input[name="_token"]').val();
					$.ajax({
						url: '{{url('/add-cart-ajax')}}',
						method: 'POST',
						data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_code:cart_product_code,cart_product_img:cart_product_img,
							cart_product_price:cart_product_price,cart_product_quantity:cart_product_quantity,
							cart_product_storage:cart_product_storage,_token:_token},
						success:function(data){
							alertify.set('notifier','position','top-right');
 							alertify.success('Add Product Successful');
							let cart_list = data;
							let str="";
							for(let $i=0; $i<cart_list.length;$i++){
								str+=`
									<div class="cart-item">
										<div class="cart-img">
											<a href="http://127.0.0.1:8000/product-details/${cart_list[$i].product_id}">
												<img src="http://127.0.0.1:8000/images/${cart_list[$i].product_img}" alt="${cart_list[$i].product_name}"/>
											</a>
										</div>
										<div class="cart-content">
											<h5 class="title"><a href="http://127.0.0.1:8000/product-details/${cart_list[$i].product_id}">${cart_list[$i].product_name}</a></h5>
											<p>${cart_list[$i].product_quantity} x <span>${cart_list[$i].product_price}</span></p>
										</div>
										<div class="cart-action">
											<a href="{{ route('cart')}}"><i class="fa fa-pencil"></i></a>
											<a href="http://127.0.0.1:8000/delete-cart/${cart_list[$i].session_id}"><i class="fa fa-times"></i></a>
										</div>
									</div>
									`;
							}
							$(".dropdown-cart-items").html(str);
						}
					});
				});
			});
	</script>

</body>

<!-- Mirrored from template.hasthemes.com/selphy/selphy/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:05:08 GMT -->

</html>