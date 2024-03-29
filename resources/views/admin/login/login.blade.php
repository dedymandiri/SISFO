<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN ADMIN</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{ asset('admin/docs/assets/img/logo sekolah.png') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" style="margin-top:-100px;">
		<div class="container-login100" style="background-image: url('admin/login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="/login/proses/" method="post">
					{{ csrf_field() }}
					<div class="login100-form-avatar">
						<img src="{{ asset('admin/docs/assets/img/logo sekolah.png') }}" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">SISFO Admin</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						@if($errors->has('username'))
              			<label style="color:red" class="login-field-icon fui-user" for="login-name">Username Jangan kosong!</label>
                		@endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						@if($errors->has('password'))
                		<label style="color:red" class="login-field-icon fui-user" for="login-name">Password Jangan kosong!</label>
                		@endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">Login</button>
						@if(Session::has('failed'))
  						<p style="color:red">Username Atau Password Anda Salah!</p>
  						@endif
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
					<!-- 	<a href="#" class="txt1">
							Forgot Username / Password?
						</a> -->
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
	</script>

	
<!--===============================================================================================-->	
	<script src="{{ asset('admin/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('admin/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/js/main.js') }}"></script>

</body>
</html>