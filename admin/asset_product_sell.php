<?php 
define('title','asset');
define('PAGE',"asset");

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
 <!-- =========================grt data====================== -->
 <?php
 $id=$_GET['id'];
 $sql="SELECT * FROM asset WHERE id=$id";
 $res=mysqli_query($db,$sql);
 $result=mysqli_fetch_assoc($res);
  ?>
 
<p></p>
 <div class="jumbotron col-md-6 mt-5">
        <form method="post">
        	   <div class="form-group">
              <label>Customer name</label>
              <input type="text" name="c_name" class="form-control"required>
           </div>
              <div class="form-group">
              <label>Customer address</label>
              <input type="text" name="k_address" class="form-control" required>
           </div>
           <div class="form-group">
 
              <label>product anme</label>
              <input type="text" name="pname" class="form-control" value="<?php echo
              $result['pname'] ?>" required>
           </div>
           
            <div class="form-group">
              <label>avalable</label>
              <input type="text" name="pava" class="form-control" value="<?php if(isset($result['pava'])) echo $result['pava']; ?>" required>
           </div>
            <div class="form-group">
              <label>quantity</label>
              <input type="text" name="ptotal" class="form-control" value="<?php if(isset($result['result'])) echo $recored['result']; ?>" required>
           </div>
          
            <div class="form-group">
              <label>psellprise</label>
              <input type="text" name="psellprise" class="form-control" value="<?php if(isset($result['psellprise'])) echo $result['psellprise']; ?>" required>
           </div>
             <div class="form-group">
              <label>total prise</label>
              <input type="text" name="t_prise" class="form-control" required>
           </div>
           <input type="submit" name="save" value="save"  class="btn btn-primary">
        </form>
     </div>
      <?php
  if(isset($_POST['save']))
  {
  	$c_name=$_POST['c_name'];
  	$k_address=$_POST['k_address'];
  	$pname=$_POST['pname'];
  	$pava=$_POST['pava'] - $_POST['ptotal'];
  	$ptotal=$_POST['ptotal'];
  	$psellprise=$_POST['psellprise'];
  	$t_prise=$_POST['t_prise'];
  	$sql="INSERT INTO customer (c_name,k_address,pname,pava,ptotal,psellprise,t_prise) VALUES ('$c_name','$k_address','$pname','$pava','$ptotal','$psellprise','$t_prise')";
  	$rest=mysqli_query($db,$sql);
  	
  	if(isset($rest))
  	{    $gid=mysqli_insert_id($db);
  		$_SESSION['id']=$gid;
  	     echo "<script>location.href='asset_sell_product_print.php'</script>";
  	}
  	$sql="UPDATE  asset SET pava=$pava WHERE id=$id";
  	$res=mysqli_query($db,$sql);
  }
   ?>

<?php
include('include/adminFooter.php');
 ?>