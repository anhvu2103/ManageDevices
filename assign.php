<?php
require_once("connect.php");

// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);
$deviceID = $_GET['GetdID'];
$query = "select * from devices where ID='".$deviceID."'";
$result = mysqli_query($conn,$query); 

while($row=mysqli_fetch_assoc($result)){
	$deviceID = $row['ID'];
	$Tag = $row['Tag'];
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
</head>

<body>
	<header>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="container">
					<a class="navbar-brand" href="#">CTS Computer Inventory</a>
					<div class ="navbar-nav ml-sm-auto">
						<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 				data-toggle="dropdown">Devices</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="listingDevices.php">List</a>
								<a class="dropdown-item" href="userform.html">Add Device</a>
								<a class="dropdown-item" href="retireddevices.php">Retired Device</a>
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
												<a class="dropdown-item" href="usertable.php">For Users</a>
												<a class="dropdown-item" href="loginform.html">Login as Manager</a>
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
	
	<h1 style="text-align:center"> Assign Device to User </h1>
	
	<h3 style="text-align:center; border-weight: 0px;">Record</h3>
	<div class="container">
		<div>
			<div class ="panel panel-primary">
				<div class="panel-body">
					<form action="assigndevice.php?ID=<?php echo $deviceID ?>" method="post">
						<div class="form-group">
							<label for="model">Selected Device #:</label>
							<input type="text" class="form-control" id="deviceID" name="deviceID" value="<?php echo $deviceID ?>"/>
						</div>
						<div class="form-group">
							<label for="model">Selected Device Tag:</label>
							<input type="text" class="form-control" id="deviceTag" name="deviceTag" value="<?php echo $Tag ?>"/>
						</div>
						<div class="form-group">
							<label for="model">Select User:</label>
							<input type="text" class="form-control" id="userassign" name="assign" value=""/>
						</div>
						<div>
							<input type="submit" class="btn btn-primary" name="assignbut" value="Submit">
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

					
				<!-- </tr>
				// echo '<tr>';
// 					echo '<td>'.$row['Tag'].'</td>';
// 					echo '<td>'.$row['Model'].'</td>';
// 					echo '<td>'.$row['Type'].'</td>';
// 					echo '<td>'.$row['Date'].'</td>';
// 					echo '<td>'.$row['Provider'].'</td>';
// 					echo '<td>'.$row['Expiration'].'</td>';
// 					echo '<td>'.$row['Retire'].'</td>';
					// echo '<td><a href = "#">''"Edit"''</a></td>';
	// 				echo '<td><a href = "#">''"Delete"''</a></td>';
				// echo '</tr>';
			}
		?> -->