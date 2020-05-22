<?php

require_once("connect.php");

if(isset($_POST['updateuser']))
{
	$userID = $_GET['ID'];
	$user = $_POST['username'];
	$pos = $_POST['position'];
	
	$query = " update fullstaff set username='".$user."', usertype='".$pos."' where ID='".$userID."'";
	$result = mysqli_query($conn,$query);
	if($result){
		echo 'You have updated informations of user #ID: '.$userID;
		header("Refresh:3; url=http://juniata.sunlabdemo.com/vuax16/userlist.php");
	}
	else{
		echo 'Check your query again! Or, there might be a blank section you have not changed anything';
		header("Refresh:3;url=http://juniata.sunlabdemo.com/vuax16/edituser.php");
	}
}
else
{
	header("location:http://juniata.sunlabdemo.com/vuax16/edituser.php");
}


?>