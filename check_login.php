<?php  
include 'dbconnection.php';  ///เรียกใช้ไฟล์ php ที่มีคำสั่งเชื่อมต่อฐานข้อมูล
session_start();  
header("Content-type:text/html; charset=UTF-8");                
header("Cache-Control: no-store, no-cache, must-revalidate");               
header("Cache-Control: post-check=0, pre-check=0", false);
     
// ส่วนของการเชิ่อมต่อกับฐานข้อมูล     
//mysql_connect("localhost","root","12345") or die("Cannot connect the Server");     
//mysql_select_db("db_elearning") or die("Cannot select database");     
//mysql_query("set character set utf8");     
  
if($_POST['username']!="" && $_POST['password']!=""){  
    $q="SELECT * FROM tb_member WHERE Username='".$_POST['username']."' ";  
    $q.=" AND Password ='".$_POST['password']."' LIMIT 1 ";  
    $qr=mysql_query($q);  
    if(mysql_num_rows($qr)>0){  
        $rs=mysql_fetch_array($qr);  
		
        $_SESSION['ses_user']= $_POST['username'];  // สร้างตัวแปร session ตามต้องการ  
        echo "1";  // เมื่อล็อกอินผ่าน  
    }else{  
        echo "0";     
    }  
}else{  
    echo "0";     
}  
?>  