<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baby Shoes Website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		<link href="{{url('public')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="{{url('public')}}/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="{{url('public')}}/js/simpleCart.min.js"></script>
		<script src="{{url('public')}}/js/jquery-2.1.4.min.js"></script>
		<script src="{{url('public')}}/js/bootstrap.min.js"></script>
        <script src="{{url('public')}}/js/imagezoom.js"></script>
        <script defer src="{{url('public')}}/js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="{{url('public')}}/css/flexslider.css" type="text/css" media="screen" />
            <script>
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
    </head>
    <body>
        @include('section.headerweb')

            @yield('content')

        @include('section.footerweb')
    </body>
</html>