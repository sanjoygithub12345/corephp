<?php
  include('dbconection.php');
  if(isset($_POST['login']))
  {
  	$email=$_POST['email'];
  	$password=$_POST['password'];
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>user login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	 <!-- fontawsome -->
	 <link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4  col-sm-6">
				<h3 class="text-primary text-center">online service management system</h3>
				<form method="post">
					<div class="form-group">
					<i class="fas fa-envelope-square"></i>
					 <label>Email</label>	
					 <input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
					<i class="fas fa-key"></i>

					 <label>password</label>
					 <input type="password" name="password" class="form-control">
					</div>
					<button class="btn btn-primary btn-block mt-2" name="login">login</button>
				</form>
				<div>
					<a href="index.php" class="text-center nav-link">back to home</a>
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>