<!DOCTYPE html>
<html>
<head>
	<title>signup | {{config('app_name')}}</title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Verdana;
}
body{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background: #111;
}
.signup{
	width: 35%;
	background: #f5f5f5;
	height: auto;
	padding: 2em;
	border-radius: 5px;
}
.signup input{
	margin: .1em 0 1em 0;
	padding: .3em;
	border: none;
	background: #f5f5f5;
	border-bottom: 1px solid #4CAF50;
	width: 100%;
	color: #00796B;
	font-size: 1em;
	
}
.signup input:focus{
	outline: none;
	animation: borderr 2s !important;
}
.signup a{
	text-decoration: none;
	color: #f5f5f5;
	display: inline-block;
	padding: 1em;
	background: #4CAF50;
	transition: transform 1s;
	border-radius: 2px;
}
.signup a:hover{
	transition: transform 1s, background 1s;
	background: #00796B;
	transform: scale(.8);
}
.subutton{
	margin-top: .4em;
	display: flex;
	width: 100%;
	justify-content: center;
}
@keyframes borderr{
	0%{
		width: 0%;
		border-color: #00796B;
	}
	100%{
		width: 100%;
		border-color: #00796B;
	}
}
	</style>
	
	<div class="signup">
		<form method="POST" action="{{route('client-register')}}">
			@csrf
		<span>name:</span><br>
		<input type="text" id="name" name="name"><br>
		{{$errors->first('name')}}<br>
		<span>email:</span><br>
		<input type="email" id="email" name="email"><br>
		{{$errors->first('email')}}<br>
		<span>password:</span><br>
		<input type="password" id="password" name="password"><br>
		{{$errors->first('password')}}<br>

	
		
		<div class="subutton">
			<button type="submit" class="btn btn-primary"> register</button>
		</div>
		</form>
	</div>

</body>
</html>