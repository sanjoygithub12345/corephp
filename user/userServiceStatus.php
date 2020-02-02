<?php 
define('TITLE', 'user || checkStatus' );
define('PAGE', 'userServiceStatus' );
session_start();
error_reporting(0);
include('include/header.php');
include('../dbconection.php');

 if(isset($_SESSION['ulogin']))
  {

  }
  else
  {
  	header('location:userLogin.php');
  }

 ?>
  
 
 <div  class="col-md-6 mt-3">
       <form method="post" class="form-inline">
       	<div class="form-group">
       		<label class="mr-3">search ID</label>
       		<input type="text" class="form-control-sm form-control" name="id">
       	</div>
       	<button class="btn btn-primary btn-sm ml-3" name="submit">SEARCH</button>
       </form>
 <?php 
 if(isset($_POST['submit']))
 {
 	$id=$_POST['id'];
 	if ($id== "") {
 		echo '<div class="alert-danger alert mt-3">please set the id </div>';
 	    
 	}
 	else
 	{

 	$sql="SELECT * FROM assign_work WHERE request_id =' $id '";
 	$res = mysqli_query($db,$sql);
 	$result= mysqli_fetch_assoc($res);
 	if($id==$result['request_id'])
 	{

 ?>
 <table class="table table-bordered table-responsive mt-4">
 	<tr>
 	<th>id</th>
 	<th>requestinfo</th>
 	<th>description</th>
 	<th>name</th>
 	<th>addressone</th>
 	<th>addresstwo</th>

 	<th>city</th>
 	<th>state</th>
 	<th>zip</th>
 	<th>email</th>
 	<th>mobile</th>
 	<th>datee</th>
 	<th>technician</th>
 	</tr>
 	<tr>
 		<td><?php echo $result['request_id']; ?></td>
 		<td><?php echo $result['requestinfo']; ?></td>
 		<td><?php echo $result['description']; ?></td>
 		<td><?php echo $result['name']; ?></td>
 		<td><?php echo $result['addressone']; ?></td>
 		<td><?php echo $result['addresstwo']; ?></td>
 		<td><?php echo $result['city']; ?></td>
 		<td><?php echo $result['state']; ?></td>
 		<td><?php echo $result['zip']; ?></td>
 		<td><?php echo $result['email']; ?></td>
 		<td><?php echo $result['mobile']; ?></td>
 		<td><?php echo $result['datee']; ?></td>
 		<td><?php echo $result['technician']; ?></td>

 	</tr>
 </table>
<?php }
else

{
	echo '<div class="alert alert-danger mt-3"> your request is pending</div>' ;
}

 ?>
<?php }}?>
 </div>

 <?php
include('include/footer.php');

?>