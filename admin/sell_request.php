<?php
define('title', "sell || request");
define('PAGE',"sell_request");


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