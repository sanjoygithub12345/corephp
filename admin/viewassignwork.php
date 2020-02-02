<?php 
define('title', "work || order");
define('PAGE',"workorder");


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
<div class="col-md-6 ml-3">
	<?php
	if(isset($_POST['view']))
	{
    $sql="SELECT * FROM assign_work WHERE request_id={$_POST['id']}";
	$res=mysqli_query($db,$sql);
	$result=mysqli_fetch_assoc($res);
	}
 ?>
 <table class="table table-responsive">
 	<tr>
 		<th>id</th>
 		<td><?php echo  $result['request_id'] ?></td>
 	</tr>
 	<tr>
 		<th>requset_info</th>
	 	<td><?php echo  $result['requestinfo'] ?></td>
	 </tr>
	 <tr>
	 		<th>name</th>
	 		<td><?php echo  $result['name'] ?></td>
	 </tr>
	 <tr>
	 		<th>address</th>
	 		<td><?php echo  $result['addressone'] ?></td>  
	 </tr>
	 <tr>
	 		<th>city</th>
	 		<td><?php echo  $result['city'] ?></td>
	 	  
	 </tr>
	 <tr>
	 		<th>mobile</th>
	 		<td><?php echo  $result['mobile'] ?></td>
	 	    
	 </tr>
	 <tr>
	 		<th>technician</th>
	 		<td><?php echo  $result['technician'] ?></td>
	 	  
	 </tr>
	 <tr>
	 		<th>date</th>
	 		<td><?php echo  $result['datee'] ?></td>
	 	  
	 </tr>


 </table>
 <input type="submit" class="btn btn-primary btn-sm" name="" value="print" onclick="window.print()">
 <a href="workorder.php" class="btn btn-danger btn-sm ml-3">close</a>

</div>


<?php
include('include/adminFooter.php');
 ?>