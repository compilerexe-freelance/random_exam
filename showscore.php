<?php
// session_start();
error_reporting(0);
include 'check_session.php';
include 'dbconnection.php';


//$sql="Select Mtype From tb_member Where Username='".$_SESSION['ses_user']."'";
//$result = mysql_query($sql);
//$cell_data = mysql_result($result,0,0);


$sql_request_image = "Select Pic From tb_member Where Username='".$_SESSION['ses_user']."'";
$result_request_image = mysql_query($sql_request_image);
$image_name = mysql_result($result_request_image,0,0);
$dir = "profile_images/";

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>แสดงคะแนน</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style-homepage.css" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)
			});

	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });

	  });


		    });
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
</head>
<body>

<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
    <table width="300" border="0">
  <tbody>
    <tr>
      <td><center>
      <a href="#"><img src="img/logo2.png" width="300" height="120" alt=""></a>


      </td>

    </tr>
  </tbody>
</table>

      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="homepage.php">หน้าหลัก</a></li>
          <li><a href="animation.php">ชมแอนิเมชั่น</a></li>
          <li><a href="substance.php">สาระเพิ่มเติ่ม</a></li>
          <li><a href="posttest.php">แบบทดสอบหลังเรียน</a></li>
          <li><a href="showscore.php">ผลคะแนน</a></li>
          <li><a href="showcomment.php">แสดงความคิดเห็น</a></li>
          <li><a href="about.php">เกี่ยวกับเรา</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
        <ul class="">
           <li><a href="homepage.php">หน้าหลัก</a></li>
          <li><a href="animation.php">ชมแอนิเมชั่น</a></li>
          <li><a href="substance.php">สาระเพิ่มเติ่ม</a></li>

          <li><a href="posttest.php">แบบทดสอบหลังเรียน</a></li>
          <li><a href="showscore.php">ผลคะแนน</a></li>
          <li><a href="showcomment.php">แสดงความคิดเห็น</a></li>
          <li><a href="about.php">เกี่ยวกับเรา</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section-->

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container"> <br><br>
   </b> &nbsp;&nbsp; <?php echo " <img style='width:70px' src='".$dir.$image_name."'/>" ?> สวัสดีคุณ   &nbsp;&nbsp;<b><?php echo $_SESSION['ses_user']?>

      <div class="top_content">
        <div class="row"><center>

         <?php
$sql="Select Mtype From tb_member Where Username='".$_SESSION['ses_user']."'";
$result = mysql_query($sql);
$cell_data = mysql_result($result,0,0);
if($cell_data == "New"){

	$sql_score_new1="Select PrevScore From tb_score Where Username='".$_SESSION['ses_user']."'";
	$result_score_new1 = mysql_query($sql_score_new1);
	$row = mysql_num_rows($result_score_new1);
	//$_score_new1 = mysql_result($result_score_new1);

	if($row == 0)
	{
	?>
 <h2>คุณยังไม่เคยทำแบบทดสอบก่อนเรียน</h2>
 <br>
 <a href="pretest.php" class="learn_more2">ทำแบบทดสอบก่อนเรียน</a> </div>
<?php
	}
	else
	{


		?>
    <h2>คุณได้คะแนนก่อนเรียน &nbsp;&nbsp; <?php echo $_score_new1 ?>&nbsp;&nbsp; คะแนน</h2>
    <br>
    <a href="posttest.php" class="learn_more2">ทำแบบทดสอบหลังเรียน</a> </div>

	<?php }

}
else{

	$sql_score_old1="Select PrevScore From tb_score Where Username='".$_SESSION['ses_user']."'";
	$result_score_old1 = mysql_query($sql_score_old1);
	$_score_old1 = mysql_result($result_score_old1,0,0);

	$sql_score_old2="Select CurrentScore From tb_score Where Username='".$_SESSION['ses_user']."'";
	$result_score_old2 = mysql_query($sql_score_old2);
	$_score_old2 = mysql_result($result_score_old2,0,0);

	if($_score_old2 == "")
	{?>

    <h2>คุณได้คะแนนก่อนเรียน &nbsp;&nbsp; <?php echo $_score_old1 ?>&nbsp;&nbsp; คะแนน</h2>
    <br>
    <a href="posttest.php" class="learn_more2">ทำแบบทดสอบหลังเรียน</a> </div>

<?php	}
	else
	{
	?>

		 <h3>คุณได้คะแนนก่อนเรียน &nbsp;&nbsp;<font color="#FF0004"> <?php echo $_score_old1 ?>&nbsp;&nbsp;</font> คะแนน</h3>
    <br>
     <h3>คุณได้คะแนนหลังเรียน&nbsp;&nbsp; <font color="#FF0004"> <?php echo $_score_old2 ?>&nbsp;&nbsp;</font> คะแนน</h3>
    <br>
  <?php
	}


	?>

	<!-- history -->


<?php } ?>
        </center></div>
      </div>
    </div>
  </div>
