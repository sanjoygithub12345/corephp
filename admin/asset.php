<?php 
define('title','asset');
define('PAGE',"asset");

include('include/adminHeader.php');
include('../dbconection.php');
    $edite_satus=false;

session_start();
if(isset($_SESSION['login']))
{

}
else
{
	header('location:adminUserLogin.php');
}
?>

  <div class="col-md-10">
   <p class="bg-dark text-white text-center mt-3">list of product</p>
   <table class="table table-responsive text-center">
      <tr>
         <th>product id</th>
         <th>name</th>
         <th>date of purches</th>
         <th>Avilable</th>
         <th>Total</th>
         <th>Original cost each </th>
         <th>Selling cost each</th>
         <th>Action</th>



      </tr>
     <!-- ==================== dispaly php query===================== -->
     <?php 
     $sql="SELECT * FROM asset";
     $res=mysqli_query($db,$sql);
    while ($result=mysqli_fetch_assoc($res)) { 
     ?>
     <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['pname']; ?></td>
        <td><?php echo $result['pdate']; ?></td>
        <td><?php echo $result['pava']; ?></td>
        <td><?php echo $result['ptotal']; ?></td>
        <td><?php echo $result['poriginalprise']; ?></td>
        <td><?php echo $result['psellprise']; ?></td>


        <td>
           <a href="asset.php?edite=<?php echo $result['id']; ?>" class="btn btn-sm btn-primary">edite</a>
           <a href="asset_process.php?delete=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">delete</a>
           <a href="asset_product_sell.php?id=<?php echo $result['id']; ?>" class="btn btn-warning btn-sm">sell peoduct</a>

        </td>


     </tr>

<?php }?>
   </table>
   <!-- =======================edite link=============== -->
       <?php  
        if(isset($_GET['edite']))
        {
          $edite_satus=true;
          $id=$_GET['edite'];
          $sql="SELECT * FROM asset WHERE id=$id";
          $res=mysqli_query($db,$sql);
          $recored=mysqli_fetch_assoc($res);
          $id=$recored['id'];
        }
        ?>
   <!-- ================insert from================== -->
   <div>
      <p class="bg-warning text-center text-white">insert product</p>
   </div>
     <div class="jumbotron">
        <form method="post" action="asset_process.php">
           <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id ; ?>" required>
              <label>name</label>
              <input type="text" name="pname" class="form-control" value="<?php if(isset($recored['pname'])) echo $recored['pname']; ?>" required>
           </div>
            <div class="form-group">
              <label>pdate</label>
              <input type="date" name="pdate" class="form-control" value="<?php if(isset($recored['pdate'])) echo $recored['pdate'] ;?>" required>
           </div>
            <div class="form-group">
              <label>pava</label>
              <input type="text" name="pava" class="form-control" value="<?php if(isset($recored['pava'])) echo $recored['pava']; ?>" required>
           </div>
            <div class="form-group">
              <label>ptotal</label>
              <input type="text" name="ptotal" class="form-control" value="<?php if(isset($recored['ptotal'])) echo $recored['ptotal']; ?>" required>
           </div>
             <div class="form-group">
              <label>poriginalprise</label>
              <input type="text" name="poriginalprise" class="form-control" value="<?php if(isset($recored['poriginalprise'])) echo $recored['poriginalprise']; ?>" required>
           </div>
            <div class="form-group">
              <label>psellprise</label>
              <input type="text" name="psellprise" class="form-control" value="<?php if(isset($recored['psellprise'])) echo $recored['psellprise']; ?>" required>
           </div>
            <?php if($edite_satus==false) { ?>
           <input type="submit" name="save" value="save" class="btn-primary btn">
        <?php } else { ?>
           <input type="submit" name="update" value="update" class=" btn-primary btn">
        <?php } ?>

        </form>
     </div>
</div>




<?php
include('include/adminFooter.php');
 ?>