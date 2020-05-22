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
	$Model = $row['Model'];
	$Type =$row['Type'];
	$Date =$row['Date'];
	$Provider = $row['Provider'];
	$Expiration = $row['Expiration'];
	$Retire = $row['Retire'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

        });
        //cancel butto 
        function cancel() {
  		        var conf = confirm ("Are you sure to cancel this form?");
  		        if (conf) {
  		          window.location.replace("userform.html");
  		          return true;
  		        }
  		else{
  			return false;
  		}
  		// $(window).bind('beforeunload', function(){
  		// 	return '';
  		// });
        }
	  
        //Y/N
        function showService() {
  		  $('input[type=radio][name=option]').change(function() {
  		      if (this.value == 'Yes') {
  	              $('#serviceRow').hide();
  	              $('#mulserviceRow').show();
  		      }
  		      else if (this.value == 'No') {
  	              $('#serviceRow').show();
  	              $('#mulserviceRow').hide();
  		      }
  		  });
        }
    </script>
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
	<h1 style="text-align:center"> Update Form </h1>
	<div class="container">
		<div>
			<div class ="panel panel-primary">
				<div class="panel-body">
					<form action="update.php?ID=<?php echo $deviceID ?>" method="post">
			       		<div class="form-group">
			          	  <legend>
							  Multiple Machines</legend>
			           		<div>
			             	   <div>
			               			<label class="form-group">Yes</label>
									<input class="form-group" type="radio" name="option" value="Yes" id="MultipleMachines" onclick="showService()">
			             	   </div>
							   <div>
								   <label class="form-group">No</label>
								   <input class="form-group" type="radio" name="option" value="No" id="MultipleMachines" checked onclick="showService()">
							   </div>
						   </div>
						<div class="form-group" id="serviceRow">
							<label for="firstName">Service Tag:</label>
							<input type="text" class="form-control" id="tag" name="serviceTag" value ="<?php echo $Tag ?>"/>
						</div>
						<div class="form-group" style="display:none;" id="mulserviceRow">
							<label for="lastName">Multiple Service Tags:</label>
							<input type=text class="form-control" id="multag" name="mulserviceTag" value ="<?php echo $Tag ?>"/>
						</div>
						
						<div class="form-group">
							<label for="model">Model:</label>
							<input type="text" class="form-control" id="email" name="model" value="<?php echo $Model ?>"/>
						</div>
						
						<div class="form-group">
							<label for="email">Type:</label>
							<div>
								<input type="radio" name="type" id="laptop" value="Laptop" <?php if($Type == 'Laptop') {echo 'checked';}?>>
								<label for="laptop" class="radio-inline">
									Laptop
								</label>
								
								<input type="radio" name="type" id="desktop" value="Desktop" <?php if($Type == 'Desktop') {echo 'checked';}?>>
								<label for="desktop" class="radio-inline">
									Desktop
								</label>
								
								<input type="radio" name="type" id="tablet" value="Tablet" <?php if($Type == 'Tablet') {echo 'checked';}?>>
								<label for="tablet" class="radio-inline">
									Tablet
								</label>
								
								<input type="radio" name="type" id="others" value="O" <?php if($Type == 'O') {echo 'checked';}?>>
								<label for="others" class="radio-inline">
									Others
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="password">Purchase Date:</label>
							<input type="text" class="form-control" id="password" name="purchasedate" value ="<?php echo $Date ?>"/>
						</div>
						<div class="form-group">
							<label for="email">Warranty Provider:</label>
							<input type="text" class="form-control" id="number" name="provider" value ="<?php echo $Provider ?>"/>
						</div>
						<div class="form-group">
							<label for="email">Warranty Expiration:</label>
							<input type="text" class="form-control" id="number" name="expiration" value = "<?php echo $Expiration ?>"/>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" name = "retired" value = "1" <?php if($Retire == '1') {echo 'checked';}?>>
							<label class="form-check-label" for="exampleCheck1">Retired</label>
						</div>
						<input type="submit" class="btn btn-primary" name="update" value="Update">
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