<?php 
define('title', "requester");
define('PAGE',"requester");


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
<div class="col-md-8 ml-3">
	<p class="text-center bg-dark text-white p-1 mt-3">signup list</p>
		<table class="table ">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
	<?php 
	$sql="SELECT * FROM signup";
	$res=mysqli_query($db,$sql);
	while ($result=mysqli_fetch_assoc($res)) {
	?>
	 <tr>
	 	<td><?php echo $result['id'] ?></td>
	 	<td><?php echo $result['username'] ?></td>
	 	<td><?php echo $result['email'] ?></td>
	 	<td>
	 		<form method="post">
	 			<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
	 			<button class="btn btn-danger btn-sm" type="submit" name="delete">
	 					<i class="far fa-trash-alt"></i>
	 			</button>
	 			
	 		</form>
	 	</td>

	 </tr>
<?php }?>

<?php 
  if(isset($_POST['delete']))
  {
  	$sql="DELETE FROM signup  WHERE id={$_POST['id']}";
  	$res=mysqli_query($db,$sql);
  }
?>
     
	</table>

</div>

<?php
include('include/adminFooter.php');
 ?>