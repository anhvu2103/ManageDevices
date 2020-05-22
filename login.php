<?php
require_once("connect.php");
$username =$_POST['user'];
$password =$_POST['pass'];  

$username = stripcslashes($username);
$password = stripcslashes($password);
// $username = mysqli_real_escape_String($username);
// $password = mysqli_real_escape_string($password);
$query = "select * from fullstaff where username = '$username' and password = '$password'";

$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password && ($row['usertype'] == "user" || $row['usertype'] == "recent user register")){
	echo "Login success!!! Hello user: ".$row['username']; echo ". Your position: ".$row['usertype'];
	echo ". You are being redirected to Devices Listing Page..";
	header("Refresh:5; url=http://juniata.sunlabdemo.com/vuax16/listingDevices.php");
}
else if($row['username'] == $username && $row['password'] == $password && $row['usertype'] == "manager"){
	echo "Login success!!! Hello user: ".$row['username']; echo ". Your position: ".$row['usertype'];
	echo ". You are being redirected to Staff Listing Page..";
	header("Refresh:5; url=http://juniata.sunlabdemo.com/vuax16/userlist.php");
}
else{
	echo "Failed to login.. Please wait 5 seconds to try login again";
	header("Refresh:5; url=http://juniata.sunlabdemo.com/vuax16/loginform.html");
}

?>