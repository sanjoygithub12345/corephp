<?php
define('title', "change || password");
define('PAGE',"changepassword");


include('include/adminHeader.php');
include('../dbconection.php');
session_start();
if(isset($_SESSION['login']))
{
	$email=$_SESSION['email'];
  
}
else
{
	header('location:adminUserLogin.php');
}
?>
  
  <?php

if(isset($_POST['submit']))
{
	$password=$_POST['password'];
	$sql="UPDATE signup SET password='$password' WHERE email ='$email'";
	$results=mysqli_query($db,$sql);
	if($results)
	{
		$msg = ' <div class=" alert alert-success mt-3">change password</div>';
	}
	else
	{
		echo "data not update";
	}
}
 ?>
   
 

  	<form method="post"  class="ml-3">
  		    <?php 
  		    if( isset($msg))
  		    {
  		       echo $msg;
  		    }
  		     ?>
				<div class="form-group">
					<label>email</label>
					<input type="email" name="" class="form-control" id="email" value="<?php echo $email ; ?>" readonly>
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control" id="name" value="">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="update">
				<input type="reset" name="reset" class="btn btn-danger" value="reset">
			</form>

<?php
include('include/adminFooter.php');
 ?>