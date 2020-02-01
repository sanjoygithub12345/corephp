<!DOCTYPE html>
<html>
<head>
	
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo TITLE ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       <!-- fontawsome css -->
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">
       <!-- custom css css -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
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
		<div class="col-sm-2 text-center col-md-2 text-md-left text-sm-center sidebar bg-light pl-3 sidebar-stiky mt-2 text-center">
			<ul class="navbar-nav flex-column  ">
				<li class="nav-item "><a href="userProfile.php" class="nav-link mr-2  pl-2 <?php if(PAGE=='userProfile'){echo 'act';} ?>"><i class="fas fa-user mr-2"></i>profile</a>
				</li>
					<li class="nav-item"><a href="userSubmitRequest.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='userSubmitRequest'){echo 'act';} ?>"><i class="fas fa-syringe mr-2 ml-1"></i>submit request</a>
				</li>
					<li class="nav-item"><a href="userServiceStatus.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='userServiceStatus'){echo 'act';} ?>"><i class="far fa-calendar-check mr-2"></i>check status</a>
				</li>
					<li class="nav-item"><a href="userChangePassword.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='userChangePassword'){echo 'act';} ?>"><i class="fas fa-key mr-2"></i> change password</a>
				</li>
					<li class="nav-item"><a href="log_out.php" class="nav-link mr-2 pl-2 "><i class="fas fa-sign-out-alt mr-2"></i>log out</a>
				</li>
			</ul>
			
		</div>
		
			<!-- create form -->
			
	