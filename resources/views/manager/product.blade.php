<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/ecommerce/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:20:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"rel="stylesheet"> --}}
    <link href="{{ asset('css/admin/customer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

    
</head>

<body class="skin-default fixed-layout">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/myPC.png" alt="logo" class="light-logo2"></a> -->
                    
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <a class="navbar-brand" href="{{ route('admin.index') }}">PRODUCT LIST</a>
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
                

                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav"> 
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><b>--- Products Management</b></li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark active " href="{{ route('admin.index') }}" aria-expanded="false"></i><span class="hide-menu">All Product</span></a>
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
                            <a class="has-arrow waves-effect waves-dark" href="{{ route('admin.feedback.productfeedback') }}" aria-expanded="false"><span class="hide-menu">Product Feedbacks</span></a>
                        </li>  
                    </ul>
                </nav> 
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home </a></li>
                                <li><i class="fa fa-chevron-right"></i></li>
                                <li class="breadcrumb-item active"> Products List</li>
                            </ol>
                        </div>
                    </div>
                </div>
    

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Products</h5>
                                @if (session('msg'))
                                        <div class="alert alert-success">{{session('msg')}}</div>
                                @endif
                                <a href="{{ route('admin.add') }}" class="btn btn-sm btn-primary pull-left mb-3"><i class="fa fa-plus-circle"></i> Add New</a>
                                <div class="table-responsive m-t-30">
                                    <table class="table product-overview product-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>P.Code</th>
                                                <th>Name</th>
                                                {{-- <th>Description</th> --}}
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Create At</th>
                                                {{-- <th>Update At</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @foreach ($productsList as $product)
                                                <tr>
                                                    <td>{{ $count++}}</td>
                                                    <td> <img src="images/{{ $product->img_path }}" alt="{{ $product->name }}"></td>
                                                    <td>{{ $product->product_code}}</td>
                                                    <td>{{ $product->name }}</td>
                                                    {{-- <td>{{ $product->description}}</td> --}}
                                                    <td>{{ $product->category_name}}</td>
                                                    <td>{{ $product->quantity }}</td>
                                                    <td>{{number_format($product->price,2)}}</td>
                                                    <td>{{ date('d-m-Y', strtotime($product->created_at))}}</td>
                                                    {{-- <td>{{ $product->updated_at}}</td> --}}
                                                    <td>
                                                        <div class="button-group">
                                                            <button type="button" class="btn btn-warning edit" onclick="window.location.href = '{{ route('admin.edit', ['id'=>$product->id]) }}'">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                            </button>
                                                            <!-- Button trigger modal -->
                                                            {{-- <li><a onclick="return confirm('Are you sure?')" href="{{ route('admin.delete', ['id'=>$product->id]) }}" class="btn btn-danger"><i class="fa fa-times"></i></a></li> --}}
                                                            <button type="button" class="btn btn-primary delete" id="{{ $product->id }}">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </button>
                                                            
                                                            
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $productsList->links('vendor.pagination.bootstrap-4')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
    <footer class="footer">
        <i class="fa fa-copyright" aria-hidden="true"></i> 2023 Admin by Group 6
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ecom-dashboard.js') }}"></script>
    <script src="{{ asset('js/deleteconfirm.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"> </script>

</body>
</html>