<?php
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
<title>ไวรัสและภัยคุกคามทางคอมพิวเตอร์</title>
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

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
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
        <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a></div>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Header_section--> 
<section id="top_content" class="top_cont_outer"><!--main-section team-start-->
  <div class="container">
    <?php
$sql="Select Mtype From tb_member Where Username='".$_SESSION['ses_user']."'";
$result = mysql_query($sql);
$cell_data = mysql_result($result,0,0);
if($cell_data == "New"){
	?>
 <h2>กรุณาทำแบบทดสอบก่อนเรียนก่อน  ถึงจะสามารถดูเนื้อหาได้</h2>
<?php
}
else{?>
<br><br><h2>ความรู้เกี่ยวกับไวรัสและภัยคุกคามทางคอมพิวเตอร์</h2><br>
    <center><img class="img-responsive" src="img/p1.jpg" alt=""> </center><br>

<h3>1. ไวรัสคอมพิวเตอร์ (Computer Virus)</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ไวรัสคอมพิวเตอร์(Computer Virus) คือ โปรแกรมคอมพิวเตอร์ที่บุกรุกเข้าไปในเครื่องคอมพิวเตอร์โดยไม่ได้รับความยินยอมจากผู้ใช้ ส่วนมากมักจะมีประสงค์ร้ายและสร้างความเสียหายให้กับระบบของเครื่องคอมพิวเตอร์นั้นๆ บ่อยครั้งที่ผู้คนจะสับสนระหว่างไวรัสกับเวิร์มเวิร์มนั้นจะมีลักษณะของการแพร่กระจายโดยไม่ต้องพึ่งพาหะ ส่วนไวรัสนั้นจะสามารถแพร่กระจายได้ก็ต่อเมื่อมีพาหะนาพาไปเท่านั้น เช่น ทางเครือข่าย หรือทางแผ่นดิสก์ โดยไวรัสนั้นอาจฝังตัวอยู่กับแฟ้มข้อมูล และเครื่องคอมพิวเตอร์จะติดไวรัสเมื่อมีการเรียกใช้แฟ้มข้อมูลนั้น
</p>

<h3>2. มัลแวร์ (Malware)</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มัลแวร์ (Malware)คือ ความไม่ปกติทางโปรแกรม ที่สูญเสีย C (Confidentiality), I (Integrity) และ A (Availability) อย่างใดอย่างหนึ่ง หรือทั้งหมด จนเกิดเป็นไวรัส เวิร์ม โทรจัน สปายแวร์ Backdoor และ Rootkit<br>
- การสูญเสีย C (Confidentiality) คือ สูญเสียความลับทางข้อมูล <br>
- การสูญเสีย I (Integrity) คือ สูญเสียความไม่เปลี่ยนแปลงของข้อมูล นั่นคือ ข้อมูลถูกเปลี่ยนแปลงแก้ไข โดยเฉพาะส่วนสาคัญที่เกี่ยวโยงกับระบบภายในระบบปฏิบัติการ <br>
- การสูญเสีย A (Availability) คือ สูญเสียเสถียรภาพของระบบปฏิบัติการ

</p>
<br>


<center><img class="img-responsive" src="img/p2.png" alt=""></center>

<h3>3. ประเภทภัยคุกคามทางคอมพิวเตอร์</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>1. ข้อผิดพลาดจากการกระทำของมนุษย์ (Acts of human error or failure) </b>มีการกระทำโดยเจตนา หรือ มีเจตนามุ่งร้ายโดยผู้ใช้ที่มีสิทธิเข้าใช้ระบบ เมื่อผู้ใช้ระบบทำงานผิดพลาด เนื่องจากขาดความชำนาญ ขาดการฝึกอบรม และการสันนิษฐานไม่ถูกต้อง สิ่งเล็กน้อยเหล่านี้สามารถสร้างความเสียหายอย่างมาก การคุกคามที่อันตรายที่สุดต่อความปลอดภัยของข้อมูลองค์กร คือ พนักงานขององค์กรเอง เพราะพนักงานใช้ข้อมูลในการดำเนินกิจกรรมทางธุรกิจขององค์กรทุกวัน สิ่งที่พนักงานจะต้องปฏิบัติอย่างเคร่งครัดคือ การรักษาความลับของข้อมูล ข้อมูลมีความถูกต้องครบถ้วน และข้อมูลพร้อมใช้งานได้ทุกเมื่อ 

</p>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>2. ภัยร้ายต่อทรัพย์สินทางปัญญา (Comromises to Intellectual Property)  </b>ทรัพย์สินทางปัญญา Intellectual Property คือทรัพย์สินที่จับต้องไม่ได้ ที่ถูกสร้างขึ้นมาโดยบุคคลหรือองค์กรใด ๆ หากต้องการนาทรัพย์สินทางปัญญาของผู้อื่นไปใช้ อาจต้องเสียค่าใช้จ่าย และจะต้องระบุแหล่งที่มาของทรัพย์สินดังกล่าวไว้อย่างชัดเจน ในทางกฎหมาย การให้สิทธิในความเป็นเจ้าของทรัพย์สินทางปัญญา มี 4ประเภทคือ ลิขสิทธิ์ (copyrights) ความลับทางการค้า(Trade Secrets) เครื่องหมายการค้า (Trade Marks) สิทธิบัตร(Patents) การละเมิดความคุ้มครองทรัพย์สินทางปัญญาที่มากที่สุดคือ การละเมิดลิขสิทธิ์ซอฟต์แวร์ (Software Piracy)
</p>
<br>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>3. การจารกรรมหรือการรุกล้า (Espionage or Trespass)  </b>การจารกรรมหรือการรุกล้า(Espionage or Trespass) การจารกรรม Espionage เป็นการบุกรุกจากภายนอกเป็นสิ่งที่ได้รับการกล่าวถึงอย่างมาก ทัง้ในรูปแบบที่เป็นอิเล็คทรอนิกส์และกระทำโดยคนที่สามารถเข้าถึงข้อมูลที่เป็นความลับ เมื่อมีบุคคลที่ไม่ได้รับอนุญาตได้ทำการรุกล้ำและพยายามเข้าถึงข้อมูลขององค์กรที่มีการป้องกัน ซึ่งพฤติกรรมดังกล่าวเป็นการบุกรุกโดยยเจตนา นักโจมตีระบบสามารถที่จะใช้วิธีการต่าง ๆ ในการเข้าถึงข้อมูลที่เก็บรักษาอยู่ภายในระบบสารสนเทศ ตัวอย่างเช่น ข้อมูลที่มีการจัดเก็บและรวบรวมโดยการใช้ Web Browser ในการทำวิจัยทางการตลาด วิธีการดังกล่าวเรียกว่า การหาข้อมูลของคู่แข่ง (Competitive Intelligence) ซึ่งถือว่าเป็นการจารกรรมข้อมูลทางอุตสาหกรรม (Industrial Espionage) เป็นการกระทำที่ผิดกฏหมายกลุ่มประเทศที่เป็นพันธมิตรกับทางอเมริกา จึงได้มีการจัดตั้งองค์กรต่อต้านการจารกรรมข้อมูลทางอุตสาหกรรม จะเห็นได้ว่าในนานาประเทศได้ให้ความสำคัญต่อการป้องกันภัยคุกคามและการจารกรรมข้อมูล โดยการมีส่วนร่วมอย่างจริงจังในการรักษาความปลอดภัยในระดับสากล
</p>
<br>


<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>4. การกรรโชกข้อมูลสารสนเทศ (Deliberate Acts of Information Extortion)  </b>การขู่กรรโชกในการเปิดเผยข้อมูลที่เป็นความลับเกิดขึ้นจากการที่ข้อมูลที่เป็นความลับที่จัดเก็บอยู่ในระบบถูกขโมยไปอาจจะเป็นผู้บุกรุกจากภายนอกหรือผู้ที่มีหน้าที่ดูแลรักษาข้อมูลภายในองค์กร โดยมีการเรียกร้องค่าตอบแทนหรือค่าไถ่(Ransom) แลกกับการที่จะไม่เปิดเผยข้อมูลความลับที่ได้ขโมยมา (Black Mail) ส่วนมากจะเป็นการขู่กรรโชกข้อมูลหมายเลขบัตรเครดิตที่ได้ขโมยมา<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวอย่างของ Web-Base CD Universe ที่ตกเป็นเหยื่อของการขโมยแฟ้มข้อมูลที่จัดเก็บข้อมูลหมายเลขบัตรเครดิตของลูกค้า โดยผู้ที่ทำการขโมยข้อมูลเป็น Hacker ชาวรัสเซีย ชื่อ Maxus ซึ่งได้ขโมยข้อมูลบัตรเครดิตไปเป็นจำนวนหลายแสนใบ โดยบริษัท CD Universe ปฏิเสธการจ่ายเงินตามคำขู่ที่จะเปิดเผยข้อมูลความลับนี้ มูลค่า 100,000 ดอลล่าร์ นาย Maxus ได้ทำการ Post หมายเลขบัตรเครดิต ไปใน Web Site เพื่อเสนอขายข้อมูลให้กับกลุ่มคนที่ก่ออาชญากรรม ส่งผลให้ Web Siteได้รับความนิยมเป็นอย่างมากจนจะต้องจำกัดสิทธิของผู้ที่จะเข้ามาดูข้อมูลที่เสนอขาย ตัวอย่าง เหตุการณ์ขู่กรรโชกที่เกิดขึ้นในเดือนมิถุนายน ปี 2000เมื่อมีนักเรียนถูกกล่าวหาว่ากระทำการข่มขู่ว่าจะเปิดโปงความลับ (Online Blackmail) โดยจะทำการเปิดเผยวิธีการ Download หนังสือจากบริษัท Digital       Book โดยไม่ต้องเสียค่าใช้จ่าย ยกเว้นเสียจากจะมีการจ่ายเงินให้ก้อนโต โดยในปี 2001 ได้ไปก่อคดีเดียวกันเพิ่มเติมอีก ซึ่งโทษของการข่มขูที่จะเปิดโปงความลับ (Blackmail) คือ จำคุก 2 ปี และปรับเพิ่ม 100,000ดอลล่าร์ แต่ในกรณีของนักเรียนรายนี้โทษสูงสุดคือ จำคุก 36 ปีและปรับเพิ่ม800,000ดอลล่า

</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>5. การก่อวินาศกรรมหรือการทำลาย (Deliberate Acts of Sabotage or Vandalism)  </b>การมีส่วนร่วมในการป้องกันภัยคุกคามการก่อวินาศกรรมระบบคอมพิวเตอร์หรือธุรกิจ หรือการกลั่นแกล้งทำลายทรัพย์สินก่อให้เกิดความเสียหาย เข่น การทำลายทรัพย์สิน หรือ การทำลายภาพพจน์ที่ดีขององค์กรการกลั่นแกล้งทำลายทรัพย์สินเล็ก ๆ น้อย ๆ โดยพนักงาน สามารถนำไปสู่เหตุการณ์การก่อวินาศกรรมต่อองค์กร ในบางครั้งการสร้างความเสียหายไม่จำเป็นต้องเป็นตัวเงินเสมอไป การโจมตีภาพพจน์ขององค์กรก็เป็นเรื่องร้ายแรงเช่นเดียวกัน การทำลาย Web Site ส่งผลกระทบต่อความเชื่อมั่นของลูกค้าทำให้ยอดขายและมูลค่าขององค์กร รวมถึงชื่อเสียงก็ลดลงเช่นกัน ตัวอย่างเมื่อ วันที่ 13 กรกฏาคม ปี 2001 กลุ่ม Fluffi Bunni ได้ขึ้นข้อความที่หน้า Web Site ของ SANS ว่า “ท่านยังสามารถให้ความไว้วางใจคนเหล่านี้ สอนเรื่องการรักษาความปลอดภัยกับท่านได้จริงหรือ” เหตุการณ์ที่เกิดขึ้นนี้ทำให้ SANS ต้องเสื่อมเสียชื่อเสียง นับตัง้แต่ได้มีการก่อตัง้สถาบันในการจัดการ ให้ความรู้และออกเอกสารรับรองทางด้านระบบความปลอดภัย สถาบัน SANS มาจากคำว่า SysAdmin, Audit, Network, Security ซึ่งก่อตั้งขึ้นจากความร่วมมือในศึกษาค้นคว้าและฝึกฝนและรวบรวมเกี่ยวกับการรักษาความปลอดภัยมีรายงานจำนวนนับไม่ถ้วนของนักเจาะระบบ (Hacker) ที่สามารถเข้าไปในระบบและทำความเสียหายหรือทำลายข้อมูลที่จำเป็น ในกรณีของ Web Site รายงานเกี่ยวกับการเจาะระบบและแลกเปลี่ยนข่าวกรอง ได้ถูกเจาะเข้าในระบบ ผลกระทบที่เกิดขึ้นคือจำนวนรายงานการเจาะระบบเพิ่มขึ้นอย่างมหาศาล จนทำให้Attrition.com ต้องระงับการแจ้งบัญชีรายชื่อใน Web Site ทั้งหมด โดยเปลี่ยนเป็นวิธีรับอาสาสมัครมาทำการปรับปรุงข้อมูลบน Web แทนการแจ้งผ่านหน้า Web Site
ผู้เชี่ยวชาญด้านความปลอดภัย ได้ออกมาประกาศเตือนเกี่ยวกับการทำลายการเชื่อมต่อเครือข่าย Internet ในรูปแบบอื่น คือ ปฏิบัติการ Hactivist หรือ Cyberactivist ซึ่งจะเป็นการแทรกแซงหรือทำให้ระบบเกิดความสับสน โดยปฏิเสธในการปฏิบัติตามนโยบายและการกระทำที่กำหนดโดยองค์กร หรือ หน่วยงานรัฐบาลความน่ากลัวอย่างที่สุดคือ ลักธิก่อการร้ายทางอินเตอร์เน็ต (Cyberterrorism) ผู้ก่อการร้ายทางอินเตอร์เน็ตจะทำการเจาะเข้าในระบบจากนั้นจะปฏิบัติการก่อการร้ายโดยผ่านทางเครือข่ายหรือใช้เส้นทางของอินเตอร์เน็ต สหรัฐอเมริการและรัฐบาลของนานาประเทศกำลังร่วมกันพัฒนาเครื่องมือรักษาความปลอดภัย โดยมุ่งมัน่ ที่จะป้องกันคอมพิวเตอร์ที่จำเป็น เครือข่ายการติดต่อสื่อสาร และโครงสร้างพื้นฐานทางกายภาพและด้านพลังงาน ลัทธิก่อการร้ายทางอินเตอร์เน็ต ได้ปรากฏออกมาในช่วงระหว่างสงครามในโคโซโว บนหน้า Web site ของ NATO เป็นความพยายามของผู้สังเกตการณ์บางส่วน นำเอาสถานะของลักธิก่อการร้ายทางอินเตอร์เน็ตที่ไม่ได้ทำการคุกคามจริง เพื่อหันเหความสนใจจากการออกประกาศบังคับใช้การรักษาความปลอดภัยสารสนเทศให้เป็นรูปธรรม
จากบันทึกของ Dr. Mudawi Mukhtar Elmusharaf ศูนย์วิจัยด้านการก่ออาชญากรรมทางคอมพิวเตอร์ (Computer Crime Reserch Center เมื่อวันที่ 21 ตุลาคม 2002 เกี่ยวกับการพุ่งโจมตีของ DDOS (Distributed Denial-of-service) ไปยัง 13 เซิร์ฟเวอร์หลัก ที่ทำหน้าที่จัดเส้นทางของการติดต่อของอินเตอร์เน็ตทัง้หมด โดยจำนวน 9 ใน 13 เซิร์ฟเวอร์ การจราจรของเครือข่ายเต็มหมดทำให้การทำงานของเครื่องช้าลง ปัญหาที่เกิดขึ้นได้รับการแก้ไขในระยะเวลาอันสัน้ แต่สถิติการโจมตีและผลที่เกิดขึ้นไม่ได้มีการประกาศออกไปให้ผู้ใช้อินเตอร์เน็ตส่วนใหญ่ได้ทราบข่าวดังกล่าว


</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>6. การโจรกรรม (Deliberate Acts of Theft) </b>การคุกคามโดยการโจรกรรม จากบุคคลที่ได้มีการไตร่ตรองไว้ล่วงหน้า โดยมีเจตนายึดทรัพย์สินของผู้อื่นไปครอบครองโดยผิดกฏหมาย ซึ่งภายในองค์กรสามารถถูกโจรกรรมทรัพย์สินดังต่อไปนี้ ทรัพย์สินทางกายภาพ (Physical Property) เช่น เครื่องคอมพิวเตอร์ อุปกรณ์คอมพิวเตอร์ เป็นต้น  ทรัพย์สินทางอิเล็กทรอนิกส์ (Electronic Property) มีความซับซ้อนในการจัดการและควบคุม ซึ่งเป็นปัญหาขององค์กร ซึ่งต่างจากการโจรกรรมทรัพย์สินทางกายภาพสามารถตรวจพบได้ง่ายกว่า เมื่อทรัพย์สินทางอิเล็กทรอนิกส์ถูกขโมยไป องค์กรส่วนใหญ่จะทราบว่าทรัพย์สินถูกโจรกรรมมักจะสายเกินไป เนื่องจากนักโจรกรรมได้ทำการปกปิดร่องรอยการกระทำความผิดอย่างระมัดระวังทรัพย์สินทางปัญญา (Intellectual Property) 

</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>7. การโจมตีซอฟต์แวร์ (Deliberate Software Attacks)</b>โจมตีซอฟต์แวร์ เกิดขึ้นโดยการออกแบบซอฟต์แวร์ให้โจมตีระบบจากคนๆ เดียวหรือจากกลุ่มคนมีซอฟต์แวร์ที่ก่อความเสียหาย ทำลาย หรือ ปฏิเสธการบริการของระบบเป้าหมาย ซอพต์แวร์ที่ได้รับความนิยมคือ Malicious Code หรือ Malicious Software มักจะเรียกว่า มัลแวร์ (Malware) มีมากมาย อาทิ ไวรัส (Viruses) เวิร์ม (Worms) ม้าโทรจัน (Trojan Horses) Logic bombs และ ประตูหลัง (Backdoors)
เรื่องราวของการโจมตีซอฟท์แวร์ที่โด่งดังโดยเฉพาะผลกระทบของ Malicious Code โดยใช้วิธีโจมตีระบบจนทำให้เครื่องไม่สามารถให้บริการได้ตามปกติ (Denial-of-Service) โดย Mafiaboy บน Web site Amazon.com, CNN.com, Etrade.com, ebay.com, Yahoo.com, Excite.com, และ Dell.com โดยใช้เวลาในการโจมตีประมาณ 4 ชั่วโมง มีรายงานว่าความเสียหายทำให้สูญเสียรายได้ล้านดอลลาร์ ต่อไปจะเป็นการอธิบายถึงภัยคุกคามจากมัลแวร์ ประกอบด้วย


</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>8. ภัยธรรมชาติ (Forces of Nature)</b>
ภัยธรรมชาติเป็นภัยคุกคามที่อันตรายมาก เพราะเป็นสิ่งที่เกินกว่ามนุษย์จะควบคุมได้ เป็นภัยที่รวมเหตุการณ์ เช่น ไฟไหม้ น้ำท่วม แผ่นดินไหว และฟ้าผ่า รวมถึงภูเขาไฟระเบิด ทัง้หมดนี้ไม่เพียงแต่สร้างความยุ่งยากต่อการใช้ชีวิตของแต่ละคนเท่านั้น แต่ยังสร้างปัญหาให้กับระบบคอมพิวเตอร์ทั้งหน่วยเก็บข้อมูล สัญญาณการสื่อสารต่างๆ ภัยคุกคามสามารถแบ่งกลุ่มได้ดังนี้<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Fire: ไฟไหม้ สร้างความเสียหายต่ออุปกรณ์ทางคอมพิวเตอร์ รวมถึงระบบสารสนเทศต่างๆ เนื่องจากควันไฟ และน้ำ ซึ่งเกิดจากการดับไฟของนักดับเพลิง ภัยจากไฟไหม้สามารถบรรเทาได้ด้วยการทำประกันอุบัติภัย เพื่อเป็นการลดความเสียหายที่เกิดขึ้นต่อทรัพย์สิน และชีวิต หรือทำประกันภัยธุรกิจ <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Flood: น้ำท่วม เป็นสาเหตุโดยตรงที่สร้างความเสียหายต่อระบบสารสนเทศ หรือในส่วนของอาคารหากธุรกิจจะต้องหยุดทำการระบบสารสนเทศ น้ำท่วมทำให้การเข้าใช้อาคารสถานที่ หรือในส่วนการทำงานของระบบสารสนเทศติดขัด ภัยคุกคามนี้สามารถบรรเทาได้ด้วยการทำประกันอุทกภัยหรือประกันภัยธุรกิจ<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Earthquake: แผ่นดินไหว เกิดจากการเคลื่อนตัวของเปลือกโลกกะทันหัน เป็นความเสียหายทางธรณีวิทยาจากการเกิดภูเขาไฟระเบิด แผ่นดินไหวสร้างความเสียหายต่อทุกส่วนของระบบสารสนเทศ บ่อยครั้งสร้างความเสียหายกับอาคารเป็นการขัดขวางการเข้าใช้ระบบสารสนเทศ สามารถบรรเทาภัยคุกคามนี้ได้ด้วยการทำประกันภัยพิเศษ หรือ การประกันภัยธุรกิจ ทัง้นี้จะเลือกรูปแบบใดขึ้นอยู่กับการกำหนดนโยบายที่ต่างกัน
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Lightning: ฟ้าแลบ เป็นกระแสไฟฟ้าทางธรรมชาติที่ถูกปลดปล่อยออกมารบกวนคลื่นวิทยุ ฟ้าผ่าสร้างความเสียหายต่อระบบสารสนเทศ หรือ ส่วนของการจ่ายไฟ ทำให้ไฟดับ หรือ สร้างปัญหาในการใช้สถานที่ทำงานเนื่องจากไม่มีกระแสไฟฟ้าหรือสร้างความยุ่งยากในการปฏิบัติงาน
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Landslide or mudslide: แผ่นดินถล่ม หรือ โคลนถล่ม เกิดจากดินและหินจำนวนมากไหลจากที่สูง สร้างความเสียหายต่อระบบสารสนเทศ ทั้งในส่วนของการเข้าใช้อาคารสถานที่และการเข้าใช้ระบบสารสนเทศซึ่งภัยคุกคามนี้สามารถบรรเทาความเสียหายได้ด้วยการทำประกันภัยหรือการประกันภัธุรกิจ
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tornado or severe windstorm: พายุทอร์นาโด หรือ พายุที่มีความรุนแรงสูง เกิดจากความแปรปรวนของอากาศเป็นพายุหมุนจากจุดศูนย์กลางขนาดเล็กเพียงไม่กี่หลา ขยายความรุนแรงเพิ่มขึ้นเป็นหลายไมล์ และเป็นลมพายุที่มีความเร็วในการทำลายสูง โดยมีรูงทรงกรวยตั้งสูงขึ้นไปยังท้องฟ้า พายุนี้สามารถสร้างความเสียหายต่อระบบสารสนเทศ ทั้งในส่วนของการเข้าใช้อาคารสถานที่ และการเข้าใช้ระบบสารสนเทศ ซึ่งภัยคุกคามนี้สามารถบรรเทาความเสียหายได้ด้วยการทำประกันภัย หรือ การประกันภัยธุรกิจ
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Hurricane or typhoon: พายุเฮอร์ริเคน หรือ พายุไต้ฝุ่น คือ พายุหมุนเขตร้อน เกิดขึ้นในแถบมหาสมุทรแอตแลนติก หรือ ทะเลคาริบเบียน หรือ แถบตะวันออกของมหาสมุทรแปซิฟิก (ไต้ฝุ่น) จากจุดศูนย์กลางพายุสามารถเคลื่อนตัวไปทางทิศเหนือทิศตะวันตกเฉียงเหนือหรือ ทิศตะวันออกเฉียงเหนือ และพายุยังก่อให้เกิดฝนตกอย่างหนัก หากจุดศูนย์กลางของพายุติดชายฝงั่ทะเลมักจะทำให้น้ำท่วมในพื้นที่นั้นๆ โดยพายุนี้สามารถสร้างความเสียหายต่อระบบสารสนเทศ ทั้งในส่วนของการเข้าใช้อาคารสถานที่ และการเข้าใช้ระบบสารสนเทศ ซึ่งภัยคุกคามนี้สามารถบรรเทาความเสียหายได้ด้วยการทำประกันภัยหรือการประกันภัยธุรกิจ
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Tsunami: เป็นคลื่นขนาดใหญ่ เกิดจากแผ่นดินไหว หรือ เกิดการปะทุของภูเขาไฟใต้ทะเล ซึ่งเหตุการณ์นี้สามารถสร้างความเสียหายต่อระบบสารสนเทศ ทัง้ในส่วนของการเข้าใช้อาคารสถานที่ และการเข้าใช้ระบบสารสนเทศซึ่งภัยคุกคามนี้สามารถบรรเทาความเสียหายได้ด้วยการทำประกันภัย 

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Electrostatic discharge (ESD): การปะทุของไฟฟ้าสถิต โดยไฟฟ้าสถิต และESD สร้างความรำคาญ อย่างไรก็ตามเมื่อเราเดินบนพรมจะเกิดไฟฟ้าสถิตทำให้เรารู้สึกเหมือนถูกไฟดูดเล็กน้อย แต่การปะทุของไฟฟ้าสถิตสามารถทำลายหรือสร้างความเสียหายอย่างมาก เมื่อมีการรวมกันก่อให้เกิดการจุดติดไฟได้ง่ายกับส่วนประกอบของวงจรอิเล็กทรอนิกส์ ไฟฟ้าสถิตทำให้พื้นที่มีประจุดูดฝุ่นละอองไว้ในห้องที่สะอาด หรือ ทำให้ผลิตภัณฑ์เกิดไฟฟ้าสถิต มูลค่าความเสียหายจากอุปกรณ์อิเล็กทรอนิกส์ และการหยุด
ให้บริการมีตัง้แต่ไม่กี่เซนต์ไปจนถึงหลายล้านดอลลาร์ สำหรับอันตรายที่จะเกิดกับระบบอิเล็กทรอนิกส์ ซึ่งความเสียหายในกระบวนการผลิตทำให้เสียเวลา เนื่องจากผลกระทบของ ESD นั้นมีนัยสำคัญ ถึงแม้ว่า ESD จะดูว่าไม่เป็นภัยคุกคาม แต่สามารถสร้างความยุ่งยากให้กับระบบสารสนเทศ ซึ่งปญั หานี้ไม่สามารถทำประกันภัยคุ้มครองความเสียหายหรือการทำประกันภัยธุรกิจ
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Dust contamination: การปนเปื้อนจากฝุ่น สภาพแวดล้อมบางอย่างมิได้เป็นผลดีต่ออุปกรณ์ฮาร์ดแวร์ของระบบสารสนเทศ เพราะฝุ่นทำให้อายุการใช้งานของระบบสารสนเทศสั้นลง หรือ เป็นเหตุให้เครื่องคอมพิวเตอร์หยุดการทำงาน ภัยคุกคามนี้เป็นปัญหาธรรมดาในการปฏิบัติงาน เนื่องจากภัยคุมคามทางธรรมชาติไม่อาจที่จะหลีกเลี่ยงได้ องค์กรต้องเพิ่มการควบคุมที่จะจำกัดความเสียหาย และต้องวางแผนกับความไม่แน่นอนสำหรับการปฏิบัติงานอย่างต่อเนื่อง เช่น แผนการกู้ข้อมูล วางแผนอย่างต่อเนื่อง และแผนการรับมือกับเหตุการณ์ที่อาจเกิดขึ้นโดยบังเอิญ เพื่อจำกัดความเสียหายจากภัยคุกคามเหล่านี้

</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>9. คุณภาพของบริการ (Deviations in Quality of Service) </b>ระบบสารสนเทศขององค์กรจะประสบความสำเร็จได้นั้นต้องได้รับการสนับสนุนจากระบบอื่นๆ ร่วมด้วย เช่น โรงไฟฟ้า เครือข่ายโทรคมนาคม ผู้จัดจำหน่าย ผู้ให้บริการ เจ้าหน้าที่ดูแลรอบค่ำ ซึ่งระบบสนับสนุนเหล่านี้อาจหยุดชะงักได้หากเกิดพายุ พนักงานป่วย หรือเหตุฉุกเฉิน ภัยคุกคามเหล่านี้ทำการโจมตี ทำให้คุณภาพการให้บริการคลาดเคลื่อน เช่น ถ้ารถขุดเจาะถูกสายไฟเบอร์ออฟติกที่มาจาก ISP องค์กรควรเตรียมการสำรองข้อมูลทัง้การเชื่อมต่อผ่านระบบเครือข่าย และการบริการ แต่ต้องรีบดำเนินการในส่วนของความเร็วในการรับ-ส่งข้อมูลขององค์กร เนื่องจากเป็นสิ่งสำคัญสำหรับการให้บริการที่สมบูรณ์ ความผิดปกติจากการให้บริการอินเตอร์เน็ต การติดต่อสื่อการ และเครื่องจ่ายไฟสามารถส่งผลกระทบอย่างรวดเร็วต่อข้อมูล และสร้างความเสียหายต่อระบบได้ Internet Service Issues องค์กรในปัจจุบันนิยมการใช้อินเตอร์เน็ตในการค้นหาและเข้าถึงข้อมูลบนอินเตอร์เน็ต เพื่อช่วยในการปฏิบัติงาน ซึ่งผู้ให้บริการอินเตอร์เน็ตจะต้องให้ความสำคัญกับ การก่อวินาศกรรมของข้อมูลข่าวสาร ในหลายองค์กรพนักงานขาย หรือ พนักงานขายทางโทรศัพท์สามารถทำงานจากสถานที่ซึ่งอยู่ไกลกันได้องค์กรที่มีเว็บไซต์จะมีผู้ให้บริการเว็บโฮสติ้งดูแลเว็บให้ ซึ่งเว็บโฮสติ้งจะรับผิดชอบกับบริการอินเตอร์เน็ตทั้งหมด รวมถึงฮาร์ดแวร์ และซอฟต์แวร์ระบบที่เกี่ยวกับการทำงานของเว็บไซต์ ผู้ให้บริการเว็บโฮสติ้งจะมีข้อตกลงเกี่ยวกับระดับการให้บริการขัน้ พื้นฐานที่ควรรู้ คือ Service Level Agreement (SLA) ผู้ให้บริการจะขาดพันธะสัญญาในการให้บริการไม่ได้ และพันธะสัญญาควรครอบคลุมความเสียหายที่ยังไม่เกิดขี้นกับลูกค้า แต่เป็นเรื่องยากหากจะคลอบคลุมความเสียหายที่เกิดจากช่วงที่ไม่มีกระแสไฟฟ้า
บริการด้านการสื่อสารและผู้ให้บริการอื่นๆ (Communications and other Service ProviderIssues)
บริการสาธารณูปโภคที่ดีต่อองค์กร บริการเหล่านี้คือ โทรศัพท์ น้ำประปา รถเก็บขยะ ระบบส่งสัญญาณโทรศัพท์ด้วยสายเคเบิล ก๊าซธรรมชาติ และการดูแลทรัพย์สิน โดยบริการเหล่านี้มีผลต่อความเสียหายขององค์กรได้ องค์กรมีความต้องการน้ำไปจนถึงระบบเครื่องทำความเย็น เพื่อความสะดวกในการปฏิบัติงาน ปัญหากระแสไฟฟ้า (Power Irregularities)ความผิดปกติของไฟฟ้าเป็นสิ่งที่เกิดขึ้นได้ทุกวัน เช่น ไฟเกิน ไฟตก และไฟดับ ซึ่งองค์กรต้องเตรียมแนวทางในการแก้ปญั หาไฟฟ้าสำหรับอุปการณ์ระบบสารสนเทศ ในสหรัฐจะใช้ไฟฟ้าที่ 120โวลต์, 60 cycle โดยปกติจะมีกระแสไฟที่ 15 และ 20 แอมป์เมื่อแรงดันไฟฟ้าที่ระดับ Spike (แรงดันไฟเพิ่มขึ้นชั่วขณะ) หรือ surge (แรงดันไฟเพิ่มขึ้นอย่างรุนแรง) ซึ่งแรงดันไฟที่เพิ่มขึ้นสร้างความเสียหายให้กับอุปกรณ์ต่างๆได้ การขาดแคลนไฟฟ้าเกิดจากการจ่ายไฟไม่ทั่วถึงเมื่อแรงดันไฟลดลง (Sag) หรือ ไฟตก คือแรงดันไฟลดลง เป็นสาเหตุให้ระบบปิดการทำงานหรือ รีเซตระบบใหม่ทำให้เกิดการขัดข้องในการใช้ระบบ ซึ่งส่งผลต่ออุปกรณ์อิเล็กทรอนิกส์โดยเฉพาะอุปกรณ์เครือข่าย คอมพิวเตอร์ และระบบคอมพิวเตอร์พื้นฐานเกิดความเสียหาย ควรจะจัดการควบคุมการจ่ายกระแสไฟให้มีคุณภาพ โดยเครื่อง UPS สามารถป้องกันเรื่องแรงดันไฟฟ้าไม่คงที่ได้เช่นไฟตก,ไฟเกิน,และไฟดับ
</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>10. ข้อผิดพลาดทางเทคนิคของฮาร์ดแวร์ (Technical Hardware Failures or Errors) </b>ความล้มเหลวทางเทคนิคของฮาร์ดแวร์ หรือความผิดพลาดที่การผลิตอุปกรณ์เกิดข้อบกพร่องเป็นเหตุให้การทำงานของอุปกรณ์ภายนอกของระบบไม่เป็นไปอย่างที่คิด ส่งผลให้การบริการไม่น่าไว้วางใจ หรือใช้ประโยชน์ไม่ได้ บางครัง้ความผิดปกติของจอคอมพิวเตอร์ อุปกรณ์ต่อพ่วงอื่นๆ หากเสียหายจะไม่สามารถนำกลับมาใช้งานได้ดังเดิม</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>11. ข้อผิดพลาดทางเทคนิคของซอฟต์แวร์ (Technical Software Failures or Errors)</b>การเขียนโค้ดคอมพิวเตอร์ส่วนมาก มีการตรวจสอบจุดบกพร่อง วิเคราะห์ข้อผิดพลาดทั้งหมดก่อนที่จะจำหน่าย ในบางครัง้จะตรวจสอบซอฟต์แวร์และฮาร์ตแวร์ร่วมกัน จะแสดงจุดบกพร่องใหม่ๆได้ ความล้มเหลวจะเกิดขึ้นหากไม่มีการตรวจสอบจุดบกพร่องต่างๆ บางครั้งการตรวจสอบอาจจะไม่พบข้อผิดพลาด แต่โปรแกรมเมอร์ส่วนมากจะสร้างช็อตคัทไว้ซึ่งอาจจะเป็นเหตุให้เกิดความเสียหายได้ เนื่องจากช็อตคัทสามารถเข้าสู่ตัวโปรแกรมได้โดยปราศจากการตรวจเช็คความปลอดภัยตั้งแต่เริ่มต้น</p>
<br>

<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>12. เทคโนโลยีล้าสมัย (Technological Obsolescence)</b>โครงสร้างพื้นฐานที่ล้าสมัยทำให้ระบบไม่ปลอดภัย และไม่น่าไว้ใจ ผู้บริหารควรจะรู้ว่าเมื่อเทคโนโลยีล้าสมัย ส่งผลถึงความเสี่ยงด้านความมัน่ คงของข้อมูลอาจพบกับภัยคุมคามได้ ผู้บริหารควรมีการวางแผนกลยุทธ์ รวมถึงการวิเคราะห์ในการเลือกใช้เทคโนโลยีในปัจจุบัน ตามหลักควรมีการวางแผนที่เหมาะสม ในการป้องกันเทคโนโลยีล้าสมัย เมื่อพบว่าเทคโนโลยีล้าสมัยต้องจัดการทันทีโดยผู้เชียวชาญด้านเทคโนโลยีได้กำหนดลักษณะสิ่งที่น่าจะเป็นความล้าสมัย ปัจจุบัน Symantec เลิกสนับสนุนซอฟต์แวร์แอนติไวรัสเวอร์ชันเก่า และให้การสนับสนุนผลิตภัณฑ์อย่างต่อเนื่องด้วยการอัพเกรดซอฟต์แวร์ให้ทันที ถ้าในองค์กรมีเจ้าหน้าที่ IT ที่เชียวชาญจะมีการจัดการอัพเกรดซอฟต์แวร์ที่ล้าสมัยทันที ซึ่งเป็นการลดค่าใช้จ่ายขององค์กร</p>
<br>
 <center><img class="img-responsive" src="img/p3.jpg" alt=""> </center><br>
 
 <h3>4. แนวทางป้องกันภัยคุกคามทางอินเทอร์เน็ต</h3>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อได้ทำความรู้จักกับภัยคุกคามรูปแบบต่างๆ แล้ว จึงขอสรุป 10 วิธีป้องกันภัยคุกคามทางอินเทอร์เน็ต สำหรับการใช้งานส่วนบุคคล 
</p>
 
 <p>
<b>1. ตั้งสติก่อนเปิดเครื่อง</b><br>
- ก่อน Login เข้าใช้งานคอมพิวเตอร์ ต้องมั่นใจว่าไม่มีใครแอบดู Password<br>
- เมื่อไม่ได้อยู่หน้าจอคอมพิวเตอร์ ควรล็อคหน้าจอให้อยู่ในสถานะที่ต้องใส่ค่า Login<br>
- อย่าประมาทในการใช้งานอินเทอร์เน็ต ตระหนักไว้ว่าข้อมูลความลับ อาจถูกเปิดเผยได้เสมอในโลกออนไลน์
</p>
<br>

 <p>
<b>2. กำหนด Password ที่ยากแก่การคาดเดา</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ควรมีความยาวไม่ต่ากว่า 8 ตัวอักษร และใช้อักขระพิเศษ ไม่ตรงกับความหมายในพจนานุกรม เพื่อให้เดาได้ยากมากขึ้นและการใช้งานอินเทอร์เน็ตทั่วไป เช่น การ Login ระบบ e-mail ระบบสนทนาออนไลน์ (Chat) หรือระบบเว็บไซต์ที่เราเป็นสมาชิกอยู่ ทางที่ดีควรใช้ Password ที่ต่างกันบ้างพอให้จำได้ หรือมีเครื่องมือช่วยจำ Password เข้ามาช่วย
</p>
<br>

 <p>
<b>3. สังเกตขณะเปิดเครื่อง</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สังเกตขณะเปิดเครื่องว่ามีโปรแกรมไม่พึงประสงค์รัน มาพร้อมๆกับการเปิดเครื่องหรือไม่ ถ้าดูไม่ทัน ให้ สังเกตระยะเวลาบูตเครื่อง หากนานผิดปกติ อาจเป็นไปได้ว่าเครื่องคอมพิวเตอร์ติดปัญหาจากไวรัส หรือปัญหาอื่นๆได้
</p>
<br>

 <p>
<b>4. หมั่นตรวจสอบและอัพเดท OS หรือซอฟต์แวรที่ใช้</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; หมั่นตรวจสอบและอัพเดต OS หรือซอฟต์แวร์ที่ใช้ ให้เป็นเวอร์ชั่นปัจจุบัน โดยเฉพาะโปรแกรมป้องกันภัยในเครื่อง เช่น โปรแกรมป้องกันไวรัส หรือโปรแกรมไฟร์วอลล์ และควรใช้ระบบปฏิบัติการ และซอฟต์แวร์ที่มีลิขสิทธิ์ นอกจากนี้ควรอัพเดตอินเทอร์เน็ตบราวเซอร์ให้ทันสมัยอยู่เสมอ เนื่องจาก Application Software สมัยใหม่มักพึ่งพาอินเทอร์เน็ตบราวเซอร์ ก่อให้เกิดช่องโหว่ใหม่ๆ
</p>
<br>

<p>
<b>5. ไม่ลงซอฟต์แวร์มากเกินจำเป็น</b><br>
- Internet Browser<br>
- E-Mail<br>
- โปรแกรมทางด้านเอกสาร ตกแต่งภาพ เสียง วีดีโอ<br>
- โปรแกรมป้องกันไวรัส และโปรแกรมไฟร์วอลล์<br>

</p>
<br>
<p>
<b>6. ไม่ควรเข้าเว็บไซต์เสี่ยงภัย</b><br>
- เว็บไซต์ลามกอนาจาร<br>
- เว็บไซต์การพนัน<br>
- เว็บไซต์แนบไฟล์ .EXE<br>
- เว็บไซต์ที่ Pop-up หลายเพจ<br>
- เว็บไซต์ที่มีLinkไม่ตรงกับชื่อ<br>
</p>
<br>

<p>
<b>7. สังเกตความปลอดภัยของเว็บไซต์ที่ให้บริการ ธุรกรรมออนไลน์</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web e-Commerce ที่ปลอดภัยควร มีลักษณะดังนี้<br>
- มีการทำ HTTPS เนื่องจาก HTTPS จะมีการเข้ารหัสข้อมูล<br>
- มีใบรับรองทางอิเล็กทรอนิกส์ CA (Certificate Authority)<br>
- มีมาตรฐาน (Compliance) รองรับ เช่น ผ่านมาตรฐาน PCI/DSS

</p>
<br>

<p>
<b>8. ไม่เปิดเผยข้อมูลส่วนตัวผ่าน Social Network</b><br>
- เลขที่บัตรประชาชน <br>
- หนังสือเดินทาง <br>
- ประวัติการทำงาน <br>
- เบอร์โทรศัพท์ส่วนตัว <br>
- ข้อมูลทางการแพทย์ <br>
- หมายเลขบัตรเครดิต<br>


</p>
<br>

<p>
<b>9. ศึกษาถึงข้อกฏหมายเกี่ยวกับการใช้อินเทอร์เน็ต</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศึกษาถึงข้อกฎหมายเกี่ยวกับการใช้สื่ออินเทอร์เน็ต ตามพระราช บัญญัติว่าด้วยการกระทาความผิดเกี่ยวกับคอมพิวเตอร์ ฯ โดยมี หลักการง่ายๆ ที่จะช่วยให้สังคมออนไลน์สงบสุข คือ ให้คิดถึงใจเขาใจเรา หากเราไม่ชอบสิ่งใด ก็ไม่ควรทาสิ่งนั้นกับผู้อื่น และเวลาแสดง ความคิดเห็นบนกระดานแสดงความคิดเห็น (Web board) การรับส่ง e-mail หรือการกระทาใดๆกับข้อมูลบนอินเทอร์เน็ต
</p>
<br>

<p>
<b>10. ไม่หลงเชื่อโดยง่าย</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อย่าเชื่อในสิ่งที่เห็น และงมงายกับข้อมูลบนอินเทอร์เน็ต ควรหมั่นศึกษาหาความรู้จากเทคโนโลยีอินเทอร์เน็ต และศึกษาข้อมูลให้รอบด้าน ก่อนเชื่อในสิ่งที่ได้รับรู้ 
</p>
<br>
 

<?php } ?>
    
  </div>
</section>


  <div class="container">
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