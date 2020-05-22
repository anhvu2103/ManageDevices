<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h2>You are registering for new user</h2>
		</div>
		<form method="post" action="res.php">
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password2">
			</div>
			<div class="input-group">
				<button type="submit" class="btn-login" name="register_btn">Register</button>
			</div>
			<p>
				Already a member? <a href="loginform.html">Sign in</a>
			</p>
		</form>
</div>
</body>
</html>