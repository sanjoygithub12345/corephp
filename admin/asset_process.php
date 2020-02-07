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
        $pname=$_POST['pname'];
        $pdate=$_POST['pdate'];
        $pava=$_POST['pava'];
        $ptotal=$_POST['ptotal'];
        $poriginalprise=$_POST['poriginalprise'];
        $psellprise=$_POST['psellprise'];

        $sql="INSERT INTO asset (pname,pdate,pava,ptotal,poriginalprise,psellprise) VALUES ('$pname','$pdate','$pava','$ptotal','$poriginalprise','$psellprise')";
        $res=mysqli_query($data,$sql);
        if(isset($res))
        {
          header('location:asset.php');
        }
       }
?>


<!-- =================================update query==================== -->
<?php
  if(isset($_POST['update']))
  {      $id=$_POST['id'];
        $pname=$_POST['pname'];
        $pdate=$_POST['pdate'];
        $pava=$_POST['pava'];
        $ptotal=$_POST['ptotal'];
        $poriginalprise=$_POST['poriginalprise'];
        $psellprise=$_POST['psellprise'];

        $sql="UPDATE asset SET pname='$pname',pdate='$pdate', pava='$pava',ptotal='$ptotal',poriginalprise='$poriginalprise',psellprise='$psellprise' WHERE id=$id";
        $res=mysqli_query($data,$sql);
         var_dump($res);
        if(isset($res))
        {
          header('location:asset.php');
        }
  }
 ?>
 <!-- ==========================delete query=================== -->
 <?php
  if(isset($_GET['delete']))
  {
    $id=$_GET['delete'];
    $sql="DELETE FROM asset WHERE id=$id";
    $res=mysqli_query($data,$sql);
     if(isset($res))
     {
      header('location:asset.php');
     }
  }
  ?>