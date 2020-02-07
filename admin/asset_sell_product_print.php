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

 <?php 
 $sql="SELECT * FROM customer WHERE id='".$_SESSION['id']."'";
 $res=mysqli_query($db,$sql);
   $result=mysqli_fetch_assoc($res);
   echo $result['id'];
 ?>
   <div class="col-md-8">
   	    <form method="post">
        	   <div class="form-group">
              <label>Customer name</label>
              <input type="text" name="c_name" class="form-control" value="<?php echo $result['c_name'] ?>">
           </div>
              <div class="form-group">
              <label>Customer address</label>
              <input type="text" name="k_address" class="form-control" value="<?php echo $result['k_address']?>">
           </div>
           <div class="form-group">
 
              <label>product anme</label>
              <input type="text" name="pname" class="form-control" value="<?php echo
              $result['pname'] ?>" required>
           </div>
           
            <div class="form-group">
              <label>avalable</label>
              <input type="text" name="pava" class="form-control" value="<?php echo $result['pava']; ?>" >
           </div>
            <div class="form-group">
              <label>quantity</label>
              <input type="text" name="ptotal" class="form-control" value="<?php echo $result['ptotal']; ?>" required>
           </div>
          
            <div class="form-group">
              <label>psellprise</label>
              <input type="text" name="psellprise" class="form-control" value="<?php echo $result['psellprise']; ?>" >
           </div>
             <div class="form-group">
              <label>total prise</label>
              <input type="text" name="t_prise" class="form-control" value="<?php echo $result['t_prise'] ?>">
           </div>
           <input type="submit" name="print"  class="btn btn-primary d-print-none" value="print" onclick="window.print()">
        </form>
     </div>
   </div>



<?php
include('include/adminFooter.php');
 ?>