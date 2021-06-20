<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Responce</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<style type="text/css">
		.alert-primary{
			font-size: 20px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
		$link=mysqli_connect("localhost","root","","contact");

		if(mysqli_connect_error())
			echo "Database connection lost";
		else{
			echo "<h1>Your Response has been recorded!<br></h1><h3> We Will get back to you soon</h3>";
		}
		$getname=$_GET['name'];
		$getmail=$_GET['email'];
		$getphone=$_GET['phone'];
		$getaddress=$_GET['address'];

		$query="INSERT INTO contact (`Name`,`Email`,`Phone`,`Address`) VALUES ('$getname','$getmail','$getphone','$getaddress')";

		if(mysqli_query($link,$query)){
			echo "Your Details has been taken";
		}


	?>

	<div class="alert alert-primary" role="alert">
	  <?php echo "Your name is :".$getname ?>
	</div>

	<div class="alert alert-primary" role="alert">
	  <?php echo "Your mail is : ".$getmail ?>
	</div>

	<div class="alert alert-primary" role="alert">
		  <?php echo "Your phone is : ".$getphone ?>
	</div>

	<div class="alert alert-primary" role="alert">
		  <?php echo "Your address is :".$getaddress ?>
	</div>

</body>
</html>