<?php

require_once("connect.php");
// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);
if(isset($_POST['update']))
{
	$deviceID = $_GET['ID'];
	$Tag = $_POST['serviceTag'];
	$model = $_POST['model'];
	$type = $_POST['type'];
	$purchasedate = $_POST['purchasedate'];
	$provider = $_POST['provider'];
	$expiration = $_POST['expiration'];	
	$retire; 
	
	// handle checked or unchecked for retire textbox
	if(isset($_POST['retired'])){
		$retire = $_POST['retired'];
	}else{
		$retire = 0;
	}
	$query = " update devices set Model='".$model."', Type='".$type."', Date='".$purchasedate."', 
	Provider ='".$provider."', Expiration='".$expiration."', Retire='".$retire."' where ID='".$deviceID."'";
	$result = mysqli_query($conn,$query);
	if($result){
		header("location:listingDevices.php");
	}
	else{
		echo 'Check your query again! Or, there might be a blank section you have not changed anything';
	}
}
else
{
	header("location:listingDevices.php");
}


?>