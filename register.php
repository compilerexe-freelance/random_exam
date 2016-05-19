<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register Form</title>
    </head>
    <body>

<?php
include 'dbconnection.php';
require_once('class/class.upload.php') ;
mysql_query("SET NAMES UTF8");

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$type = 'New';
$unique_name = date("y-m-d");
//echo $_POST["MM_insert"];
//$upload_image = new upload($_FILES['image_name']) ;

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "forms")) {
	//echo "Hi";
	 // เริ่มต้นใช้งาน class.upload.php ด้วยการสร้าง instant จากคลาส
    $upload_image = new upload($_FILES['image_name']) ; // $_FILES['image_name'] ชื่อของช่องที่ให้เลือกไฟล์เพื่ออัปโหลด
	
	//  ถ้าหากมีภาพถูกอัปโหลดมาจริง
	if ( $upload_image->uploaded ) {
		 // ย่อขนาดภาพให้เล็กลงหน่อย  โดยยึดขนาดภาพตามความกว้าง  ความสูงให้คำณวนอัตโนมัติ
        // ถ้าหากไม่ต้องการย่อขนาดภาพ ก็ลบ 3 บรรทัดด้านล่างทิ้งไปได้เลย
        $upload_image->image_resize         = true ; // อนุญาติให้ย่อภาพได้
        $upload_image->image_x              = 100 ; // กำหนดความกว้างภาพเท่ากับ 100 pixel 
        $upload_image->image_ratio_y        = true; // ให้คำณวนความสูงอัตโนมัติ
 
 		$upload_image->file_new_name_body = $unique_name;
		
        $upload_image->process( "profile_images" ); // เก็บภาพไว้ในโฟลเดอร์ที่ต้องการ  *** โฟลเดอร์ต้องมี permission 0777
		
		
		
        // ถ้าหากว่าการจัดเก็บรูปภาพไม่มีปัญหา  เก็บชื่อภาพไว้ในตัวแปร เพื่อเอาไปเก็บในฐานข้อมูลต่อไป
        if ( $upload_image->processed ) {
 
            $image_name =  $upload_image->file_dst_name ; // ชื่อไฟล์หลังกระบวนการเก็บ จะอยู่ที่ file_dst_name
            $upload_image->clean(); // คืนค่าหน่วยความจำ
 			echo $image_name;
 			
            // เก็บชื่อภาพลงฐานข้อมูล
            $insertSQL = sprintf("INSERT INTO tb_member (Username, Password, Name, Email, Gender, Mtype,Pic) VALUES ('$username', '$password', '$name', '$email', '$gender', '$type', '$image_name')" );
          // echo $insertSQL ;
           // mysql_select_db($cfDatabase, $meConnect);
            $Result1 = mysql_query($insertSQL);
 			if($Result1){
				//echo "completed.";?>	
                
                <script type="text/javascript">
					window.location="index.html";
				</script>		
<?php
 			} 

        }// END if ( $upload_image->processed )
 
    }//END if ( $upload_image->uploaded )
}
?>
</body>
</html>