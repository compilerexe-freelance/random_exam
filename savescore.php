<?php
//echo "hi";
include 'check_session.php';
include 'dbconnection.php';

$select_id1  = $_POST['select_answer1'];
$select_id2  = $_POST['select_answer2'];
$select_id3  = $_POST['select_answer3'];
$select_id4  = $_POST['select_answer4'];
$select_id5  = $_POST['select_answer5'];
$select_id6  = $_POST['select_answer6'];
$select_id7  = $_POST['select_answer7'];
$select_id8  = $_POST['select_answer8'];
$select_id9  = $_POST['select_answer9'];
$select_id10 = $_POST['select_answer10'];

$ansId1  = $_POST['ansId1'];
$ansId2  = $_POST['ansId2'];
$ansId3  = $_POST['ansId3'];
$ansId4  = $_POST['ansId4'];
$ansId5  = $_POST['ansId5'];
$ansId6  = $_POST['ansId6'];
$ansId7  = $_POST['ansId7'];
$ansId8  = $_POST['ansId8'];
$ansId9  = $_POST['ansId9'];
$ansId10 = $_POST['ansId10'];

$score = 0;

if ($select_id1 == $ansId1) {
  $score++;
}
if ($select_id2 == $ansId2) {
  $score++;
}
if ($select_id3 == $ansId3) {
  $score++;
}
if ($select_id4 == $ansId4) {
  $score++;
}
if ($select_id5 == $ansId5) {
  $score++;
}
if ($select_id6 == $ansId6) {
  $score++;
}
if ($select_id7 == $ansId7) {
  $score++;
}
if ($select_id8 == $ansId8) {
  $score++;
}
if ($select_id9 == $ansId9) {
  $score++;
}
if ($select_id10 == $ansId10) {
  $score++;
}

// $score = $_GET['score'];
$user = $_SESSION['ses_user'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>สรุปคะแนนก่อนเรียน</title>
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
 
   
      <div class="top_content">
        <div class="row">
          <h2>คุณ  <?php echo $user ?>&nbsp;&nbsp; ทำได้ <font color="#FF0004"><?php echo $score; ?></font>&nbsp;&nbsp;เต็ม 10 คะแนน</h2>
          
           <br>
  <br>
  <center>เรากำลังพาคุณเข้าสู่หน้าหลัก</center></div>
   <?php $insertSQL = "INSERT INTO tb_score (Username, PrevScore) VALUES ('$user', '$score')";
           // echo $insertSQL ;
            
            $Result1 = mysql_query($insertSQL);
 if($Result1){ 
 $updateSQL = "UPDATE tb_member SET Mtype = 'Old' WHERE Username = '$user'";
 	$Result1Update = mysql_query($updateSQL);
	if($Result1Update){

 
 ?>

	 	<script type="text/javascript">
			//window.location="learn.php";
			setTimeout(function(){ window.location="homepage.php"; }, 7000);
		</script>

<?php

		
	}
 }
 
 
 
 

 
?>
          
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