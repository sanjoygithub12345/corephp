<?php 
       // ====================insert query==========
// include('../dbconection.php');
 $data=mysqli_connect('localhost','root','','osms');
 if(isset($data))
 {
  echo 'ok';
 }

    $edite_satus=false;
       if(isset($_POST['save']))
       {
        $name=$_POST['name'];
        $city=$_POST['city'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $sql="INSERT INTO technician (name,city,mobile,email) VALUES ('$name','$city','$mobile','$email')";
        $res=mysqli_query($data,$sql);
        if(isset($res))
        {
          header('location:technician.php');
        }
       }
?>


<!-- =================================update query==================== -->
<?php
  if(isset($_POST['update']))
  {      $id=$_POST['id'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $sql="UPDATE technician SET name='$name',city='$city', mobile='$mobile',email='$email' WHERE id=$id";
        $res=mysqli_query($data,$sql);
         var_dump($res);
        if(isset($res))
        {
          header('location:technician.php');
        }
  }
 ?>
 <!-- ==========================delete query=================== -->
 <?php
  if(isset($_GET['delete']))
  {
    $id=$_GET['delete'];
    $sql="DELETE FROM technician WHERE id=$id";
    $res=mysqli_query($data,$sql);
     if(isset($res))
     {
      header('location:technician.php');
     }
  }
  ?>