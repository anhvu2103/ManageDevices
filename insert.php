<?php

require_once("connect.php");
if(isset($_POST['submit']))
{
	if(isset($_POST['retired']))
	{
		$retire = $_POST['retired'];
	}else
	{
		$retire = 0;
	}
	if(empty($_POST['serviceTag']))
	{
		$serviceTag = $_POST['mulserviceTag'];
	}
	else
	{
		$serviceTag = $_POST['serviceTag'];
	}
	if(empty($_POST['model']) || empty($_POST['type']) || empty($_POST['purchasedate']) || empty($_POST['provider']) || empty($_POST['expiration']))
	{
		//debugging section
		echo $_POST['serviceTag'];
		echo $_POST['mulserviceTag'];
		echo $_POST['model'];
		echo $_POST['type'];
		echo $_POST['purchasedate'];
		echo $_POST['provider'];
		echo $_POST['expiration'];
		echo ' Please fill in the blank';
	} 
	else{
		// if ($_POST['serviceTag'])
// 		{
// 			$serviceTag = $_POST['serviceTag'];
// 		}
// 		else
// 		{
// 			$serviceTag = $_POST['mulserviceTag'];
// 			$r = implode(",",$serviceTag);
// 			echo $r;
// 		}
		//handle multiple tags
		// if($serviceTag = $_POST['mulserviceTag']){
		// 	$array = explode(',',$serviceTag);
		// 	foreach($array as $tags){
		// 		$serviceTag = $tags;
		// 	}
		// }
		$serviceTag;
		$model = $_POST['model'];
		$type = $_POST['type'];
		$purchasedate = $_POST['purchasedate'];
		$provider = $_POST['provider'];
		$expiration = $_POST['expiration'];	
		$retire;

		$query= "insert into devices(Tag, Model, Type, Date, Provider, Expiration,
		Retire,Assign)values('$serviceTag','$model','$type','$purchasedate','$provider','$expiration','$retire','')";
		$result = mysqli_query($conn,$query);
		
		if($result)
		{
			header("location:listingDevices.php");
		}
		else{
			echo 'Check your code again!';
		}
	}
}
else
{
	header("location:userform.html");
}
?>