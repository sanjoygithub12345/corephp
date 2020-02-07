

<!DOCTYPE html>
<html>
<head>
	<title><?php echo title ?></title>
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
  <a class="navbar-brand text-white" href="dasboard.php">osms</a>
</nav>
<!-- side navbar -->
<div class="container-fluid">
	<div class="row ">
		<div class="col-sm-12 text-center col-md-2 text-md-left text-sm-center sidebar bg-light pl-3 sidebar-stiky mt-2 text-center">
			<ul class="navbar-nav flex-column  ">
				<li class="nav-item "><a href="dasboard.php" class="nav-link mr-2  pl-2 <?php if(PAGE=='dasboard'){echo 'act';} ?>"><i class="fas fa-user mr-2"></i>dasboard</a>
				</li>
					<li class="nav-item"><a href="workorder.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='workorder'){echo 'act';} ?>"><i class="fas fa-syringe mr-2 ml-1"></i>work order</a>
				</li>
					<li class="nav-item"><a href="request.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='request'){echo 'act';} ?>"><i class="far fa-calendar-check mr-2"></i>request</a>
				</li>
				<li class="nav-item"><a href="asset.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='asset'){echo 'act';} ?>"><i class="far fa-calendar-check mr-2"></i>asset</a>
				</li>
				<li class="nav-item"><a href="technician.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='technician'){echo 'act';} ?>"><i class="far fa-calendar-check mr-2"></i>technician</a>
				</li>

				<li class="nav-item"><a href="requester.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='requester'){echo 'act';} ?>"><i class="far fa-calendar-check mr-2"></i>requester</a>
				</li>
				
				

					<li class="nav-item"><a href="changepassword.php" class="nav-link mr-2 pl-2 <?php if(PAGE=='changepassword'){echo 'act';} ?>"><i class="fas fa-key mr-2"></i> change password</a>
				</li>
					<li class="nav-item"><a href="logout.php" class="nav-link mr-2 pl-2 "><i class="fas fa-sign-out-alt mr-2"></i>log out</a>
				</li>
			</ul>
			
		</div>
		