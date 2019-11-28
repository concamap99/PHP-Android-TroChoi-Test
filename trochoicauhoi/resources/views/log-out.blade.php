<head>
    <meta charset="utf-8">
    <title>Upvex - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('extends/icon')
    @include('extends/app-css')
</head>
<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">
                    
                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="26"></span>
                            </a>
                        </div>

                        <div class="text-center">
                            <div class="mt-4">
                                <div class="logout-checkmark">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                        <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"></circle>
                                        <polyline class="path check" fill="none" stroke="#4bd396" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "></polyline>
                                    </svg>
                                </div>
                            </div>

                            <h3>Hẹn gặp lại !</h3>

                            <p class="text-muted font-13"> Bạn đã đăng xuất thành công. </p>
                        </div>

                    </div> <!-- end card-body -->

                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Trở về <a href="{{route('dangnhap')}}" class="text-muted ml-1"><b class="font-weight-semibold">Đăng nhập</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<footer class="footer footer-alt">
    2019 © Upvex theme by <a href="" class="text-muted">Coderthemes</a> 
</footer>
@include('extends/js')
</body>