<?php

// This is a sample code in case you wish to check the username from a mysql db table

if(isSet($_POST['username']))
{
$username = $_POST['username'];

include("dbconnection.php");

$sql_check = mysql_query("SELECT Username FROM tb_member WHERE Username='$username'");
//echo $sql_check;

if(mysql_num_rows($sql_check))
{
echo '<font color="red">The username <STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>