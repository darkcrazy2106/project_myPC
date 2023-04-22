<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png"> -->
    <title>Administration</title>
    <!-- chartist CSS -->
    <!-- <link href="css/morris.css" rel="stylesheet"> -->
    <!-- <link href="css/ecommerce.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/admin/customer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
</head>

<body class="skin-default fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/myPC.png" alt="logo" class="light-logo2"></a> -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                   
                    <ul class="navbar-nav me-auto">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('admin.blog.index') }}">PRODUCT FEEDBACK</a>
                    
                        {{-- <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a> </li>
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li> --}}
                    </ul>
                    @php
                        $admin = Auth::guard('admin')->user();
                    @endphp
                    <ul>
                        <span style="color: #fff; font-size: 16px">Hello, {{$admin->name}}</span>
                        <a href="{{ route('admin.adminLogout') }}" class="btn btn-sm btn-primary" style="width: 70px; height: 29px; font-size: 16px; padding: 0px">Log Out</a>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav"> 
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><b>--- Products Management</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark " href="{{ route('admin.index') }}" aria-expanded="false"></i><span class="hide-menu">All Product</span></a>
                            <a class="has-arrow waves-effect waves-dark " href="{{ route('admin.add') }}" aria-expanded="false"></i><span class="hide-menu">Add New Product</span></a>
                            <a class="has-arrow waves-effect waves-dark " href="{{ route('admin.category.categories') }}" aria-expanded="false"></i><span class="hide-menu">Categories</span></a>
                        </li>
                        <li class="nav-small-cap"><b>--- Blogs Management</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark " href="{{ route('admin.blog.index') }}" aria-expanded="false"><span class="hide-menu">All Blog</span></a>
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.blog.add') }}" aria-expanded="false"><span class="hide-menu">Add New Blog</span></a>

                        </li>
                        <li class="nav-small-cap"><b>--- Account Management</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.account.index') }}" aria-expanded="false"><span class="hide-menu">Users Account</span></a>
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.listAdmin') }}" aria-expanded="false"><span class="hide-menu">Admin Account</span></a>
                            {{-- <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.account.index') }}" aria-expanded="false"><span class="hide-menu">Users Account Management</span></a>
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.account.index') }}" aria-expanded="false"><span class="hide-menu">Users Account Management</span></a> --}}

                        </li>
                        <li class="nav-small-cap"><b>--- Orders Management</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.order.index') }}" aria-expanded="false"><span class="hide-menu">All Orders</span></a>
                        </li>
                        <li class="nav-small-cap"><b>--- Feedbacks Management</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.feedback.blogfeedback') }}" aria-expanded="false"><span class="hide-menu">Blog Feedbacks</span></a>
                            <a class="has-arrow waves-effect waves-dark active" href="{{ route('admin.feedback.productfeedback') }}" aria-expanded="false"><span class="hide-menu">Product Feedbacks</span></a>
                        </li>  
                    </ul>
                </nav> 
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->

        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li><i class="fa fa-chevron-right"></i></li>
                                <li class="breadcrumb-item active">Product Feedbacks</li>
                            </ol>
                            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button> --}}
                        </div>
                    </div>
                </div>
                <div class="container">
                   
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Product Feedbacks</h5>
                                    @php
                                        $count=1;
                                    @endphp
                                    @if (session('msg'))
                                        <div class="alert alert-success">{{session('msg')}}</div>
                                    @endif
                                    <div class="table-responsive m-t-30">
                                        <table class="table product-overview">
                                            <colgroup>
                                                <col style="with:10px">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Product ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Comment</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($feedbacklist as $feedback)
                                                    <tr>
                                                        <td>{{$count++}}</td>
                                                        <td>{{$feedback ->product_id}}</td>
                                                        <td>{{$feedback ->name}}</td>
                                                        <td>{{$feedback ->email}}</td>
                                                        <td>{{$feedback ->comment}}</td>
                                                        <td>
                                                            <div class="ProductRatings">
                                                            <div class="ProductRating-box">
                                                              <div class="ProductRating">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                  @if ($i <= $feedback->rating)
                                                                    <i class="fa fa-star active" data-rating="{{ $i }}"></i>
                                                                  @else
                                                                    <i class="fa fa-star" data-rating="{{ $i }}"></i>
                                                                  @endif
                                                                @endfor
                                                              </div>
                                                            </div>
                                                        </div>			
                                                    </td>
                                                    <td style="width: 7%">
                                                        <div class="button-group">
                                                            <button type="button" class="btn btn-primary delete" id="{{ $feedback->id}}">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </button>                                                         
                                                        </div>
                                                    </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Bread crumb and right sidebar toggle -->   
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Footer -->
        <!-- ============================================================== -->
        
        <!-- End footer -->
    </div>
    <footer class="footer">
        <i class="fa fa-copyright" aria-hidden="true"></i> MADE BY GROUP 6 
    </footer>
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ecom-dashboard.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"> </script>

    <script>
        $(".delete").on("click", function(){
            var _ID = $(this).attr('id');
            swal({
                title: "Are you sure?",
                text: "Your will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Delete it!",
                closeOnConfirm: false
            },
            function(){
                window.location.href = 'deletefeedback/'+_ID;
            });
        });
    </script>
</body>
</html>