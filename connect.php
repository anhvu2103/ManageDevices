<?php
$servername = "localhost";
$username = "vuax16";
$password = "1145715"; 
$db = "vuax16";
$conn = new mysqli($servername, $username, $password,$db);
if($conn->connect_error)
{
	die("Connection failed: " .$conn->connect_error);
}
if(!$conn){
	 die(" Connection Error ");
}
return $conn;
?>

<!-- < ?
php
function insert_data(&$conn) {
	$tags_array = [];
	$serviceTag;
	//handle which info is being taken between single and multiple tags
	if ($_POST['serviceTag']) {
		$serviceTag = $_POST['serviceTag'];
	}
	else {
		$serviceTag = $_POST['mulserviceTag'];
		$r = implode(",",$serviceTag);
		echo $r;
	}
	//handle multiple tags
	// if($serviceTag = $_POST['mulserviceTag']){
	// 	$array = explode(',',$serviceTag);
	// 	foreach($array as $tags){
	// 		$serviceTag = $tags;
	// 	}
	// }
	$model = $_POST['model'];
	$type = $_POST['type'];
	$purchasedate = $_POST['purchasedate'];
	$provider = $_POST['provider'];
	$expiration = $_POST['expiration'];
	$retire;

	//handle checked or unchecked for retire textbox
	if(isset($_POST['retired'])){
		$retire = $_POST['retired'];
	}else{
		$retire = 0;
	}

	$stmt = $conn->prepare("insert into devices(Tag, Model, Type, Date, Provider, Expiration, Retire)values(?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssi",$serviceTag,$model,$type,$purchasedate,$provider,$expiration,$retire);
	$stmt->execute();
	echo "Registration successfully...";
	$stmt->close();
}
if(isset($_POST['retired'])){

}
if (isset($_POST['insert'])) {
	$conn = connect($servername, $username, $password, $db);
	insert_data($conn);
	$conn->close();
}
?> -->
