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


  /////////////โหลดข้อสอบมาเก็บไว้ในตัวแปร
  $num = 1;
  $score = 0;
  $sql_questionnair="Select * From tb_questionnair";
  $result_questionnair = mysql_query($sql_questionnair);
  $q_id_array =array();
  $question_array =array();
  $count_questionnair = 0;
  
  $sql_answer="Select * From tb_answer";
  $result_answer = mysql_query($sql_answer);
  $answer_array1 =array();
  $answer_array2 =array();
  $answer_array3 =array();
  $answer_array4 =array();
  $true_ans_array =array();
  $count_answer = 0;
  
  while($objResult_answer = mysql_fetch_array($result_answer)){
	  $answer_array1[$count_answer] = $objResult_answer["Choice1"];
	  $answer_array2[$count_answer] = $objResult_answer["Choice2"];
	  $answer_array3[$count_answer] = $objResult_answer["Choice3"];
	  $answer_array4[$count_answer] = $objResult_answer["Choice4"];
	  $true_ans_array[$count_answer] = $objResult_answer["TrueAns"];
	  
	  $count_answer++;
  }
  
  
  
  while($objResult_questionnair = mysql_fetch_array($result_questionnair)){
	  //echo $objResult["Q_ID"].",".$objResult["Question"];
	  $question_array[$count_questionnair] = $objResult_questionnair["Question"];
	  $q_id_array[$count_questionnair] = $objResult_questionnair["Q_ID"];
	  $count_questionnair++;
  }
  //echo $question_array[0];
  

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>แบบทดสอบหลังเรียน</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style-homepage.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
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
   </b>  <?php echo " <img style='width:70px' src='".$dir.$image_name."'/>" ?>   สวัสดีคุณ   <b><?php echo $_SESSION['ses_user']?>
   
      <div class="top_content">
        <div class="row">
          
         <?php
$sql="Select Mtype From tb_member Where Username='".$_SESSION['ses_user']."'";
$result = mysql_query($sql);
$cell_data = mysql_result($result,0,0);
if($cell_data == "Old"){
	$sql_score="Select CurrentScore From tb_score Where Username='".$_SESSION['ses_user']."'";
	$result_score = mysql_query($sql_score);
	$_score = mysql_result($result_score,0,0);
	if($_score !="")
	{
	
	?>
 <h2><b>คุณเคยทำแบบทดสอบนี้มาแล้ว  คะแนนล่าสุด  &nbsp;&nbsp;<font color="#FF0004" ><?php echo $_score ?>&nbsp;&nbsp;</font> เต็ม 10 คะแนน</b></h2><br>
 <center><h1>แบบทดสอบหลังเรียน</h1></center> 
  
<div class="formTest">
  <div class="heading">
   
    
   
  </div>
  <div id = "status"></div>

  <?php 

  $sql = "SELECT * FROM `tb_questionnair` Q_TABLE INNER JOIN tb_answer A_TABLE ON Q_TABLE.Q_ID = A_TABLE.Q_ID order by rand()";

  $__result = mysql_query($sql);

  $nat = array();

  echo '<form name="forms" id="forms" enctype="multipart/form-data" method="post" action="savescore-post.php">';

  $counting = 1;

  while($__objResult = mysql_fetch_object($__result)) {

    $nat[$__objResult->Q_ID] =  $__objResult;
    echo '
    <dl class="formInputs">
      <dt>
          <label 
            name="question1" 
            class="formLabel" 
            for="question1">
          '. $counting . ". " . $__objResult->Question .'
          </label>
      </dt><br>
    </dl>
    <input 
      type="radio" 
      value="a" 
      id="a'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice1.'
    </input><br />
    <input 
      type="radio" 
      value="b" 
      id="b'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice2.'
    </input><br />
    <input 
      type="radio" 
      value="c" 
      id="c'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice3.'
    </input><br />
    <input 
      type="radio" 
      value="d" 
      id="d'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice4.'
    </input><br /><br />

    <input 
    type="hidden" 
    name="ansId'.intval($__objResult->Q_ID).'" 
    value="'.$__objResult->TrueAns.'">

    ';
    $counting++;
    // print_r($nat);
  }
  echo '<div id = "status2"></div>  
        <center>
          <button 
            type="submit" 
            name="submit" 
            id="submit"  
            class="button" 
             
          />
          ส่งคำตอบ
          </button>
        </center>';
  echo '</form>'
  // print_r($nat);

  ?>
    
<?php
	}
	else
	{?>
    
<center><h1>แบบทดสอบหลังเรียน</h1></center> 
  
<div class="formTest">
  <div class="heading">
   
    
   
  </div>
  <div id = "status"></div>

  <?php 

  $sql = "SELECT * FROM `tb_questionnair` Q_TABLE INNER JOIN tb_answer A_TABLE ON Q_TABLE.Q_ID = A_TABLE.Q_ID order by rand()";

  $__result = mysql_query($sql);

  $nat = array();

  echo '<form name="forms" id="forms" enctype="multipart/form-data" method="post" action="savescore-post.php">';

  $counting = 1;

  while($__objResult = mysql_fetch_object($__result)) {

    $nat[$__objResult->Q_ID] =  $__objResult;
    echo '
    <dl class="formInputs">
      <dt>
          <label 
            name="question1" 
            class="formLabel" 
            for="question1">
          '. $counting . ". " . $__objResult->Question .'
          </label>
      </dt><br>
    </dl>
    <input 
      type="radio" 
      value="a" 
      id="a'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice1.'
    </input><br />
    <input 
      type="radio" 
      value="b" 
      id="b'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice2.'
    </input><br />
    <input 
      type="radio" 
      value="c" 
      id="c'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice3.'
    </input><br />
    <input 
      type="radio" 
      value="d" 
      id="d'.intval($__objResult->Q_ID).'" 
      name="select_answer'.intval($__objResult->Q_ID).'">
      &ensp;&ensp;&ensp;&ensp;'.$__objResult->Choice4.'
    </input><br /><br />

    <input 
    type="hidden" 
    name="ansId'.intval($__objResult->Q_ID).'" 
    value="'.$__objResult->TrueAns.'">

    ';
    $counting++;
    // print_r($nat);
  }
  echo '<div id = "status2"></div>  
        <center>
          <button 
            type="submit" 
            name="submit" 
            id="submit"  
            class="button" 
             
          />
          ส่งคำตอบ
          </button>
        </center>';
  echo '</form>'
  // print_r($nat);

  ?>
		
<?php	}
	
}
else{?>
<center><h3>กรุณาทำแบบทดสอบก่อนเรียนก่อน</h3></center>
<?php } ?>
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