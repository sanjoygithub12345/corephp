<?php 
define('TITLE', 'user || ReciveCopy' );
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
$sql="SELECT * FROM userrequest where id= {$_SESSION['getid']}";
$res=mysqli_query($db,$sql);
$result=mysqli_fetch_assoc($res);
?>

<table class="table">
	<tr>
		<th>id</th>
		 <td><?php echo $result['id'] ?></td>
	</tr>
	<tr>
		<th>Request_info</th>
		 <td><?php echo $result['requestinfo'] ?></td>
	</tr>
	<tr>
		<th>Description</th>
		 <td><?php echo $result['description'] ?></td>
	</tr>
	<tr>
		<th>name</th>
		 <td><?php echo $result['name'] ?></td>
	</tr>
	<tr>
		<th>email</th>
		 <td><?php echo $result['email'] ?></td>
	</tr>
	<tr>
		<td>
			<form class="d-print-none">
				<input type="submit" class="btn btn-primary" value="print" name="" onclick="window.print()">
			</form>
		</td>
	</tr>
</table>





<?php
include('include/footer.php');

?>