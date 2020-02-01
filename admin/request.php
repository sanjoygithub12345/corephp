<?php
define('title', "request");
define('PAGE',"request");


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
<div class=" col-md-4 mt-5 ">
		<?php
	$sql="SELECT id,requestinfo,description,datee FROM userrequest";
	$res=mysqli_query($db,$sql);
	while ( $result=mysqli_fetch_assoc($res)) {
	
	  	?>
	  	<div class="card mt-2">
	  		<div class="card-header">
	  		  Request ID :	<?php echo $result['id'] ;?>
	  		</div>
	  		<div class="card-body">
	  			<h3  class="card-title"><?php  echo  $result['requestinfo'] ?></h3>
	  			<p><?php echo $result['description']; ?></p>
	  			<hp>Date <?php echo $result['datee'] ;?></p>
	  				<form class="" method="post" action="">
	  					<input type="hidden" name="ide" 
	  					value=" <?php echo $result['id'] ?>">
	  			<input type="submit" class="btn btn-primary mx-2 float-right" name="submitv" value="view">	
	  			<input type="submit" class="btn btn-danger float-right" name="close" value="close">	
	  			</form>
	  	    </div>
	  	</div>
	  <?php } ?>

</div>
<!-- ====================request form============================= -->
   <?php
   if(isset($_POST['submitv']))
   {
   	$sql="SELECT * FROM userrequest WHERE id = ' ".$_POST['ide']."' ";
   	$res=mysqli_query($db,$sql);
   	$fresult=mysqli_fetch_assoc($res);
   }

   if(isset($_POST['close']))
   {
   	$sql="DELETE FROM userrequest WHERE id= ' ".$_POST['ide']."' " ;
   	$res=mysqli_query($db,$sql);
   	if ($res) {
   	}
   }
   if(isset($_POST['Assign']))
   {
   	$request_id=$_POST['id'];
   	$requestinfo=$_POST['request_info'];
   	$description=$_POST['description'];
   	$name = $_POST['name'];
   	$addressone = $_POST['address'];
   	$addresstwo = $_POST['addressone'];
   	$city= $_POST['city'];
   	$state= $_POST['state'];
   	$zip= $_POST['zip'];
   	$email= $_POST['email'];
   	$mobile=$_POST['number'];
   	$date=$_POST['date'];
   	$Technician=$_POST['Technician'];
   	$sql="INSERT INTO assign_work (request_id,requestinfo,description,name,addressone,addresstwo,city,state,zip,email,mobile,datee,technician) VALUES (
   	'$request_id','$requestinfo','$description','$name','$addressone','$addresstwo','$city','$state','$zip','$email','$mobile','$date','$Technician'
   )";
   $res= mysqli_query($db,$sql);
   if($res)
   {
   	  $msg  ='<div class="alert alert-success">data submited</div>';
   }
   }
    ?>
<div class=" col-md-6 mt-5 jumbotron ">

	<h3 class="text-center mt-5 mb-2">Assign work order</h3>
	   <?php 
	   if(isset($msg))
	   {
	   	echo $msg;
	   }
	   ?>
   
	  <form method="post">
	 <div class="form-group">
 		 <label>ID</label>
 		 <input type="text" name="id" class="form-control form-control-sm" value="<?php if(isset($fresult['id'])) echo $fresult['id'];  ?>">
 	</div>
 	<div class="form-group">
 		 <label>requset info</label>
 		 <input type="text" name="request_info" class="form-control form-control-sm" value="<?php if(isset($fresult['requestinfo'])) echo $fresult['requestinfo'];  ?>">
 	</div>
 	<div class="form-group">
 		 <label>description</label>
 		 <input type="text" name="description" class="form-control form-control-sm" value="<?php if(isset($fresult['description'])) echo $fresult['description']; ?>">
 	</div>
 	<div class="form-group">
 		 <label>name</label>
 		 <input type="text" name="name" class="form-control form-control-sm" value="<?php if(isset($fresult['name'])) echo $fresult['name'] ; ?>">
 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 			<label>address line 1</label>
 			<input type="text" name="address" class="form-control-sm form-control" value="<?php if(isset($fresult['addressone'])) echo $fresult['addressone'] ?>">
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="form-group">
 			<label>address line 2</label>
 			<input type="text" name="addressone" class="form-control-sm form-control" value="<?php  if(isset($fresult['addresstwo'])) echo $fresult['addresstwo'] ?>">
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label>city</label>
 				<input type="text" class="form-control form-control-sm" name="city" value="<?php if(isset($fresult['city'])) echo $fresult['city']; ?>">
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="form-group">
 				<label>state</label>
 				<input type="text" class="form-control-sm form-control" name="state" value="<?php if(isset($fresult['state'])) echo $fresult['state'] ?>">
 			</div>
 		</div>
 		<div class="col-md-2">
 			<?php
 			if(isset($msgg))
 			{
              echo $msgg;
 			}
 			 ?>

 			<div class="form-group">
 				<label>Zip</label>
 				<input type="text" class="form-control-sm form-control" name="zip" value="<?php if(isset($fresult['zip'])) echo $fresult['zip']; ?>">
 			</div>
 		</div>

 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label>email</label>
 				<input type="email" class="form-control form-control-sm" name="email" value="<?php if(isset($fresult['email'])) echo $fresult['email']; ?>">
 			</div>
 		</div>
 		<div class="col-md-4">
 			<?php
 			if( isset($msgg))
 			{
              echo $msgg;
 			}
 			 ?>
 			<div class="form-group">
 				<label>mobile</label>
 				<input type="text" class="form-control-sm form-control" name="number" value="<?php if(isset($fresult['mobile'])) echo $fresult['mobile']; ?>">
 			</div>
 		</div>
 		<div class="col-md-3">
 			<div class="form-group">
 				<label>date</label>
 				<input type="date" class="form-control-sm form-control" name="date" value="<?php if(isset($fresult['datee'])) echo $fresult['datee'] ?>">
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="form-group">
 			<label>Technician name</label>
 			<input type="text" name="Technician" class="form-control-sm form-control">
 			</div>
 		</div>

 	</div>
 	<input type="submit" value="Assign" name="Assign" class="btn btn-primary mt-3 mb-3">

 </form>	
</div>



<?php
include('include/adminFooter.php');
 ?>