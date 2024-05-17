<!DOCTYPE html>
<html lang="en">
<head>
	<title>take_care.home</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
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
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: 	#660066;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #efbbff;
  color: black;
}

.topnav .icon {
  display: none;
}

.title {
  position: absolute;
  left: 180px;
  top: 100px;
  font-size: 100px;
  }

  .button {
                    background-color: #efbbff;
                    border: 2px solid black;
                    color: black;
                    padding: 10px 30px;
                    font-size: 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 16px;
                    }

                    .button:hover {
                    background-color: #cc6bcc;
                    }

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

</head>

<div id="dropDownSelect1"></div>

<div class="topnav" id="myTopnav">
  <a href="/home" class="active">
    <i class="fa fa-fw fa-home"></i>Home
  </a>
  <a href="{{route('product.product_shop')}}" >Products</a>
  
  <li class="nav-item">
    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="top-right link"><i class="fa fa-fw fa-user"></i>{{ __('Logout') }}</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
  </li>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
<div class="container-login100" style="background-image: url('customlogin/images/bg-01.jpg');">

  <div class="content">
    <div class="title m-b-md">
       Welcome To Take-Care
    </div>
  </div>
  <a href="{{route('product.product_shop')}}">
    <button class="button">Shop Now</button></a>
  
     
  </div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	
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