<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ url('asset//dist2/images/') }}">

    <title>{{ isset($title) ? $title : 'Portal Berita Kotha Pro' }}</title>

    <!-- common css -->
    <link rel="stylesheet" href="{{ url('asset/dist2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/style.css') }}">
    <link rel="stylesheet" href="{{ url('asset/dist2/css/responsive.css') }}">
    

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://localhost/laravel/dist2/js/html5shiv.js"></script>
    <script src="http://localhost/laravel/dist2/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ url('asset/dist2/images/favicon.png')}}">
    <script type="text/javascript" src="{{ url('asset/dist2/js/jquery-1.11.3.min.js'  )}}"></script>
    <script type="text/javascript" src="{{ url('asset/dist2/js/bootstrap.min.js'  )}}"></script>
    <script type="text/javascript" src="{{ url('asset/dist2/js/owl.carousel.min.js'  )}}"></script>
    <script type="text/javascript" src="{{ url('asset/dist2/js/jquery.stickit.min.js' )}}"></script>
    <script type="text/javascript" src="{{ url('asset/dist2/js/menu.js'  )}}"></script>
    <script type="text/javascript" src="{{ url('asset/dist2/js/scripts.js' )}}"></script>
    <script type="text/javascript" src="{{ url('asset/dist2/js/map.js')}}"></script>
    <script type="text/javascript">
        /* ==== google map ====*/
        function initialize() {
            var mapOptions = {
                zoom: 14,
                center: new google.maps.LatLng(23.7893837, 90.38596079999999),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            };

            var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7893837, 90.38596079999999),
            });

            marker.setMap(map);
            var infowindow = new google.maps.InfoWindow({
                content: "Our location!"
            });

            infowindow.open(map, marker);

        }
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>