<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Amanda">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/amanda/img/amanda-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/amanda">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Quản trị</title>
    <base href="{{asset('/')}}">

    <!-- vendor css -->
    <link href="{{asset('lib')}}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('lib')}}/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('lib')}}/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('lib')}}/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="{{asset('lib')}}/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{asset('css')}}/amanda.css">
    <script src="{{asset('lib')}}/jquery/jquery.js"></script>
    @yield('jsscript')
  </head>

  <body>

    <div class="am-header">
      <div class="am-header-left">
        <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <a href="?  " class="am-logo"><img src="upload/images/logo4.png" alt="Logo" class="logo__img img-responsive center-block" style="width: 50px;
                                        height: 50px;" /></a>
      </div><!-- am-header-left -->

      <div class="am-header-right">
   
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name"><span class="hidden-xs-down">{{ Auth::user()->name }}</span> <i class="fa fa-angle-down mg-l-3"></i></span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="{{URL::TO('/logout')}}"><i class="icon ion-power"></i> Đăng xuất</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- am-header-right -->
    </div><!-- am-header -->

    <?=View::make('quantri.menu')?>

    <div class="am-mainpanel">
      <div class="am-pagetitle">
        <h5 class="am-title">@yield('pagetitle')</h5>
      </div><!-- am-pagetitle -->

      <div class="am-pagebody">
      @yield('main')

      </div><!-- am-pagebody -->
    </div><!-- am-mainpanel -->

    <script src="{{asset('lib')}}/popper.js/popper.js"></script>
    <script src="{{asset('lib')}}/bootstrap/bootstrap.js"></script>
    <script src="{{asset('lib')}}/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{asset('lib')}}/jquery-toggles/toggles.min.js"></script>
    <script src="{{asset('lib')}}/d3/d3.js"></script>
    <script src="{{asset('lib')}}/rickshaw/rickshaw.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="{{asset('lib')}}/gmaps/gmaps.js"></script>
    <script src="{{asset('lib')}}/Flot/jquery.flot.js"></script>
    <script src="{{asset('lib')}}/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('lib')}}/Flot/jquery.flot.resize.js"></script>
    <script src="{{asset('lib')}}/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{asset('js')}}/amanda.js"></script>
    <script src="{{asset('js')}}/ResizeSensor.js"></script>
    <script src="{{asset('js')}}/dashboard.js"></script>
  </body>
</html>
