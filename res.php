<?php
require_once("connect.php");
if(isset($_POST['register_btn']))
{
	$username =$_POST['username'];
	$password1 =$_POST['password1'];
	$password2 =$_POST['password2'];
	$position = "recent user register";
	if($password1 != $password2){
		echo 'The passwords you typed did not match, please do it again';
		header("Refresh: 2; url=http://juniata.sunlabdemo.com/vuax16/register.php");
	}
	else{
		$query= "insert into fullstaff(username, password, usertype)values('$username','$password1','$position')";
		$result = mysqli_query($conn,$query);	
		if($result){
			echo 'You successfully registered! Please login now!';
			header("location:loginform.html");
		}
		else{
			echo 'Check your code again!';
		}	
	}
}
	
	
?>