<?php
//echo "hi";
include 'check_session.php';
include 'dbconnection.php';
$comment = $_POST['comment'];

$user = $_SESSION['ses_user'];

echo $comment;


$insertSQL = sprintf("INSERT INTO tb_comment (Username, Detail) VALUES ('$user', '$comment')" );
           // echo $insertSQL ;
            
 $Result1 = mysql_query($insertSQL);
 if($Result1){ 
 
 ?>

	 	<script type="text/javascript">
			//window.location="learn.php";
		window.location="homepage.php";
		</script>

<?php

 }
 else
 {
	 echo $insertSQL;
 }
 

 
?>