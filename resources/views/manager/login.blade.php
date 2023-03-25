<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from template.hasthemes.com/selphy/selphy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:03:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/favicon.webp"> -->
		
		<!-- Google Fonts -->		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>	   

		<!-- CSS -->
	
		<!-- Icon Font CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"rel="stylesheet"> --}}
        <link href="{{ asset('css/admin/customer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/style.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
	
		<!-- Plugins CSS -->
		{{-- <link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/meanmenu.min.css">
		<link rel="stylesheet" href="../css/nivo-slider.css">
		<link rel="stylesheet" href="../css/jquery-ui-slider.css">
		<link rel="stylesheet" href="../css/jquery.simpleLens.css">
		<link rel="stylesheet" href="../css/jquery.simpleGallery.css">
		<link rel="stylesheet" href="../css/owl.carousel.min.css"> --}}
	
		<!-- Main Style CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<link rel="stylesheet" href="{{ asset('css/admin/loginAdmin.css') }}">
    </head>
    <body>
        <div class="login-box">
            <img src="{{ asset('images/loginLogo.png') }}" alt="Apple Logo" width="50" height="50">
            <h2>Login</h2>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="{{ route('admin.adminLogin')}}" method="POST">
				@csrf
                <div class="user-box">
					<input type="text" name="username" required="">
					<label>Username</label>
                </div>
                <div class="user-box">
					<input type="password" name="password" required="">
					<label>Password</label>
					<a href="#" id="forgotPass">Forgot Password?</a>
                </div>
				<button type="submit"id="login" class="btn btn-infor">
				
					Login
				</button>
            </form>
        </div>
    </body>
<!-- Mirrored from template.hasthemes.com/selphy/selphy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:04:30 GMT -->
</html>
