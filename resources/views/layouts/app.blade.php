<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- All Required Components -->
	<link rel="icon" type="image/png" href="#"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/vendor/animate/animate.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="components/css/util.css">
  	<link rel="stylesheet" type="text/css" href="components/css/main.css">
  <!--===============================================================================================-->
  	<style>
  		#particles-js{
  			background-color:#1c1d1e;
  			background-image:url('components/js/particles/assets/aesthetic.jpg');
  			background-image:url(http://vincentgarreau.com/particles.js/assets/img/kbLd9vb_new.gif);
  			background-size:60%;
  			background-position: 3 30%;
  			background-repeat: no-repeat;
  		}
  		#particles-js canvas{
  			position: absolute;
  			z-index: 1;
  		}
  	</style>

</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
<!--===============================================================================================-->
	<script src="components/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="components/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="components/vendor/bootstrap/js/popper.js"></script>
	<script src="components/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="components/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="components/vendor/daterangepicker/moment.min.js"></script>
	<script src="components/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="components/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="components/js/main.js"></script>
<!-- ParticleJS -->
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script type="text/javascript">
		particlesJS.load('particles-js', 'components/js/particles/assets/particles.json', function() {
			console.log('callback - particles.js config loaded');
		});
	</script>
</html>
