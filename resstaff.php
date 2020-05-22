<?php
require_once("connect.php");
if(isset($_POST['staff_btn']))
{
	$first =$_POST['first'];
	$last =$_POST['last'];
	$pos =$_POST['pos'];
	if($pos != "User" && $pos != "Manager"){
		echo 'There are only 2 positions to be selected: User or Manager ';
		header("Refresh: 2; url=http://juniata.sunlabdemo.com/vuax16/stafflisting.php");
	}
	else{
		$query= "insert into staff(firstName, lastName, position)values('$first','$last','$pos')";
		$result = mysqli_query($conn,$query);	
		if($result){
			echo 'You successfully added new staff!';
			header("location:stafflisting.php");
		}
		else{
			echo 'Check your code again!';
		}	
	}
}
	
	
?>