<?php
/*
* set var
*/
$cfHost = "localhost";
$cfUser = "root";
$cfPassword = "12345";
// $cfPassword = "";
$cfDatabase = "db_elearning";
 
/*
* connection mysql
*/
$meConnect = mysql_connect($cfHost,$cfUser,$cfPassword) or die("Error conncetion mysql...");
$meDatabase = mysql_select_db($cfDatabase);
mysql_db_query($cfDatabase,"SET NAMES UTF8");
?>