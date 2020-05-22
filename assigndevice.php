<?php
require_once("connect.php");
$query = "select * from fullstaff";
$result = mysqli_query($conn,$query); 



if(isset($_POST['assignbut']))
{
	$deviceID = $_GET['ID'];
	$userselected = $_POST['assign'];
	//This loop is working, I still don't know how to clean it up yet since it is priting the same amount as the number of users
	while($row=mysqli_fetch_assoc($result)){
		$user = $row['username'];
		if($user != $userselected){
			echo 'This user do not exist. We are redirecting you to devices page again.';
			header("Refresh:3; url=http://juniata.sunlabdemo.com/vuax16/listingDevices.php");
		}
		else{
			echo 'You have added user to device #ID '.$deviceID; echo ' user '.$user;
			$query1 = " update devices set Assign='".$userselected."' where ID='".$deviceID."'";
			$result1 = mysqli_query($conn,$query1);
			if($result1){
				// echo 'You have added user to device #ID '.$deviceID; echo ' user '.$user;
				header("Refresh:3; url=http://juniata.sunlabdemo.com/vuax16/listingDevices.php");
			}
			else{
				// echo 'Check your query again! Or, there might be a blank section you have not changed anything';
				header("Refresh:3;url=http://juniata.sunlabdemo.com/vuax16/assign.php");
			}
		}
	}
}
else
{
	header("location:http://juniata.sunlabdemo.com/vuax16/listingDevices.php");
}


?>