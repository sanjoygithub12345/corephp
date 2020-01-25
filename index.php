<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<!-- navbar -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-success">
		<a href="" class="navbar-brand">osms</a>
		<button type ="button" class="navbar-toggler" data-toggle="collapse" data-target="#mydiv">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mydiv">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="" class="nav-link">home</a>
			</li>
				<li class="nav-item">
				<a href="#service" class="nav-link" >service</a>
			</li>	<li class="nav-item">
				<a href="#registration" class="nav-link">registration</a>
			</li>	<li class="nav-item">
				<a href="#contact" class="nav-link" id="">contact</a>
			</li>
		</ul>
		</div>
		
	</nav>
	<!-- end navbar -->

	<!-- body part -->

	<div class="jumbotron back_img" style="background-image: url(image/img.jpg);">
		<div class="center mt-4">
			<h3 class="text-danger text-uppercase font-weight-bold wfont">welcome to osms </h3>
			<p class="font-italic fonts"> customer hapiness our aim</p>
			<a href="user/userLogin.php" class="btn btn-primary mr-4">login</a>
			<a href="#registration" class="btn btn-success mr-4">singnup</a>

		</div>
	</div>
	<!-- osms service -->
	<div class="container">
		<div class="jumbotron">
			<h4 class="text-center" id="service">osms service</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt provident, temporibus ipsum hic. Incidunt libero illum voluptates! Tempore magnam a, corporis esse odio, nesciunt, vel ipsa placeat recusandae perferendis excepturi doloribus quaerat culpa! Quisquam aliquid numquam ab non eius natus ea quidem nostrum, sunt obcaecati earum consequuntur possimus provident repellat aut quis optio cumque molestiae illo, corporis eum maiores, dicta laudantium saepe! Veniam, illo earum, ipsum tempora cum repudiandae pariatur placeat ipsam. Consequatur sunt rem dicta error dolore nam impedit inventore corrupti veritatis incidunt, iste delectus asperiores ad velit ea voluptatibus neque tempora. Sit officia, doloribus molestias dolores commodi aperiam!</p>
		</div>
	</div>
	<!-- our services -->
	<div class="container">
	 <h4 class="text-center">our service</h4>
	  <div class="row">
	  	<div class="col-md-4 text-center">
	  		<span class="text-center"><i class="far fa-address-card text-center text-success fa-8x"></i></span>
	  		<h5>electronics aplication</h5>
	  	</div>
	  	  	<div class="col-md-4 text-center">
	  		<span><i class="fab fa-accusoft fa-8x text-primary"></i></span>
	  		<h5>prevent mantainas  </h5>

	  	</div>
	  	  	<div class="col-md-4 text-center">
	  		<span><i class="fas fa-adjust fa-8x text-danger"></i></span>
	  		<h5>Falt repear   </h5>

	  	</div>
	  </div>
	
	</div>

	<!-- registration form -->
	    <?php include('user/userRegistration.php'); ?>
	<!-- start happy coustomer -->
	<div class="container mt-4">
		<div class="jumbotron bg-danger">
		<h4 class="text-center text-white">happy coustomer</h4>

			<div class="row">
				<div class="col-md-4 col-12 mt-2">
					<div class="card">
						<div class="card-body text-center">
							<img src="image/download (1).jpg" class="img-fluid" style="border-radius: 100%;" height="50px" width="50px">
							<h5 class="card-title">rahul kumar</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, blanditiis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12 mt-2">
					<div class="card">
						<div class="card-body text-center">
							<img src="image/download (2).jpg" class="img-fluid"class="img-fluid" style="border-radius: 100%;" height="50px" width="50px" >
								<h5 class="card-title">rahul kumar</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, blanditiis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12 mt-2">
					<div class="card">
						<div class="card-body text-center">
							<img src="image/download (1).jpg" class="img-fluid"class="img-fluid" style="border-radius: 100%;" height="50px" width="50px" >
								<h5 class="card-title">rahul kumar</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, blanditiis.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	   <!-- contactus -->
	   <div class="container" id="contact">
	   	<h4 class="text-center">contact us</h4>
	   	<div class="row">
	   	  <?php include('contact.php'); ?>
	   		<div class="col-md-4 text-center">
	   			<strong>Headquator</strong>
	   			<p>osms pvt ltd</p>
	   			<p>kolkata</p>
	   			<p>phone : +910000000000</p>
	   			<a class="nav-link" href="#" target="_blank">www.osms.com</a>
	   		</div>

	   	</div>
	   </div>
	   <!-- ===============  strat footer============= -->
	   <div class="container-fluid bg-dark mt-5 h-100">
          <div class="row">
          	<div class="col-md-6  text-center text-white">
          		 <p class="my-3" >follow us</p>
          	</div>
          	<div class="col-md-6 text-white py-3 text-center">
          		<a href="admin/adminUserLogin.php">admin</a>
          		<span><i class="fab fa-facebook m-1 fa-2x "></i></span>
          		<span><i class="fab fa-twitter m-1 fa-2x "></i></span>
          		<span><i class="fab fa-instagram  m-1 fa-2x "></i></span>

          	</div>

          </div>  
	    
	   </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>