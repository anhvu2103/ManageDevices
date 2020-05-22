<?php

require_once("connect.php");

if(isset($_POST['newpassword']))
{
	$userID = $_GET['ID'];
	$password1 = $_POST['password_2'];
	$password2 = $_POST['password_3'];

	if($password1 != $password2){
		echo 'New password did not match when retyped';
		header("Refresh:3;url=http://juniata.sunlabdemo.com/vuax16/userlist.php");
	}
	else{
		$query = " update fullstaff set password='".$password1."' where ID='".$userID."'";
		$result = mysqli_query($conn,$query);
		if($result){
			echo 'You have changed your password! Wait and login again.';
			header("Refresh:3; url=http://juniata.sunlabdemo.com/vuax16/loginform.html");
		}
		else{
			echo 'Check your query again! Or, there might be a blank section you have not changed anything';
			header("Refresh:3;url=http://juniata.sunlabdemo.com/vuax16/register.php");
		}
	}
}
else{	
	header("location:http://juniata.sunlabdemo.com/vuax16/loginform.html");
}

?>