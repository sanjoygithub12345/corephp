<?php 
define('title', "dasboard");
define('PAGE',"dasboard");
include('include/adminHeader.php');
include('../dbconection.php');
session_start();
if(isset($_SESSION['login']))
{

}
else
{
	header('location:adminUserLogin.php');
}
?>
			<!-- create form -->
			
				<div class="col-md-3 mt-2 text-center">
					<div class="card bg-success text-white">
						<div class="card-header">Request</div>
						<div class="card-body">
							<h4 class="card-title">35</h4>
							<a href="#" class="btn nav-link text-white">view</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mt-2 text-center">
					<div class="card bg-danger text-white">
						<div class="card-header">Assigned work</div>
						<div class="card-body">
							<h4 class="card-title">35</h4>
							<a href="#" class="btn nav-link text-white">view</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 mt-2 text-center">
					<div class="card bg-info text-white">
						<div class="card-header">NO of technician</div>
						<div class="card-body">
							<h4 class="card-title">35</h4>
							<a href="#" class="btn nav-link text-white">view</a>
						</div>
					</div>
				</div>

		
			<div class="mt-5 col-md-8 offset-md-2 ">
				<p class="text-white bg-warning text-center">List of request</p>
				<table class="table table-bordered table-responsive">
					<tr>
						<th>Requester ID</th>
						<th>Name</th>
						<th>Email</th>

					</tr>
					<?php 
						include('../dbconection.php');
						$sql="SELECT * from signup";
						$res=mysqli_query($db,$sql);
						while ($result=mysqli_fetch_assoc($res))
						{
						?>
				
					 <tr>
					 	<th><?php echo $result['id'] ?></th>
					 	<th><?php  echo $result['username'] ?></th>
					 	<th><?php echo $result['email'] ?></th>

					 </tr>
			    <?php 
			       } 
			 ?>

				</table>
			</div>
			
		
			

<?php
include('include/adminFooter.php');
 ?>