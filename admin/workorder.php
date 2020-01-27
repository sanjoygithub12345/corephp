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


<?php
include('include/adminFooter.php');
 ?>