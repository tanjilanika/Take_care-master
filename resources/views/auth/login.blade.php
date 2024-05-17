<!DOCTYPE html>
<html lang="en">
<head>
	<title>take_care.login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="{{asset('customlogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('customlogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('customlogin/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form method="POST" action="{{ route('login') }}">
                                  @csrf
					<span class="login100-form-title p-b-55">
						Welcome
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
                      <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                        
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
						<label class="label-checkbox100" for="ckb1">
							{{ __('Remember Me') }}
						</label>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button  type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>


					 @if (Route::has('password.request'))
                                             <a class="btn btn-link" href="{{ route('password.request') }}">
                                               {{ __('Forgot Your Password?') }}
                                            </a>
                                     @endif
				</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="customlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="customlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="customlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="customlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="customlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="customlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="customlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="customlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="customlogin/js/main.js"></script>

</body>
</html>