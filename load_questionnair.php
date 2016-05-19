<?php

include 'dbconnection.php'; 


$sql_questionnair="Select * From tb_questionnair";
    $result_questionnair = mysql_query($sql_questionnair);
	$q_id_array =array();
    $question_array =array();
	$count_questionnair = 0;
    while($objResult_questionnair = mysql_fetch_array($result_questionnair)){
		$json_questionnair[]=array(  
        "Q_ID"=>$objResult_questionnair['Q_ID'],  
        "Question"=>$objResult_questionnair['Question'],  
    	);  
	  //echo $objResult["Q_ID"].",".$objResult["Question"];
	 // $question_array[$count_questionnair] = $objResult_questionnair["Question"];
	  //$q_id_array[$count_questionnair] = $objResult_questionnair["Q_ID"];
	  //$count_questionnair++;
    }
//$json_questionnair = iconv("tis-620","utf-8",$thai_data);	    
$json= json_encode($json_questionnair);  
echo $json; 
//echo  json_encode($json_questionnair);  
?>

