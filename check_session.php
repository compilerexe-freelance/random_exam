<?php  
session_start();  
if(!isset($_SESSION['ses_user']) || $_SESSION['ses_user']==""){  
    header("Location:index.html");     
}  
// ใส่ไว้ด้านบนของไฟล์สำหรับ เช็คว่าเป็น user หรือไม่  
?>  