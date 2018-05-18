<?php 
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
session_start();
if($_SESSION['v']!="yes"){
 header("location:p13-login.php");
}

require("connect2.php");
$id=$_GET['id'];
mysql_query("delete from guest where guestID = '$id'");
header("location:p13-admin.php");
?>