<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Marketplace - Menus</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

  <link rel="icon" type="image/png" href="favicon.ico/">
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" href="apple-touch-icon.png/">
  <link rel="stylesheet" href="template/css/font-awesome.min.css">
  <link rel="stylesheet" href="template/css/jquery-ui.css">

  <link rel="stylesheet" href="template/css/bootstrap.min.css">
  <link rel="stylesheet" href="template/css/animate.css">
  <link rel="stylesheet" href="template/css/iconfont.css">
  <link rel="stylesheet" href="template/css/isotope.css">
  <link rel="stylesheet" href="template/css/magnific-popup.css">
  <link rel="stylesheet" href="template/css/owl.carousel.min.css">
  <link rel="stylesheet" href="template/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="template/css/vertical-menu.css">
  <link rel="stylesheet" href="template/css/navigation.min.css">


  <!--For Plugins external css-->
  <link rel="stylesheet" href="template/css/plugins.css">

  <!--Theme custom css -->
  <link rel="stylesheet" href="template/css/style.css">

  <!--Theme Responsive css-->
  <link rel="stylesheet" href="template/css/responsive.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>
  <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- topBar section -->
  <div class="xs-top-bar version-gray d-none d-md-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <ul class="xs-top-bar-info">
                <li><a href="#"><i class="icon icon-van "></i>Free Delivery</a></li>
                <li><a href="#">Return Policy</a></li>
              </ul><!-- .xs-top-bar-info END -->
            </div>
            <div class="col-lg-6">
              <ul class="xs-social-list">
                <li class="xs-list-text">Follow Us</li>
                <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul><!-- .xs-social-list END -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="xs-top-bar-info right-content">
            <li>
              <select name="money" class="xs-select">
                <option value="">Select</option>
                <option value="usd">USD</option>
                <option value="eur">EUR</option>
              </select>
            </li>
            <li>
              <select name="language" class="xs-select">
                <option value="">Select</option>
                <option value="eng">English</option>
                <option value="rus">Russian</option>
                <option value="spn">Spain</option>
              </select>
            </li>
            <li><a href="#" data-toggle="modal" data-target=".xs-modal">Login</a></li>
          </ul><!-- .xs-top-bar-info END -->
        </div>
      </div><!-- .row END -->
    </div><!-- .container END -->
  </div>

  <!-- xs modal -->
  <div class="modal xs-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="icon icon-cross"></span>
        </button>
        @auth
        {{ Auth::user()->id }}
        @endauth
        @guest
        <ul class="nav nav-tabs xs-tab-nav" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#login" role="tab" data-toggle="tab">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#signup" role="tab" data-toggle="tab">
              Signup
            </a>
          </li>
        </ul><!-- xs-tab-nav -->
        @endguest

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="login">
            <form action="#" method="POST" class="xs-customer-form">
              <div class="input-group input-group-append">
                <input type="text" class="form-control" placeholder="Enter Your Username">
                <i class="icon icon-profile-male input-group-text"></i>
              </div>
              <div class="input-group input-group-append">
                <input type="password" class="form-control" placeholder="Enter Your Password">
                <i class="icon icon-key2 input-group-text"></i>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <p>or</p>
              <a href="#" class="btn btn-info btn-block">Login with your facebook</a>
              <a href="#" class="btn btn-danger btn-block">Login with your google+</a>
            </form><!-- .xs-customer-form END -->
          </div><!-- tab-pane #login -->
          <div role="tabpanel" class="tab-pane fadeInRights fade" id="signup">
            <form action="{{ route('user.store') }}" method="POST" class="xs-customer-form">
              @csrf
              <div class="input-group input-group-append">
                <input type="text" name="username" class="form-control" value="{{old('username')}}"
                  placeholder="Enter your username">
                <i class="icon icon-profile-male input-group-text"></i>
              </div>
              <div class="input-group input-group-append">
                <input type="email" name="email" class="form-control" value="{{old('email')}}"
                  placeholder="Enter your email">
                <i class="icon icon-envelope2 input-group-text"></i>
              </div>
              <div class="input-group input-group-append">
                <input type="password" name="password" class="form-control" value="" placeholder="Enter your password">
                <i class="icon icon-key2 input-group-text"></i>
              </div>
              <div class="input-group input-group-append">
                <input type="password" name="password_confirmation" class="form-control" value=""
                  placeholder="Enter your confirm password">
                <i class="icon icon-key2 input-group-text"></i>
              </div>
              <div class="input-group input-group-append">
                @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
                @endforeach
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <p>or</p>
              <a href="#" class="btn btn-info btn-block">Login with your facebook</a>
              <a href="#" class="btn btn-danger btn-block">Login with your google+</a>
            </form><!-- .xs-customer-form END -->
          </div><!-- tab-pane #signup -->
        </div><!-- tab-content -->
      </div>
    </div>
  </div><!-- End xs modal -->
  <!-- End topBar section -->

  <!-- header section -->
  <header class="xs-header">
    <!-- nav bar section -->
    <div class="xs-navBar">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-4 xs-order-1">
            <div class="xs-logo-wraper">
              <a href="">
                mygearlive
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-sm-3 xs-order-3 xs-menus-group">
            <form class="xs-navbar-search" method="get" action="#">
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Find your product">
                <div class="xs-category-select-wraper">
                  <select class="xs-category-select">
                    <option value="0">All Categories</option>
                    <option value="women's-clothing-accessories">Women's Clothing &amp; Accessories</option>
                    <option value="men's-clothing-accessories">Men's Clothing &amp; Accessories</option>
                    <option value="cellphones-telecommunications">Cellphones &amp; Telecommunications</option>
                    <option value="computer-office">Computer &amp; Office</option>
                    <option value="consumer-electronics">Consumer Electronics</option>
                    <option value="jewelry-accessories">Jewelry &amp; Accessories</option>
                    <option value="home-garden">Home &amp; Garden</option>
                    <option value="luggage-bags">Luggage &amp; Bags</option>
                    <option value="shoes">Shoes</option>
                    <option value="mother-kids">Mother &amp; Kids</option>
                    <option value="sports-entertainment">Sports &amp; Entertainment</option>
                    <option value="beauty-health">Beauty &amp; Health</option>
                    <option value="watches">Watches</option>
                    <option value="toys-hobbies">Toys &amp; Hobbies</option>
                    <option value="weddings-events">Weddings &amp; Events</option>
                    <option value="novelty-special-use">Novelty &amp; Special Use</option>
                    <option value="automobiles-motorcycles">Automobiles &amp; Motorcycles</option>
                    <option value="lights-lighting">Lights &amp; Lighting</option>
                    <option value="furniture">Furniture</option>
                    <option value="electronic-components-supplies">Electronic Components &amp; Supplies</option>
                    <option value="office-school-supplies">Office &amp; School Supplies</option>
                    <option value="home-appliances">Home Appliances</option>
                    <option value="home-improvement">Home Improvement</option>
                    <option value="security-protection">Security &amp; Protection</option>
                    <option value="tools">Tools</option>
                    <option value="hair-extensions-wigs">Hair Extensions &amp; Wigs</option>
                  </select>
                </div>
                <div class="input-group-btn">
                  <input type="hidden" id="search-param" name="post_type" value="product">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-sm-5 xs-order-2 xs-wishlist-group">
            <div class="xs-wish-list-item">
              <span class="xs-wish-list">
                <a href="#" class="xs-single-wishList d-none d-md-none d-lg-block">
                  <span class="xs-item-count">0</span>
                  <i class="icon icon-heart"></i>
                </a>
              </span>
              <span class="xs-wish-list">
                <a href="compare.html" class="xs-single-wishList d-none d-md-none d-lg-block">
                  <span class="xs-item-count">0</span>
                  <i class="icon icon-arrows"></i>
                </a>
              </span>
              <div class="dropdown dropright xs-miniCart-dropdown">
                <a href="#" class="xs-single-wishList offset-cart-menu">
                  <span class="xs-item-count highlight">3</span>
                  <i class="icon icon-bag"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- .row END -->
      </div><!-- .container END -->
    </div> <!-- End nav bar section -->

    <!-- nav category -->
    <div class="xs-navCate d-none d-md-none d-lg-block">
      <div class="container">
        <ul class="xs-nav-cate clearfix">
          <li>
            <a href="#"><i class="icon icon-screen"></i> Accessories</a>
          </li>
          <li>
            <a href="#"><i class="icon icon-school"></i>Bags</a>
          </li>
          <li>
            <a href="#"><i class="icon icon-photo-camera"></i>Cameras</a>
          </li>
          <li>
            <a href="#"><i class="icon icon-tshirt"></i>Clothings</a>
          </li>
          <li>
            <a href="#"><i class="icon icon-light-bulb-1"></i>Electronics</a>
          </li>
          <li>
            <a href="#"><i class="icon icon-brush"></i>Drawing</a>
          </li>

        </ul>
      </div><!-- .container END -->
    </div> <!-- End nav category -->
  </header>
  <!-- End header section -->
</body>

<!-- js file start -->
<script src="template/js/jquery-3.2.1.min.js"></script>
<script src="template/js/jquery-ui.js"></script>
<script src="template/js/modernizr.js"></script>
<script src="template/js/plugins.js"></script>
<script src="template/js/Popper.js"></script>
<script src="template/js/bootstrap.min.js"></script>
<script src="template/js/isotope.pkgd.min.js"></script>
<script src="template/js/jquery.magnific-popup.min.js"></script>
<script src="template/js/owl.carousel.min.js"></script>
<script src="template/js/jquery.menu-aim.js"></script>
<script src="template/js/vertical-menu.js"></script>
<script src="template/js/tweetie.js"></script>
<script src="template/js/echo.min.js"></script>
<script src="template/js/jquery.ajaxchimp.min.js"></script>
<script src="template/js/jquery.countdown.min.js"></script>
<script src="template/js/jquery.waypoints.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="template/js/spectragram.min.js"></script>
<script src="template/js/main.js"></script> <!-- End js file -->

</html>
