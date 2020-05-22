<?php
require_once("connect.php");

// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);

$userID = $_GET['GetuserID'];
$query = "select * from fullstaff where ID='".$userID."'";
$result = mysqli_query($conn,$query); 

while($row=mysqli_fetch_assoc($result)){
	$userID = $row['ID'];
	$password = $row['password'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Changing Password</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
		<div class="header">
			<h2>Change your password</h2>
		</div>
		<form action="passwordchange.php?ID=<?php echo $userID ?>" method="post" >
			<div class="input-group">
				<label>New password</label>
				<input type="password" name="password_2" value ="">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_3" value ="">
			</div>
			<div class="input-group">
				<button type="submit" class="btn-login" name="newpassword">Submit</button>
			</div>
			<p>
				Change your mind? Please sign in again for security issue! <a href="loginform.html">Sign in</a>
			</p>
		</form>
</div>
</body>
</html>