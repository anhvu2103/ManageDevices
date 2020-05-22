<?php
require_once("connect.php");
// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);

if(isset($_GET['DeleteID']))
{
	$deviceID = $_GET['DeleteID'];
	$query = "delete from devices where ID='".$deviceID."'";
	$result = mysqli_query($conn,$query);
	
	if(result){
		header("location:listingDevices.php");
	}
	else{
		echo 'Some thing is wrong with your query. Please wait 3 seconds to go back to listing devices page.';
		header("Refresh: 3; listingDevices.php");
	} 
}



?>