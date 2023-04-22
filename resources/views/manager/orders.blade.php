<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/ecommerce/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 02:20:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link href="{{ asset('css/admin/customer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/ecommerce.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <style>
        .header-order-detail-,.order-detail-{
            display: none;
        }
    </style>
    
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
                        <a class="navbar-brand" href="{{ route('admin.order.index') }}">ALL ORDERS</a>
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
                            <a class="has-arrow waves-effect waves-dark active" href="{{ route('admin.order.index') }}" aria-expanded="false"><span class="hide-menu">All Orders</span></a>
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
        {{-- <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar ps ps--theme_default ps--active-y" data-ps-id="70906a71-5569-8858-4f2b-8801d7091c28">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <div class="hide-menu text-center">
                                <div id="eco-spark"><canvas style="display: inline-block; width: 169px; height: 50px; vertical-align: top;" width="169" height="50"></canvas></div>
                                <small>TOTAL EARNINGS - JUNE 2020</small>
                                <h4>$2,478.00</h4>
                            </div>
                        </li>
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Ecommerce <span class="badge rounded-pill bg-cyan ms-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Dashboard </a></li>
                                <li><a href="eco-products.html">Products</a></li>
                                <li><a href="eco-products-detail.html">Products Details</a></li>
                                <li><a href="eco-products-edit.html">Products Edit</a></li>
                                <li><a href="eco-products-orders.html">Products Orders</a></li>
                                <li><a href="eco-products-cart.html">Products Cart</a></li>
                                <li><a href="eco-products-checkout.html">Products Cehckout</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge rounded-pill bg-primary text-white ms-auto">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-user-card.html">User Cards</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-range-slider.html">Range slider</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="ui-list-media.html">List Media</a></li>
                                <li><a href="ui-ribbons.html">Ribbons</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layouts</a></li>
                                <li><a href="form-addons.html">Form Addons</a></li>
                                <li><a href="form-material.html">Form Material</a></li>
                                <li><a href="form-float-input.html">Floating Lable</a></li>
                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-icheck.html">Icheck control</a></li>
                                <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                <li><a href="form-typehead.html">Form Typehead</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                                <li><a href="form-summernote.html">Summernote Editor</a></li>
                                <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                            </ul>
                        </li>
                        <li class="active"> <a class="has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse in">
                                <li><a href="table-basic.html">Basic Tables</a></li>
                                <li><a href="table-layout.html">Table Layouts</a></li>
                                <li><a href="table-data-table.html">Data Tables</a></li>
                                <li><a href="table-footable.html">Footable</a></li>
                                <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                                <li><a href="table-responsive.html">Responsive Table</a></li>
                                <li class="active"><a href="table-bootstrap.html" class="active">Bootstrap Tables</a></li>
                                <li><a href="table-editable-table.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.html">Data Widgets</a></li>
                                <li><a href="widget-apps.html">Apps Widgets</a></li>
                                <li><a href="widget-charts.html">Charts Widgets</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.html">1 Column</a></li>
                                <li><a href="layout-fix-header.html">Fix header</a></li>
                                <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                                <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                                <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                <li><a href="layout-logo-center.html">Logo in Center</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge rounded-pill bg-info">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Starter Kit</a></li>
                                <li><a href="pages-blank.html">Blank page</a></li>
                                <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge rounded-pill bg-success pull-right">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.html">Login 1</a></li>
                                        <li><a href="pages-login-2.html">Login 2</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-register2.html">Register 2</a></li>
                                        <li><a href="pages-register3.html">Register 3</a></li>
                                        <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-animation.html">Animation</a></li>
                                <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-treeview.html">Treeview</a></li>
                                <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                <li><a href="pages-search-result.html">Search result</a></li>
                                <li><a href="pages-scroll.html">Scrollbar</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-faq.html">Faqs</a></li>
                                <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.html">400</a></li>
                                        <li><a href="pages-error-403.html">403</a></li>
                                        <li><a href="pages-error-404.html">404</a></li>
                                        <li><a href="pages-error-500.html">500</a></li>
                                        <li><a href="pages-error-503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                <li><a href="chart-echart.html">Echarts</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-chart-js.html">Chartjs</a></li>
                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                                <li><a href="icon-iconmind.html">Mind Icons</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)">item 1.1</a></li>
                                <li><a href="javascript:void(0)">item 1.2</a></li>
                                <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                        <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                        <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                        <li><a href="javascript:void(0)">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">item 1.4</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- SUPPORT</li>
                        <li> <a class="waves-effect waves-dark" href="../documentation/documentation.html" aria-expanded="false"><i class="far fa-circle text-danger"></i><span class="hide-menu">Documentation</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 206px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 40px;"></div></div></div>
            <!-- End Sidebar scroll-->
        </aside> --}}
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
                                <li class="breadcrumb-item active">Order List</li>
                            </ol>
                        </div>
                    </div>
                </div>
    

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Orders</h5>
                                <div class="table-responsive m-t-30">
                                    @if (session('msg'))
                                        <div class="alert alert-success">{{session('msg')}}</div>
                                    @endif
                                    <table class="table product-overview">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                {{-- <th>Order ID</th> --}}
                                                {{-- <th>Customer ID</th> --}}
                                                <th>Customer Name</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Ordered At</th>
                                                {{-- <td>Action</td> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                                $subcount = 1;
                                            @endphp
                                            @foreach ($orders as $key => $order)
                                                <tr style="cursor: pointer" class="show_detail" data-id="{{$order->order_id}}">
                                                    <td>{{$count++}}</td>
                                                    {{-- <td> <img src="{{ asset('images/'.$user->avatar) }}" alt=""></td> --}}
                                                    {{-- <td >{{ $order->order_id}}</td> --}}
                                                    {{-- <td>{{ $order->customer_id}}</td> --}}
                                                    <td>{{ $order->customer_name}}</td>
                                                    <td>{{ $order->customer_address}}</td>
                                                    <td>{{ $order->customer_phone}}</td>
                                                    @switch($order->status)
                                                        @case('0')
                                                            <td>New</td>
                                                            @break
                                                        @case('1')
                                                            <td>Delivering</td>
                                                            @break
                                                        @case('2')
                                                            <td>Received</td>
                                                            @break
                                                    @endswitch
                                                    <td>{{ date('d-m-Y', strtotime($order->created_at))}}</td>
                                                    {{-- <td>
                                                        <div class="button-group">
                                                            <button type="button" class="btn btn-primary delete-account" id="{{ $order->order_id }}">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                                <tr class="order_detail_{{$order->order_id}}"  style="display: none">
                                                    <td colspan="6">
                                                        <div class="order-details" style="display: flex">
                                                            <div class="order-code" style="width: 70%; text-align: left">
                                                                <h4>Order Code: {{$order->order_code}}</h4>
                                                            </div>
                                                            @switch($order->status)
                                                            @case('0')
                                                                <div class="button-group" style="width: 30%; text-align: right">
                                                                    <button type="button" class="btn btn-info delivering" id="{{$order->order_id}}">
                                                                        Delivering
                                                                    </button>
                                                                    <button type="button" class="btn btn-success received" id="{{$order->order_id}}">
                                                                        Received
                                                                    </button>
                                                                </div>
                                                                @break
                                                            @case('1')
                                                                <div class="button-group" style="width: 30%; text-align: right">
                                                                    <button type="button" class="btn btn-success received" id="{{$order->order_id}}">
                                                                        Received
                                                                    </button>
                                                                </div>
                                                                @break
                                                            @case('2')
                                                                @break
                                                            @endswitch
                                                            {{-- <div class="button-group" style="width: 30%">
                                                                <button type="button" class="btn btn-info delivering" id="{{$order->order_id}}">
                                                                    Delivering
                                                                </button>
                                                                <button type="button" class="btn btn-success received" id="{{$order->order_id}}">
                                                                    Received
                                                                </button>
                                                            </div> --}}
                                                        </div>
                                                        <table class="table product-overview">
                                                            
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Image</th>
                                                                    {{-- <th>Order Code</th> --}}
                                                                    {{-- <th>Product ID</th> --}}
                                                                    <th>Product Name</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Sub Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $totalprice = 0;
                                                                @endphp
                                                                @foreach ($order_details as $key => $order_detail)
                                                                
                                                                @if ($order_detail->order_id==$order->order_id)
                                                                @php
                                                                    
                                                                    $subprice = $order_detail->product_price*$order_detail->product_quantity_sale;
                                                                    $totalprice += $subprice;
                                                                @endphp
                                                                
                                                                     <tr>
                                                                        <td>{{$subcount++}}</td>
                                                                        <td><img src="{{ asset('images/'.$order_detail->product_img) }}" alt="{{$order_detail->product_name}}"></td>
                                                                        {{-- <td>{{$order_detail->order_code}}</td> --}}
                                                                        {{-- <td>{{$order_detail->product_code}}</td> --}}
                                                                        <td>{{$order_detail->product_name}}</td>
                                                                        <td>{{number_format($order_detail->product_price,2)}}</td>
                                                                        <td>{{$order_detail->product_quantity_sale}}</td>
                                                                        <td>{{number_format($subprice,2)}}</td>
                                                                     </tr>
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr style="font-weight: bold">
                                                                    <td colspan="5" style="border-right: 2px solid #000; text-align: right;" >
                                                                        <span>Total</span>
                                                                    </td>
                                                                    <td>
                                                                        {{number_format($totalprice,2)}}
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
        </div>
    </div>
    <footer class="footer">
        <i class="fa fa-copyright" aria-hidden="true"></i> 2023 Admin by Group 6
    </footer>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ecom-dashboard.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }} "></script>
    <script src="{{ asset('js/deleteconfirm.js') }}"> </script>
    <script>
        $(document).ready(function(){
            $('.show_detail').on('click', function(){
                let id = $(this).data('id');
                let display = $('.order_detail_'+id).css('display');
                if(display == 'none')
                {   
                    $(this).css({'background-color':'#999'});
                    $('.order_detail_'+id).css({'display':'table-row'});
                }
                if(display == 'table-row')
                {   
                    $(this).css({'background-color':'#fff'});
                    $('.order_detail_'+id).css({'display':'none'});
                }
            });
            $(".delivering").on("click", function(){
                var _ID = $(this).attr('id');
                window.location.href = '/admin/order/set-status-delivering/'+_ID;
            });
            $(".received").on("click", function(){
                var _ID = $(this).attr('id');
                window.location.href = '/admin/order/set-status-received/'+_ID;
            });
        });
    </script>
   
</body>
</html>