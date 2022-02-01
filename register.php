<?php
 include("includes/handlers/register-handler.php");
 include("includes/handlers/login-handler.php");
 include("includes/classes/Account.php");
 $account=new Account();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome To Spotify!</title>
</head>
<body>
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login To your Account</h2>
			<p>
				<label for="loginUsername">Username</label>
			<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g Suchetana" >
		</p>
		<p>
			<label for="loginPassword">Password</label>
			<input id="loginPassword" name="loginPassword" type="password" placeholder="e.g 1234" >
		</p>
		<button type="submit"name="LoginButton">LOGIN</button>
		</form>
		<form id="registerForm" action="register.php" method="POST">
			<h2>Create Your Free Acoount</h2>
			<p>
				<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="e.g Suchetana" >
		</p>
		<p>
				<label for="firstName">FirstName</label>
			<input id="firstName" name="firstName" type="text" placeholder="e.g Suchetana" >
		</p>
		<p>
				<label for="lastName">LastName</label>
			<input id="lastName" name="lastName" type="text" placeholder="e.g Sarkar" >
		</p>
		<p>
				<label for="email">Email</label>
			<input id="email" name="email" type="email" placeholder="e.g Suchetana@gmail.com" >
		</p>
		<p>
				<label for="email2">Confirm Email</label>
			<input id="email2" name="email2" type="email" placeholder="e.g Suchetana@gmail.com" >
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="e.g 1234" >
		</p>
		<p>
			<label for="password2">Confirm Password</label>
			<input id="password2" name="password2" type="password" placeholder="e.g 1234" >
		</p>

		<button type="submit"name="registerButton">SIGN UP</button>
		</form>
	</div>

</body>
</html>