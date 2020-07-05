<!DOCTYPE html>
<html>
<head>
	<title>login | {{ config('app_name') }}</title>
	<meta charset="utf-8">
	<style type="text/css">
		* {
	margin: 0;
	padding: 0;
	text-decoration: none;
	font-family: "Segoe UI";
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	background-image: linear-gradient(120deg, #3498db, #8e44ad);
}

.login-form {
	width: 360px;
	background: #f1f1f1;
	height: 580px;
	padding: 80px 40px;
	border-radius: 10px;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
}

.login-form h1 {
	text-align: center;
	margin-bottom: 60px;
}

.logbtn {
	display: block;
	width: 100%;
	height: 50px;
	border: none;
	background: linear-gradient(120deg, #3498db, #8e44ad);
	background-size: 200%;
	color: #fff;
	outline: none;
	cursor: pointer;
	transition: 0.5s;
}

.logbtn:hover {
	background-position: right;
}

.bottom-text {
	margin-top: 60px;
	text-align: center;
	font-size: 13px;
}

.txtb {
	border-bottom: 2px solid #adadad;
	position: relative;
	margin: 30px 0;
}

.txtb input {
	font-size: 15px;
	color: #333;
	border: none;
	width: 100%;
	outline: none;
	background: none;
	padding: 0 5px;
	height: 40px;
}

	</style>
</head>
<body>
<form method="POST" class="login-form" action="{{route('client-login')}}">
	@csrf
	<h1>Login</h1>
	
	<div class="txtb">
	{{$errors->first('email')}}
		<input type="text" placeholder="email" name="email">
	</div>
	
	<div class="txtb">
		  {{$errors->first('password')}}
		<input type="password" placeholder="Password" name="password">
	</div>

	<input type="submit" value="Login" class="logbtn">
	<div class="bottom-text">
		Don't have account? <a href="{{route('client-register-form')}}">Sign up</a>
	</div>
</form>
</body>
</html>