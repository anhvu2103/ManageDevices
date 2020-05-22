<?php
require_once("connect.php");

// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);

$staffID = $_GET['GetstaffID'];
$query = "select * from staff where ID='".$staffID."'";
$result = mysqli_query($conn,$query); 

while($row=mysqli_fetch_assoc($result)){
	$staffID = $row['ID'];
	$first = $row['firstName'];
	$last = $row['lastName'];
	$pos = $row['position'];
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
	<h1 style="text-align:center"> Update Staff </h1>
	<div class="container">
		<div>
			<div class ="panel panel-primary">
				<div class="panel-body">
					<form action="updatestaff.php?ID=<?php echo $staffID ?>" method="post">
						<div class="form-group">
							<label for="model">First Name:</label>
							<input type="text" class="form-control" id="first" name="firstName" value="<?php echo $first ?>"/>
						</div>
						<div class="form-group">
							<label for="model">Last Name:</label>
							<input type="text" class="form-control" id="last" name="lastName" value="<?php echo $last ?>"/>
						</div>
						<div class="form-group">
							<label for="model">Position:</label>
							<input type="text" class="form-control" id="pos" name="position" value="<?php echo $pos ?>"/>
						</div>
						<div>
							<input type="submit" class="btn btn-primary" name="updatestaff" value="Update Staff">
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