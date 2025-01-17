
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('ui/frontend/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('ui/frontend/css/font-awesome.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('ui/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('ui/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('ui/frontend/css/responsive.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

 <!-- End site branding area -->

<!-- Session Status -->




<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-bottom: 3rem">
            <h2 class="text-center" style="margin-top: 2rem">Login</h2>

        <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="FormControlInput" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="FormControlInput" placeholder="Enter your user email">
                </div>

                <div class="mb-3">
                    <label for="FormControlInput" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="FormControlInput" placeholder="Enter your user password">
                </div>
                <button type="submit" class="btn btn-success">submit</button>
            </form>

        </div>

    </div>

</div>



<div class="footer-bottom-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="copyright">
                                                <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="footer-card-icon">
                                                <i class="fa fa-cc-discover"></i>
                                                <i class="fa fa-cc-mastercard"></i>
                                                <i class="fa fa-cc-paypal"></i>
                                                <i class="fa fa-cc-visa"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

<!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="{{asset('ui/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('ui/frontend/js/jquery.sticky.js')}}"></script>

<!-- jQuery easing -->
<script src="{{asset('ui/frontend/js/jquery.easing.1.3.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('ui/frontend/js/main.js')}}"></script>

<!-- Slider -->
<script type="text/javascript" src="{{asset('ui/frontend/')}}js/bxslider.min.js"></script>
<script type="text/javascript" src="{{asset('ui/frontend/js/script.slider.js')}}"></script>
</body>
</html>




