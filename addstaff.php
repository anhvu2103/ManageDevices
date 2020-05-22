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
		<form method="post" action="resstaff.php">
			<div class="input-group">
				<label>First Name</label>
				<input type="text" name="first" >
			</div>
			<div class="input-group">
				<label>Last Name</label>
				<input type="text" name="last" >
			</div>
			<div class="input-group">
				<label>Position</label>
				<input type="text" name="pos">
			</div>
			<div class="input-group">
				<button type="submit" class="btn-login" name="staff_btn">Submit</button>
			</div>
		</form>
</div>
</body>
</html>