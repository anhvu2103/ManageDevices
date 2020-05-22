<?php
require_once("connect.php");

if(isset($_GET['DeletestaffID']))
{
	$staffID = $_GET['DeletestaffID'];
	$query = "delete from staff where ID='".$staffID."'";
	$result = mysqli_query($conn,$query);
	
	if(result){
		header("location:stafflisting.php");
	}
	else{
		echo 'Some thing is wrong with your query. Please wait 3 seconds to go back to staff listing page.';
		header("Refresh: 3; url = http://juniata.sunlabdemo.com/vuax16/stafflisting.php");
	} 
}



?>