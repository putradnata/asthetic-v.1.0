<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>ＡＥＳＴＨＥＴＩＣ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			background-size:50%;
			background-position: 0 0%;
			background-repeat: no-repeat;
		}
		#particles-js canvas{
			position: absolute;
			z-index: 1;
		}
	</style>
</head>
<body>
	<div class="limiter">
			<div class="container-login100" id="particles-js">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="z-index:2;">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-49">
							Ｌ　Ｏ　Ｇ　Ｉ　Ｎ
						</span>

						<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
							<span class="label-input100">Username</span>
							<input class="input100" type="text" name="username" placeholder="Type your username">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="pass" placeholder="Type your password">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>

						<div class="text-right p-t-8 p-b-31">
							<a href="#">
								Dont have account? Sign Up here
							</a>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn">
									Login
								</button>
							</div>
						</div>

					</form>
				</div>
			</div>
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
