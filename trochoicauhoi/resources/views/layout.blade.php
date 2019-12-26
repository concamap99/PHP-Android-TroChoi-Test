<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>LTD - Admin page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @include('extends/icon')
        @yield('css')
        @include('sweetalert::alert')
        @include('extends/app-css')
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/').'/'.Auth::user()->anh_dai_dien }} " alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{Auth::user()->ho_ten}}
                                    <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a href="{{ route('admin-profile') }}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Tài khoản của tôi</span>
                                </a>
                                <!-- item-->
                                <a href="{{ route('lock') }}" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Màn hình khóa</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="/dang-xuat" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{route('dashboard')}}" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-cerbercus.png') }}" alt="" height="26">
                                <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="28">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li>
                                <a href="/">
                                    <i class="la la-dashboard"></i>Dashboards </a>
                               
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="la la-cube"></i>Lĩnh vực <div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="/linh-vuc"><i class="fas fa-atom"></i> Danh sách lĩnh vực</a>
                                    </li>
                                     <li>
                                        <a href="/linh-vuc/thung-rac"><i class="fe-trash-2"></i> Thùng rác</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="la la-clone"></i>Câu hỏi <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="/cau-hoi"><i class="fas fa-atom"></i> Danh sách câu hỏi</a>
                                    </li>
                                    <li>
                                        <a href="/cau-hoi/thung-rac"><i class="fe-trash-2"></i> Thùng rác</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="fe-users"></i>Người chơi <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="/nguoi-choi"><i class="fas fa-atom"></i> Danh sách người chơi</a>
                                    </li>
                                    <li>
                                        <a href="/nguoi-choi/thung-rac"><i class="fe-trash-2"></i> Thùng rác</a>
                                    </li>
                                </ul>
                            </li>
                             <li class="has-submenu">
                                <a href="#"> <i class="fe-credit-card"></i>Gói Credit <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="/goi-credit"><i class="fas fa-atom"></i> Danh sách gói Credit</a>
                                    </li>
                                    <li>
                                        <a href="/goi-credit/thung-rac"><i class="fe-trash-2"></i> Thùng rác</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"> <i class="fe-settings"></i>Cấu hình <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="/cau-hinh/diem-cau-hoi"><i class="fas fa-atom"></i> Điểm câu hỏi</a>
                                    </li>
                                    <li>
                                        <a href="/cau-hinh/app"><i class="fas fa-atom"></i> App</a>
                                    </li>
                                    <li>
                                        <a href="/goi-credit/thung-rac"><i class="fas fa-atom"></i> Trợ giúp</a>
                                    </li>
                                    <li class="has-submenu">
                                       <a href="#"><i class="fe-trash-2"></i> Thùng rác <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="">Điểm câu hỏi</a>
                                            </li>
                                            <li>
                                                <a href="">Trợ giúp</a>
                                            </li>
                                        </ul>

                                    </li>
                                </ul>
                            </li>

                            
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                @yield('main-content')
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-2.jpg') }}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-3.jpg') }}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-4.jpg') }}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-5.jpg') }}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{ asset('assets/images/users/user-6.jpg') }}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        @include('extends/js')
        @yield('js')
        <!--Sweet Alert -->
        <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
        
    </body>
</html>