<?php
require_once("connect.php");

// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);

$userID = $_GET['GetuserID'];
$query = "select * from fullstaff where ID='".$userID."'";
$result = mysqli_query($conn,$query); 

while($row=mysqli_fetch_assoc($result)){
	$userID = $row['ID'];
	$user = $row['username'];
	$pos = $row['usertype'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<meta charse="utf-8">
	<meta name ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Required meta tags -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		/*.container {margin: auto;}*/
	</style>
</head>


<body>
	<header>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="conttainer">
					<a class="navbar-brand" href="#">CTS Computer Inventory</a>
					<div class ="navbar-nav ml-sm-auto">
						<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 				data-toggle="dropdown">Devices</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">List</a>
								<a class="dropdown-item" href="#">Add Device</a>
								<a class="dropdown-item" href="#">Cancel</a>
								</div>
							</div>	
							<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 						data-toggle="dropdown">Log Out</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="loginform.html">Log Out</a>
									<a class="dropdown-item" href="#">Cancel</a>
										</div>
										</div>
										<div class="dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Manager Only</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="loginform.html">Staff Listing</a>
												<a class="dropdown-item">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<h1 style="text-align:center"> Update User </h1>
	<div class="container">
		<div>
			<div class ="panel panel-primary">
				<div class="panel-body">
					<form action="updateuser.php?ID=<?php echo $userID ?>" method="post">
						<div class="form-group">
							<label for="model">Username:</label>
							<input type="text" class="form-control" id="user" name="username" value="<?php echo $user ?>"/>
						</div>
						<div class="form-group">
							<label for="model">Position:</label>
							<input type="text" class="form-control" id="pos" name="position" value="<?php echo $pos ?>"/>
						</div>
						<div>
							<input type="submit" class="btn btn-primary" name="updateuser" value="Update User Info">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>			
</body>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>