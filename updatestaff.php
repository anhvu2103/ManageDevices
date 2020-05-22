<?php

require_once("connect.php");

if(isset($_POST['updatestaff']))
{
	$staffID = $_GET['ID'];
	$first = $_POST['firstName'];
	$last = $_POST['lastName'];
	$pos = $_POST['position'];
	
	$query = " update staff set firstName='".$first."', lastName='".$last."', position='".$pos."' where ID='".$staffID."'";
	$result = mysqli_query($conn,$query);
	if($result){
		echo 'You have updated staff ID: '.$staffID;
		header("Refresh:3; url=http://juniata.sunlabdemo.com/vuax16/stafflisting.php");
	}
	else{
		echo 'Check your query again! Or, there might be a blank section you have not changed anything';
		header("Refresh:3;url=http://juniata.sunlabdemo.com/vuax16/editstaff.php");
	}
}
else
{
	header("location:http://juniata.sunlabdemo.com/vuax16/editstaff.php");
}


?>