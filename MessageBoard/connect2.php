<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
mysql_connect("localhost","tusna08124","ru6186al6");
mysql_select_db("guest");
mysql_query("set name utf8");
$data=mysql_query("select * form guest");
?>
