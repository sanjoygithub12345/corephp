<?php
include('dbconection.php');
session_start();
if($_SESSION['login'])
{
   $email=$_SESSION['email'];
}
else
{
	header('location:userLogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>userProfile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <!-- fontawsome css -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
       <!-- custom css css -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
       <!-- google font  -->
       <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
	<!-- top navbar -->
<nav class="navbar navbar-light bg-success ">
  <a class="navbar-brand text-white" href="userProfile.php">osms</a>
</nav>
<!-- side navbar -->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center col-md-2 text-md-left text-sm-center sidebar bg-light pl-5 sidebar-stiky">
			<ul class="navbar-nav flex-column">
				<li class="nav-item"><a href="" class="nav-link mr-2"><i class="fas fa-user mr-2"></i>profile</a>
				</li>
					<li class="nav-item"><a href="" class="nav-link mr-2"><i class="fas fa-syringe mr-2"></i>submit request</a>
				</li>
					<li class="nav-item"><a href="" class="nav-link mr-2"><i class="far fa-calendar-check mr-2"></i>check status</a>
				</li>
					<li class="nav-item"><a href="" class="nav-link mr-2"><i class="fas fa-key mr-2"></i> change password</a>
				</li>
					<li class="nav-item"><a href="" class="nav-link mr-2"><i class="fas fa-sign-out-alt mr-2"></i>log out</a>
				</li>
			</ul>
			
		</div>
		<div class="col-md-6 mt-3">
			<form method="post"  class="ml-3">
				<div class="form-group">
					<label>email</label>
					<input type="email" name="" class="form-control" id="email" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label>name</label>
					<input type="text" name="" class="form-control" id="name">
				</div>
				<input type="submit" class="btn btn-primary" name="submit">
			</form>
			
		</div>
	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>