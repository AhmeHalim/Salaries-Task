
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Task </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Fonts -->
        <!-- Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->

        <link rel="stylesheet" href="{{ url('resources/assets/front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('resources/assets/front/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('resources/assets/front/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ url('resources/assets/front/css/animate.css') }}">
        <link rel="stylesheet" href="{{ url('resources/assets/front/css/main.css') }}">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="{{ url('resource/assets/front/css/responsive.css') }}">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

      @yield('content')

      <!-- Js -->
      <script src="{{ url('resources/assets/front/js/vendor/modernizr-2.6.2.min.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/vendor/jquery-1.10.2.min.js') }}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script src="{{ url('resources/assets/front/js/jquery.lwtCountdown-1.0.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/bootstrap.min.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/owl.carousel.min.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/jquery.validate.min.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/jquery.form.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/jquery.nav.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/jquery.sticky.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/plugins.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/wow.min.js') }}"></script>
      <script src="{{ url('resources/assets/front/js/main.js') }}"></script>

  </body>
</html>
