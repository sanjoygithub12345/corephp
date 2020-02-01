<?php 
define('TITLE', 'user || submitRequest' );
define('PAGE', 'userSubmitRequest' );


include('include/header.php');
include('../dbconection.php');

session_start();
if($_SESSION['ulogin'])
{
   $email=$_SESSION['email'];
}
else
{
	header('location:userLogin.php');
}
if(isset($_POST['submit'])){
	$requset_info=$_POST['request'];
	$description=$_POST['description'];
	$name=$_POST['name'];
	$address_line_one=$_POST['address'];
	$address_line_two=$_POST['addressone'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$email=$_POST['email'];
	$phnumber=$_POST['number'];
	$date=$_POST['date'];


	 if($requset_info=="" || $description=="" || $name=="" || $address_line_one=="" || $address_line_two=="" || $city=="" || $state=="" || $zip=="" || $email=="" || $phnumber=="" || $date=="" )
	 {
	 	 $msg='<div class="alert alert-danger w-25">all field are required</div>' ;
	 }
	 elseif(preg_match('/[^0-9]/', $zip))
	 {
	 	$msgg = '<p class="alert alert-danger ">only number </p>';
	 }
	  elseif(preg_match('/[^0-9]/', $phnumber))
	 {
	 	$msgg = '<p class="alert alert-danger ">only number </p>';
	 	
	 }
	 else
	 {
	 	$sql="INSERT INTO userrequest (requestinfo,description,name,addressone,addresstwo,city,state,zip,email,mobile,datee) VALUES ('$requset_info','$description','$name','$address_line_one','$address_line_two','$city','$state','$zip','$email','$phnumber','$date') ";
	 	$res=mysqli_query($db,$sql);
	 	$gid=mysqli_insert_id($db);
	 	$_SESSION['getid']=$gid;
	 	if($res)
	 	{
	 		header('location:userRecive.php');
	 	}
	 }
}

 ?>

  <?php
 if(isset($msg))
 {
 	echo $msg;
 }
  ?>

 <form method="post">
 	<div class="form-group">
 		 <label>requset info</label>
 		 <input type="text" name="request" class="form-control form-control-sm">
 	</div>
 	<div class="form-group">
 		 <label>description</label>
 		 <input type="text" name="description" class="form-control form-control-sm">
 	</div>
 	<div class="form-group">
 		 <label>name</label>
 		 <input type="text" name="name" class="form-control form-control-sm">
 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 			<label>address line 1</label>
 			<input type="text" name="address" class="form-control-sm form-control">
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="form-group">
 			<label>address line 2</label>
 			<input type="text" name="addressone" class="form-control-sm form-control">
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label>city</label>
 				<input type="text" class="form-control form-control-sm" name="city">
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="form-group">
 				<label>state</label>
 				<input type="text" class="form-control-sm form-control" name="state">
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
 				<input type="text" class="form-control-sm form-control" name="zip">
 			</div>
 		</div>

 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label>email</label>
 				<input type="email" class="form-control form-control-sm" name="email">
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
 				<input type="text" class="form-control-sm form-control" name="number">
 			</div>
 		</div>
 		<div class="col-md-2">
 			<div class="form-group">
 				<label>date</label>
 				<input type="date" class="form-control-sm form-control" name="date">
 			</div>
 		</div>

 	</div>
 	<input type="submit" value="submit" name="submit" class="btn btn-primary mt-3 mb-3">

 </form>
 
 <?php
include('include/footer.php');

?>