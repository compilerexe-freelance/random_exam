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
</b>  &nbsp;&nbsp;<?php echo " <img style='width:70px' src='".$dir.$image_name."'/>" ?>  สวัสดีคุณ   &nbsp;&nbsp; <b><?php echo $_SESSION['ses_user']?></b>
   
      <div class="top_content">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont flipInY wow animated">
              <h2>สื่อการเรียนรู้</h2>
              <h3>ไวรัสและภัยคุกคามทางคอมพิวเตอร์</h3>
              <p>  เมื่อพูดถึงภัยที่คุกคามคอมพิวเตอร์แล้วจะมองไปที่การสร้างความเสียหายต่ออุปกรณ์และต่อข้อมูลของเครื่องที่โดนคุกคาม เพื่อเป็นการทำความเข้าใจต่อเหตุการณ์ที่อาจโดนคุกคามจากภัยต่างๆ ต่อเครื่องคอมพิวเตอร์ และต่อข้อมูล ดังนั้นเราควรทำความเข้าใจ ศึกษาและวิเคราะปัญหาภัยคุกคามทางคอมพิวเตอร์เหล่านี้    เพื่อที่จะได้วางแผนจัดการได้อย่างตรงประเด็น   สร้างความปลอดภัย และ   ความเสถียรภาพที่ดีขึ้นของคอมพิวเตอร์ที่ใช้อยู่
			  </p><p>คณะผู้จัดทำโครงงานได้เล็งเห็นถึงปัญหาภัยคุกคามคอมพิวเตอร์ที่นับวันจะยิ่งมีความรุนแรงมากยิ่งขึ้น จึงได้จัดทำการ์ตูนแอนิเมชั่น เรื่อง “ไวรัสและภัยคุกคามทางคอมพิวเตอร์” โดยใช้โปรแกรม Adobe Flash Professional CC สร้างการ์ตูนในรูปแบบ 2D เพื่อสื่อให้ทุกคน ทุกเพศ ทุกวัย ได้รับรู้และตระหนักถึงภัยคุกคามทางคอมพิวเตอร์ที่เราไม่สามารถปฎิเสธได้ในยุค IT เช่นนี้และเพื่อที่จะได้ทราบถึงวิธีการปกป้องคอมพิวเตอร์ของเราให้มีความปลอดภัยมากยิ่งขึ้น </p>
              <a href="pretest.php" class="learn_more2">ทำแบบทดสอบก่อนเรียน</a> </div>
          </div>
          <div class="col-lg-7 col-sm-7"> 
		     <div class="flipInX wow animated">
		      <img class="img-responsive" src="img/All.png" alt="">
		     </div>
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Top_content--> 


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