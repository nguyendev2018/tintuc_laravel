<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
  
    <base href="{{asset('/')}}">

    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="stylesheet" href="css/switcher.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/color.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- SWITCHER-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <script>
        (function(H) {
            H.className = H.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement)
    </script>
</head>

<body>
            @include("header")
            @yield("content")
            @yield("tinmoitheoloai")
            @yield("noidungchinh")
            @yield("noidungtin")
            @yield("nghethuatsong")
            @yield("tinmoi")
            @yield('thugian')
            @yield('tinxahoi')
            @yield('thegioiweb')
            </div>   
        </div>
        @include("footer")
        @include("menumobile")
        <script src="js/main.js"></script>
        <script src="js/separate-js/custom.js"></script>
        <script src="plugins/3d-bold-navigation/main.js"></script>
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <script src="plugins/slider-pro/jquery.sliderPro.js"></script>
        <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="plugins/prettyphoto/jquery.prettyPhoto.js"></script>
        <script src="plugins/bootstrap-select/bootstrap-select.js"></script>
        <script src="plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="plugins/doubletaptogo.js"></script>
        <script src="plugins/waypoints.min.js"></script>
        <script src="plugins/news-ticker/js/endlessRiver.js"></script>
        <script src="plugins/datetimepicker/jquery.datetimepicker.js"></script>
        <script src="plugins/flexslider/jquery.flexslider.js"></script>
        <script src="plugins/jarallax/jarallax.js"></script>
        <script src="plugins/scrollreveal/scrollreveal.js"></script>
        <script src="plugins/classie.js"></script>
        <script>
        $("img").error(function(){
            $(this).attr("src","http://placehold.it/200x200")
        })
        </script>
</body>

</html>