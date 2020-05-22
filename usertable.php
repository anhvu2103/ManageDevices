<?php
require_once("connect.php");

// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);
$query="select * from fullstaff";
$result=mysqli_query($conn,$query);
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
				<div class="conttainer">
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
	
	<h1 style="text-align:center"> Public Data For User </h1>
	
	<h3 style="text-align:center; border-weight: 0px;">User Records</h3>
	
	<table align="center" border="1px" style="text-align:center;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Position</th>
			<tr>
		</thead>
		<tbody>
		<?php
			while ($row = mysqli_fetch_assoc($result)) 
			{
				$userID = $row['ID'];
				$user = $row['username'];
				$position = $row['usertype'];
		?>
				
				<tr>
					<td><?php echo $userID?></td>
					<td><?php echo $user?></td>
					<td><?php echo $position?></td>
				</tr>
				<?php
				
			}
				?>
		</tbody>
	</table>
</body>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>
