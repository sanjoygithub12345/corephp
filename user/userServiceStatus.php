<?php 
define('TITLE', 'user || checkStatus' );
define('PAGE', 'userServiceStatus' );
session_start();
include('include/header.php');
 if(isset($_SESSION['login']))
  {

  }
  else
  {
  	header('location:userLogin.php');
  }

 ?>
  
 
 
 

 <?php
include('include/footer.php');

?>