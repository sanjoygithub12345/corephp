<?php
define('TITLE', 'user || userProfile' );
define('PAGE', 'userProfile' );


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
$sql = "SELECT email,username,id FROM signup WHERE email='$email'";
$rse=mysqli_query($db,$sql);
$result=mysqli_fetch_assoc($rse);
$username=$result['username'];
$email=$result['email'];
$id=$result['id'];

   // update query
     if(isset($_POST['submit']))
     {
	     	$username=$_POST['username'];
	     	if($username=="")
	     	{
	     		$msg='<div class="alert-danger alert"><i class="far fa-times-circle mr-2 text-danger"> field are required</div>';
	     	}
	     	else
	     	{	
		     	$sql="UPDATE signup SET username='$username' WHERE id='$id'";
		     	$res=mysqli_query($db,$sql);
		     	if($res)
		     	{
		     		$msg ='<div class="alert-success alert"><i class="fas fa-check text-success mr-2"></i>data updated</div>';
		     	}
		     	else {
		     		echo "data not updated";
		     	}
		    }	
     }
?>

<?php 
include('include/header.php');

 ?>


			<?php 
			  if(isset($msg))
			echo $msg;
			?>
			<div class="col-md-4">
			<form method="post"  class="ml-3">
				<div class="form-group">
					<label>email</label>
					<input type="email" name="" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
				</div>
				<div class="form-group">
					<label>name</label>
					<input type="text" name="username" class="form-control" id="name" value="<?php echo $username; ?>">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="update">
			</form>
			</div>
			
			
	<?php 
    include('include/footer.php');

	?>