</section>
<!--Top_content-->

<div class="container row col-md-4 col-md-offset-4">

  <?php

		if ($_SESSION['state_posttest'] != "") {


  	$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
  	// Check connection
  	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tb_history";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
      if ($row["id"] == 1) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a1').attr('style','color:red');
            $('#ans_d1').attr('style','color:green');
            $('#a1').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b1').attr('style','color:red');
            $('#ans_d1').attr('style','color:green');
            $('#b1').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c1').attr('style','color:red');
            $('#ans_d1').attr('style','color:green');
            $('#c1').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d1').attr('style','color:green');
            $('#d1').click();
          });</script>";
        }
      }
      //------------- 2--------------
      if ($row["id"] == 2) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a2').attr('style','color:red');
            $('#ans_b2').attr('style','color:green');
            $('#a2').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b2').attr('style','color:green');
            $('#b2').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c2').attr('style','color:red');
            $('#ans_b2').attr('style','color:green');
            $('#c2').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d2').attr('style','color:red');
            $('#ans_b2').attr('style','color:green');
            $('#d2').click();
          });</script>";
        }
      }
      //------------- 3--------------
      if ($row["id"] == 3) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){

            $('#ans_a3').attr('style','color:green');
            $('#a3').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a3').attr('style','color:green');
            $('#ans_b3').attr('style','color:red');
            $('#b3').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c3').attr('style','color:red');
            $('#ans_a3').attr('style','color:green');
            $('#c3').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d3').attr('style','color:red');
            $('#ans_a3').attr('style','color:green');
            $('#d3').click();
          });</script>";
        }
      }
      //------------- 4--------------
      if ($row["id"] == 4) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_a4').attr('style','color:red');
            $('#ans_a4').attr('style','color:green');
            $('#a4').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a4').attr('style','color:green');
            $('#ans_b4').attr('style','color:red');
            $('#b4').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c4').attr('style','color:red');
            $('#ans_a4').attr('style','color:green');
            $('#c4').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d4').attr('style','color:red');
            $('#ans_a4').attr('style','color:green');
            $('#d4').click();
          });</script>";
        }
      }
      //------------- 5--------------
      if ($row["id"] == 5) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a5').attr('style','color:red');
            $('#ans_b5').attr('style','color:green');
            $('#a5').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_c5').attr('style','color:red');
            $('#ans_b5').attr('style','color:green');
            $('#b5').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c5').attr('style','color:red');
            $('#ans_b5').attr('style','color:green');
            $('#c5').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d5').attr('style','color:red');
            $('#ans_b5').attr('style','color:green');
            $('#d5').click();
          });</script>";
        }
      }
      //------------- 6--------------
      if ($row["id"] == 6) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a6').attr('style','color:red');
            $('#ans_c6').attr('style','color:green');
            $('#a6').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b6').attr('style','color:red');
            $('#ans_c6').attr('style','color:green');
            $('#b6').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_c6').attr('style','color:red');
            $('#ans_c6').attr('style','color:green');
            $('#c6').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d6').attr('style','color:red');
            $('#ans_c6').attr('style','color:green');
            $('#d6').click();
          });</script>";
        }
      }
      //------------- 7--------------
      if ($row["id"] == 7) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_a7').attr('style','color:red');
            $('#ans_a7').attr('style','color:green');
            $('#a7').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b7').attr('style','color:red');
            $('#ans_a7').attr('style','color:green');
            $('#b7').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c7').attr('style','color:red');
            $('#ans_a7').attr('style','color:green');
            $('#c7').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d7').attr('style','color:red');
            $('#ans_a7').attr('style','color:green');
            $('#d7').click();
          });</script>";
        }
      }
      //------------- 8--------------
      if ($row["id"] == 8) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_a8').attr('style','color:red');
            $('#ans_a8').attr('style','color:green');
            $('#a8').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b8').attr('style','color:red');
            $('#ans_a8').attr('style','color:green');
            $('#b8').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c8').attr('style','color:red');
            $('#ans_a8').attr('style','color:green');
            $('#c8').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d8').attr('style','color:red');
            $('#ans_a8').attr('style','color:green');
            $('#d8').click();
          });</script>";
        }
      }
      //------------- 9--------------
      if ($row["id"] == 9) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a9').attr('style','color:red');
            $('#ans_d9').attr('style','color:green');
            $('#a9').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b9').attr('style','color:red');
            $('#ans_d9').attr('style','color:green');
            $('#b9').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_c9').attr('style','color:red');
            $('#ans_d9').attr('style','color:green');
            $('#c9').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_d9').attr('style','color:red');
            $('#ans_d9').attr('style','color:green');
            $('#d9').click();
          });</script>";
        }
      }
      //------------- 10--------------
      if ($row["id"] == 10) {
        $s = $row["select_ans"];
        if ($s == "a") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_a10').attr('style','color:red');
            $('#ans_c10').attr('style','color:green');
            $('#a10').click();
          });</script>";
        }
        if ($s == "b") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_b10').attr('style','color:red');
            $('#ans_c10').attr('style','color:green');
            $('#b10').click();
          });</script>";
        }
        if ($s == "c") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            //$('#ans_c10').attr('style','color:red');
            $('#ans_c10').attr('style','color:green');
            $('#c10').click();
          });</script>";
        }
        if ($s == "d") {
          echo "<script type='text/javascript'>$(document).ready(function(){
            $('#ans_d10').attr('style','color:red');
            $('#ans_c10').attr('style','color:green');
            $('#d10').click();
          });</script>";
        }
      }

    }

		echo '
		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">1.&ensp;ไวรัสหรือมัลแวร์ประเภทใดที่ได้ชื่อ จากสงครามกรีก ทรอย?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a1" name="answer1">&ensp;<span id="ans_a1">a.rootkit</span></input>
		<br>
		<input type="radio" value="b" id="b1" name="answer1">&ensp;<span id="ans_b1">b.spyware</span></input>
		<br>
		<input type="radio" value="c" id="c1" name="answer1">&ensp;<span id="ans_c1">c.worm</span></input>
	<br>
		<input type="radio" value="d" id="d1" name="answer1">&ensp;<span id="ans_d1"> d.trojan</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">2.&ensp;ม้าโทรจัน สามารถเข้ามาทำลายซอฟแวร์ป้องกันไวรัสและไฟล์วอลได้อย่างไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a2" name="answer2">&ensp;
			<span id="ans_a2">a.คลิ๊กแบนเนอร์โฆษณา</span>
		</input>
		<br>
		<input type="radio" value="b" id="b2" name="answer2">&ensp;
			<span id="ans_b2">b.แฝงตัวมาทางอีเมลล์แล้วอ้างว่าเป็นโปรแกรมป้องกันไวรัส</span>
		</input>
		<br>
		<input type="radio" value="c" id="c2" name="answer2">&ensp;
			<span id="ans_c2">c.ติดจากแฟลชไดฟ์</span>
		</input>
		<br>
		<input type="radio" value="d" id="d2" name="answer2">&ensp;
			<span id="ans_d2">d.มาจากการเข้าเว็บไซต์ที่ผิดกฏหมาย</input>
		</span>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">3.&ensp;ถ้าเครื่องคอมพิวเตอร์ติดมัลแวร์ Backdoor แล้ว จะเกิดผลเสียอย่างไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a3" name="answer3">&ensp;
		<span id="ans_a3">a.แฮ็กเกอร์สามารถเข้ามาขโมยข้อมูลต่างๆได้</span></input>
		<br>
		<input type="radio" value="b" id="b3" name="answer3">&ensp;
		<span id="ans_b3">b.คอมพิวเตอร์ดับ</span></input>
		<br>
		<input type="radio" value="c" id="c3" name="answer3">&ensp;
		<span id="ans_c3">c.มีป๊อปอัพหรือแบนเนอร์ขึ้นมาถี่ๆ</span></input>
	<br>
		<input type="radio" value="d" id="d3" name="answer3">&ensp;
		<span id="ans_d3">d.เครื่องคอมพิวเตอร์รีสตาร์ทเอง</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">4.&ensp;White Hacker หรือ Admin นำ Back Door ไปใช้ทำอะไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a4" name="answer4">&ensp;
		<span id="ans_a4">a.ทดสอบการรักษาความปลอดภัยของระบบ</span></input>
		<br>
		<input type="radio" value="b" id="b4" name="answer4">&ensp;
		<span id="ans_b4">b.แฮ็กข้อมูล</span></input>
		<br>
		<input type="radio" value="c" id="c4" name="answer4">&ensp;
		<span id="ans_c4">c.ดาวน์โหลดซอฟแวร์ผิดกฏหมาย</span></input>
	<br>
		<input type="radio" value="d" id="d4" name="answer4">&ensp;
		<span id="ans_d4">d.แพร่กระจายไวรัส</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">5.&ensp;หนอนคอมพิวเตอร์ ไม่สามารถเข้ามายังเครื่องคอมพิวเตอร์ได้โดยวิธีใด?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a5" name="answer5">&ensp;
		<span id="ans_a5">a.ผ่านระบบอีเมลล์ โดยจะมาจากไฟล์ที่แนบหรือข้อความ</span></input>
		<br>
		<input type="radio" value="b" id="b5" name="answer5">&ensp;
		<span id="ans_b5">b.ผ่านแผ่น CD,DVD</span></input>
		<br>
		<input type="radio" value="c" id="c5" name="answer5">&ensp;
		<span id="ans_c5">c.ผ่านระบบเครือข่ายอินเทอร์เน็ต</span></input>
	<br>
		<input type="radio" value="d" id="d5" name="answer5">&ensp;
		<span id="ans_d5">d.ผ่านโปรแกรมสนทนาบนเว็บ</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">6.&ensp;Spy ware มีอีกหนึ่งชื่อที่เรียกว่าอะไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a6" name="answer6">&ensp;
		<span id="ans_a6">a.007</span></input>
		<br>
		<input type="radio" value="b" id="b6" name="answer6">&ensp;
		<span id="ans_b6">b.Trojan</span></input>
		<br>
		<input type="radio" value="c" id="c6" name="answer6">&ensp;
		<span id="ans_c6">c.Ads ware</span></input>
	<br>
		<input type="radio" value="d" id="d6" name="answer6">&ensp;
		<span id="ans_d6">d.Black Hacker</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">7.&ensp;จะสามารถสังเกตเครื่องคอมพิวเตอร์ที่ติด Spy Ware จากกิจกรรมอะไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a7" name="answer7">&ensp;
		<span id="ans_a7">a.ดูหนัง,ฟังเพลง</span></input>
		<br>
		<input type="radio" value="b" id="b7" name="answer7">&ensp;
		<span id="ans_b7">b.พิมพ์รายงาน</span></input>
		<br>
		<input type="radio" value="c" id="c7" name="answer7">&ensp;
		<span id="ans_c7">c.โหลดซอฟแวร์ฟรี</span></input>
	<br>
		<input type="radio" value="d" id="d7" name="answer7">&ensp;
		<span id="ans_d7">d.เข้าเว็บไซต์ที่ผิดกฏหมาย</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">8.&ensp;จะป้องกัน Spy ware ติดเครื่องพิวเตอร์ได้อย่างไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a8" name="answer8">&ensp;
		<span id="ans_a8">a.ไม่กดเข้าป๊อปอัพ หรือโฆษณาที่โผล่มาตามเว็บไซต์</span></input>
		<br>
		<input type="radio" value="b" id="b8" name="answer8">&ensp;
		<span id="ans_b8">b.โหลดซอฟแวร์ผิดกฏหมายมาใช้</span></input>
		<br>
		<input type="radio" value="c" id="c8" name="answer8">&ensp;
		<span id="ans_c8">c.โหลดซอฟแวร์ฟรี</span></input>
	<br>
		<input type="radio" value="d" id="d8" name="answer8">&ensp;
		<span id="ans_d8">d.เข้าเว็บไซต์ที่ผิดกฏหมาย</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">9.&ensp;ข้อใด ไม่ใช่ คุณสมบัติของ Rootkit?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a9" name="answer9">&ensp;
		<span id="ans_a9">a.ซ่อนตัวไม่ให้ Anti-Virus ทั่วไปตรวจพบ</span></input>
		<br>
		<input type="radio" value="b" id="b9" name="answer9">&ensp;
		<span id="ans_b9">b.ซ่อนไฟล์ โฟลเดอร์ และค่ารีจิสตี้</span></input>
		<br>
		<input type="radio" value="c" id="c9" name="answer9">&ensp;
		<span id="ans_c9">c.สามารถทำงานได้ในทุกๆชั้นของระบบปฏิบัติการ</span></input>
	<br>
		<input type="radio" value="d" id="d9" name="answer9">&ensp;
		<span id="ans_d9">d.ทำให้คอมพิวเตอร์รีสตาร์ทเอง</span></input>
		<br><br>

		<dl class="formInputs">
			<dt>
					<label name= "question1" class="formLabel" for="question1">10.&ensp;Hacker สามารถนำ Rootkit มาทำอะไร?
					</label>
			</dt>
		</dl>
		<input type="radio" value="a" id="a10" name="answer10">&ensp;
		<span id="ans_a10">a.สร้างซอฟแวร์ผิดกฏหมาย</span></input>
		<br>
		<input type="radio" value="b" id="b10" name="answer10">&ensp;
		<span id="ans_b10">b.ตัดสัญญาณอินเทอร์เน็ต</span></input>
		<br>
		<input type="radio" value="c" id="c10" name="answer10">&ensp;
		<span id="ans_c10">c.ซ่อน Trojan และ Backdoor ไม่ให้ Anti-Virus ทั่วไปตรวจพบ</span></input>
	<br>
		<input type="radio" value="d" id="d10" name="answer10">&ensp;
		<span id="ans_d10">d.สร้างหลุมดำเพื่อดูดไฟล์ต่างๆ</span></input>
		<br><br>


	</div>
		';

	}

  ?>



<!-- -->

  <div class="container row col-md-12">
    <div class="footer_bottom"> <span>Copyright © 2015 Vimol </span> </div>
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script>
<script type="text/javascript">
	$(window).load(function(){

		$('a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<!--<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>


-->
<script type="text/javascript">


  jQuery(document).ready(function($){
// Portfolio Isotope
	var container = $('#portfolio-wrap');


	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();
	  	return false;
	});


		function splitColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;


			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}

			return columnNumb;
		}

		function setColumns() {
			var winWidth = $(window).width(),
				columnNumb = splitColumns(),
				postWidth = Math.floor(winWidth / columnNumb);

			container.find('.portfolio-item').each(function () {
				$(this).css( {
					width : postWidth + 'px'
				});
			});
		}

		function setProjects() {
			setColumns();
			container.isotope('reLayout');
		}

		container.imagesLoaded(function () {
			setColumns();
		});


		$(window).bind('resize', function () {
			setProjects();
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
</body>
</html>
