<?php
include 'check_session.php';
include 'dbconnection.php';

 $sql="Select Mtype From tb_member Where Username='".$_SESSION['ses_user']."'";
 $result = mysql_query($sql);
 $cell_data = mysql_result($result,0,0);

 //$recordset=mysql_fetch_assoc($result);
 //echo $cell_data;
// echo "Hello,   ".$_SESSION['ses_user']."  You Are ".$cell_data." User";
 if($cell_data == 'New'){ ?>
	  <script type="text/javascript">
	 	window.location="homepage.php";
	 </script>
<?php
 }
 else{ ?>
	 <script type="text/javascript">
	 	window.location="homepage.php";
	 </script>
 <?php
 }
?>