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


<div class=" col-md-8">
		 <table class="table-bordered table table-responsive mt-3"> 
	 	<tr>
	 		<th>requset_id</th>
	 		<th>requset_info</th>
	 		<th>name</th>
	 		<th>address</th>
	 		<th>city</th>
	 		<th>mobile</th>
	 		<th>technician</th>
	 		<th>date</th>
	 		<th>action</th>
	 	</tr>
	<?php
	$sql="SELECT * FROM assign_work";
	$res=mysqli_query($db,$sql);
	while ($result=mysqli_fetch_assoc($res)) {
	 ?>

	 	<tr>
	 		<td><?php echo  $result['request_id'] ?></td>
	 		<td><?php echo  $result['requestinfo'] ?></td>
	 		<td><?php echo  $result['name'] ?></td>
	 		<td><?php echo  $result['addressone'] ?></td>

	 		<td><?php echo  $result['city'] ?></td>
	 		<td><?php echo  $result['mobile'] ?></td>


	 		<td><?php echo  $result['technician'] ?></td>
	 		<td><?php echo  $result['datee'] ?></td>
	 		<td>
	 			<form method="post" action="viewassignwork.php" class="d-inline">
	 				<input type="hidden" class="" name="id" value="<?php echo $result['request_id'] ?>">
	 				<button class="btn btn-sm btn-warning " type="submit" name="view" value="view">
	 					<i class="fas fa-eye"></i>
	 				</button>
	 			</form>
	 			<form method="post" action="" class="d-inline mt-2">
	 				<input type="hidden" class="" name="id" value="<?php echo $result['request_id'] ?>">
	 				<button class="btn btn-sm btn-danger" type="submit" name="delete" value="delete">
	 					<i class="far fa-trash-alt"></i>
	 				</button>
	 			</form>

	 		</td>
	 	</tr>
<?php }?>
	 </table>
   <!-- ===========delete query ================ -->
<?php 
  if(isset($_POST['delete']))
  {
  	$sql="DELETE FROM assign_work WHERE request_id = {$_POST['id']} ";
  	$res= mysqli_query($db,$sql);
  }
?>

</div>


<?php
include('include/adminFooter.php');
 ?>