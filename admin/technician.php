<?php 
define('title', "technician");
define('PAGE',"technician");

    $edite_satus=false;


include('include/adminHeader.php');
include('../dbconection.php');
// include('technician_process.php');
session_start();
if(isset($_SESSION['login']))
{

}
else
{
	header('location:adminUserLogin.php');
}
?>
<div class="col-md-6">
   <p class="bg-dark text-white text-center mt-3">list of technician</p>
   <table class="table">
      <tr>
         <th>id</th>
         <th>name</th>
         <th>city</th>
         <th>mobile</th>
         <th>email</th>
         <th>operation</th>


      </tr>
     <!-- ==================== dispaly php query===================== -->
     <?php 
     $sql="SELECT * FROM technician";
     $res=mysqli_query($db,$sql);
    while ($result=mysqli_fetch_assoc($res)) { 
     ?>
     <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['city']; ?></td>
        <td><?php echo $result['mobile']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td>
           <a href="technician.php?edite=<?php echo $result['id']; ?>" class="btn btn-sm btn-primary">edite</a>
           <a href="technician_process.php?delete=<?php echo $result['id']; ?>" class="btn btn-danger btn-sm">delete</a>

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
          $sql="SELECT * FROM technician WHERE id=$id";
          $res=mysqli_query($db,$sql);
          $recored=mysqli_fetch_assoc($res);
          $id=$recored['id'];
        }
        ?>
   <!-- ================insert from================== -->
   <div>
      <p class="bg-warning text-center text-white">insert technician</p>
   </div>
     <div class="jumbotron">
        <form method="post" action="technician_process.php">
           <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id ; ?>" required>
              <label>name</label>
              <input type="text" name="name" class="form-control" value="<?php if(isset($recored['name'])) echo $recored['name']; ?>" required>
           </div>
            <div class="form-group">
              <label>city</label>
              <input type="text" name="city" class="form-control" value="<?php if(isset($recored['city'])) echo $recored['city'] ;?>" required>
           </div>
            <div class="form-group">
              <label>mobile</label>
              <input type="text" name="mobile" class="form-control" value="<?php if(isset($recored['mobile'])) echo $recored['mobile']; ?>" required>
           </div>
            <div class="form-group">
              <label>email</label>
              <input type="text" name="email" class="form-control" value="<?php if(isset($recored['email'])) echo $recored['email']; ?>" required>
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