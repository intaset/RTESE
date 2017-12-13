<?php

$my_email = "info@rtese.com";

$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];
$subject=$_POST['Subject'];
$headers = "From: " . $_POST['Email'];
$captcha = false;

// check if not robot
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
$captcha = true;
$secret = '6LdOFyMTAAAAAEi-HWDmxNN3S3zAiQozDpVyQxY8';
//get verify response data
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
$responseData = json_decode($verifyResponse);
if(!($responseData->success))
$errors[] = 'We could not verify your CAPTCHA entry. Please try again.';
else 
mail($my_email,$subject,$message,$headers);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<meta name="description" content="">
<meta name="keywords" content="environment conference, biofuels conference, desalination conference, wastewater conference, pollution conference, remediation conference, environmental engineering conference, environmental pollution conference, environmental remediation conference, environmental treatment conference, air pollution conference, water pollution conference, wasterwater pollution conference, soil pollution conference, environmental protection, environmental sustainability, environmental development, greenhouse, global warming, climate change, groudwater, oil spills, renewable energy, water treatment, soil treatment, wastewater treatment, environment, biofuels, desalination, wastewater, pollution, remediation, environmental engineering, environmental pollution, environmental remediation, environmental treatment, air pollution, water pollution, wasterwater pollution, soil pollution, environmental protection conference, environmental sustainability conference, environmental development conference, greenhouse conference, global warming conference, climate change conference, groudwater conference, oil spills conference, renewable energy conference, water treatment conference, soil treatment conference, wastewater treatment conference">
<title>RTESE'18 - Contact Us</title>

<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="240">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<!--[if IE-9]><html lang="en" class="ie9"><![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="../js/modernizr.custom.63321.js"></script>
<script>
  (function() {
    var cx = '016656741306535874023:oio_ha3_zco';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</head>

<body>
<nav id="slide-menu">
  <h1>RTESE'18</h1>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="../papers">Paper Submissions</a></li>
    <li><a href="../program">Program</a></li>
    <li><a href="../dates">Important Dates</a></li>
    <li><a href="../registration">Registration</a></li>
    <li><a href="../committee">Committee</a></li>
    <li><a href="../keynote">Keynotes</a></li>
    <li><a href="../sponsor">Sponsors</a></li>
    <li><a href="../venue">Venue</a></li>
    <li><a href="../accommodation">Accommodation</a></li>
    <li><a href="../past-events">Past Events</a></li>
    <li><a href="#contact">Contact Us</a></li>
  </ul>
</nav>

<div id="content">
  <div class="desktop">
  <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      <nav>
        <a href="/">Home</a><p class="dot">&middot;</p><a href="../papers">Paper Submission</a><p class="dot">&middot;</p><a href="../program">Program</a><p class="dot">&middot;</p><a href="../dates">Important Dates</a><p class="dot">&middot;</p><a href="../registration">Registration</a><p class="dot">&middot;</p><a href="../committee">Committee</a><p class="dot">&middot;</p><a href="../keynote">Keynotes</a><p class="dot">&middot;</p><a href="../sponsor">Sponsors</a><p class="dot">&middot;</p><a href="../venue">Venue</a><p class="dot">&middot;</p><a href="../accommodation">Accommodation</a><p class="dot">&middot;</p><a href="../past-events">Past Events</a><p class="dot">&middot;</p><a href="#contact">Contact Us</a>
    </nav>
  </div>
</div>
</div>

  <header>
    <div class="mobile">
      <div class="cbp-af-header">
  <div class="cbp-af-inner">
    <div class="unit unit-s-3-4 unit-m-1-3 unit-l-1-3">
          <a href="/"><img src="../img/logo.png" class="flex-logo"></a>
      </div>
      <div class="unit unit-s-1-3 unit-m-2-3 unit-m-2-3-1 unit-l-2-3">
          <div class="menu-trigger"></div>
      </div>
  </div>
</div>
        <div class="bg">
          <h1>2<sup>nd</sup> International Conference on Recent Trends in<br>Environmental Science and Engineering (RTESE'18)</h1>
          <p class="subhead">June 10 - 12, 2018 | Niagara Falls, Canada</p>

          <a href="../papers" class="bg-link">Paper Submission</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div><!-- <br>
      <p class="body" style="text-align: center!important;">For more information about the RTESE'18 Conference, please view the <b><a href="../RTESE17_CFP.pdf" class="body-link">conference flyer</a></b>.</p> -->
      <br><br>
        </div>
    </div>

    <div class="desktop">
      <div class="grid">
        <div class="unit unit-s-1 unit-m-1 unit-l-1">
        <div class="bg-img">
          <img src="../img/header.jpg" class="flex-img" alt="Header">
        </div>

        <div class="bg">
          <h1>2<sup>nd</sup> International Conference on Recent Trends in<br>Environmental Science and Engineering (RTESE'18)</h1>
          <p class="subhead">June 10 - 12, 2018 | Niagara Falls, Canada</p>

          <a href="../papers" class="bg-link">Paper Submission</a> <p class="dot">&middot;</p> <a href="../dates" class="bg-link">Important Dates</a> <p class="dot">&middot;</p> <a href="../registration" class="bg-link">Registration</a>

        <div class="searchbox grid">
        <div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
          <div class="unit unit-s-1 unit-m-1-4-2 unit-l-1-4-2">
            <p class="body">Search:</p> 
          </div>
 <div class="unit unit-s-3-4 unit-m-3-4 unit-l-3-4">
        <gcse:searchbox-only resultsUrl="../results"></gcse:searchbox-only>
  </div>
</div>
</div><!-- <br>

      <p class="body" style="text-align: center!important; color: #FFF!important;">For more information about the RTESE'18 Conference, please view the <b><a href="../RTESE17_CFP.pdf" class="body-link">conference flyer</a></b>.</p> -->
<br><br>
        </div>
        </div> 
      </div>
    </div>
  </header>

  <div class="grid main-content">
  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
    <div class="unit-spacer">
      <h2>Announcements</h2>
      <div id="main-slider" class="liquid-slider">
    <div>
      <h2 class="title">1</h2>
      <p class="bold">RTESE 2018:</p>
      <p class="body">RTESE 2018 will  be held in Niagara Falls, Canada on June 10 - 12, 2018.</p>
      
    <!--   <p class="bold">RTESE'18 Workshop</p>
      <p class="body">As per popular request, the organizing committee has decided to extend the RTESE'18 conference to three days (now June 10 - 12, 2018). The new high-level schedule is as follows:</p>

      <ul>
        <li>Day 1: Registration</li>
        <li>Day 2: Main Track Conference Sessions and Workshop</li>
        <li>Day 3: Main Track Conference Sessions and Gala dinner or Cruise tour</li>
      </ul>
      
      <p class="body">Registration for the workshop will be 113 CAD (HST included). Workshop attendees will receive a certificate of participation. For registration, please visit: <a href="../registration" class="body-link">here</a>.</p>

      <p class="body">More information to follow; we greatly appreciate your patience!</p> -->

    </div>          
    <div>
      <h2 class="title">2</h2>
      <p class="bold">Best Paper Award:</p>
      <p class="body">Two best paper awards will be conferred to author(s) of the papers that receive the highest rank during the peer-review and by the respected session chairs. Please visit <a href="../papers" class="body-link">Paper Submission</a> for more information.</p>
    </div>
    <div>
      <h2 class="title">3</h2>
      <p class="bold">Become a Sponsor or an Exhibitor</p>
      <p class="body">RTESE attracts a wide range of researchers in the field of recent trends in environmental science and engineering. As a prominent company in the field of recent trends in environmental science and engineering, we would like to offer you an exhibit at RTESE. Please visit <a href="../sponsor" class="body-link">Sponsors</a> for more information.</p>
    </div>
  </div>

    </div>
  </div>

<div class="unit unit-s-1 unit-m-1-4-1 unit-l-1-4-1">
  <div class="unit-spacer content">
    <p class="body">We have received your message and we will try our best to get back to you within the next 48 hours.<br><br>
    Thank you for your interest in RTESE'18.</p>
  </div>
</div>

  <div class="unit unit-s-1 unit-m-1-3-1 unit-l-1-3-1">
  <div class="unit-spacer">

<section class="main">

  <ul class="side-bar-menu" style="padding:0px;">
    <li><a href="../sponsor">Sponsors &amp; Exhibitors</a></li>
    <li><a href="../symposium">Symposium &amp; Workshop</a></li>
  </ul>

</section>

<br><br>


<h2>Upcoming Dates</h2>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <div class="past">Dec. 1, 2017</div>
    Feb. 16, 2018
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <div class="past past-text">Paper Submission Deadline</div>
    Extended Paper Submission Deadline
  </div>
</div>
</div>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <div class="past">Dec. 22, 2017</div>
    Mar. 2, 2018
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
     <div class="past past-text">Notification to Authors</div>
     Extended Notification to Authors
  </div>
</div>
</div>

<div class="grid events">
<div class="unit unit-s-1 unit-m-1-4 unit-l-1-4">
  <div class="date">
    <div class="past">Jan. 29, 2018</div>
    Mar. 16, 2018
  </div>
</div>

<div class="unit unit-s-1 unit-m-3-4 unit-l-3-4">
  <div class="unit-spacer">
    <div class="past past-text">Early-Bird Registration</div>
    Extended Early-Bird Registration
  </div>
</div>
</div>


  </div>
  </div>
</div>

<footer id="contact">
  <div class="grid">
  <div class="unit unit-s-1 unit-m-1-3 unit-l-1-3">
  <div class="unit-spacer">
    <h2>Contact Us</h2>
    <p class="body">International ASET Inc.<br>
    Unit No. 104, 2442 St. Joseph Blvd.<br>
    Orl&eacute;ans, Ontario, Canada<br>
    Postal Code: K1C 1G1<br>
    +1-613-834-9999<br>
    <a href="mailto:info@rtese.com">info@rtese.com</a></p>
    </div>
  </div>

  <div class="unit unit-s-1 unit-m-2-3 unit-l-2-3 contact">
  <div class="unit-spacer">
  <p class="body">For questions or comments regarding RTESE'18, please fill out the form below:</p>

    <form action="../contactus.php" method="post" enctype="multipart/form-data" name="ContactForm" class="cf">
  <div class="half left cf">
    <input style="margin-bottom:0.85em" type="text" name="Name" id="Name" placeholder="Name" required>
    <input style="margin-bottom:0.85em" type="email" name="Email" id="Email" placeholder="Email address" required>
    <input type="text" name="Subject" id="Subject" placeholder="Subject" required>
  </div>
  <div class="half right cf">
    <textarea name="Message" type="text" rows="5" name="Message" id="Message" placeholder="Message" required></textarea>
  </div><br><br>
  <center class="full right cf"><div class="g-recaptcha" data-sitekey="6LdOFyMTAAAAAPU_lcowyxZIUuivlqaSIuEdK0mz"></div></center>
  <div class="cf">
  <center><div class="full right cf"><input type="submit" name="Submit" value="Submit">
    <input type="reset" name="Reset" value="Reset"></center></div>
</div></div></form>
    </div>
  </div>
  </div>
</footer> 

<div class="copyright">
  <a href="http://international-aset.com">International ASET Inc.</a> | <a href="http://international-aset.com/phplistpublic/?p=subscribe&id=1">Subscribe</a> | <a href="../terms">Terms of Use</a> | <a href="../sitemap">Sitemap</a>
  <p class="body">© Copyright <script>document.write(new Date().getFullYear())</script>, International ASET Inc. – All Rights Reserved.</p>
  <p class="copyright1">Have any feedback? Please provide them here: <script>var refURL = window.location.protocol + "//" + window.location.host + window.location.pathname; document.write('<a href="http://international-aset.com/feedback/?refURL=' + refURL+'" class="body-link">Feedback</a>');</script></p>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="../js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="../js/jquery.calendario.js"></script>
    <script type="text/javascript" src="../js/data.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
  <script src="../js/jquery.liquid-slider.min.js"></script>  
  <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.min.js"></script>
    <script src="../js/SpryValidationSelect.js" type="text/javascript"></script>

    <script src="../js/SpryValidationTextField.js" type="text/javascript"></script>

    <script src="../js/SpryValidationConfirm.js" type="text/javascript"></script>

    <script src="../js/SpryValidationCheckbox.js" type="text/javascript"></script>
    <script src="../js/SpryValidationTextarea.js" type="text/javascript"></script>

    <script type="text/javascript">
/*
  Slidemenu
*/
(function() {
  var $body = document.body
  , $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if ( typeof $menu_trigger !== 'undefined' ) {
    $menu_trigger.addEventListener('click', function() {
      $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
    });
  }

}).call(this);
</script>

    <script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false});

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");

var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");

var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");

var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");

var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});

var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");

var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");

var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"-1", isRequired:false});

var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "date", {format:"mm/dd/yyyy"});

var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>


    <script type="text/javascript"> 
      $(function() {
      
        var transEndEventNames = {
            'WebkitTransition' : 'webkitTransitionEnd',
            'MozTransition' : 'transitionend',
            'OTransition' : 'oTransitionEnd',
            'msTransition' : 'MSTransitionEnd',
            'transition' : 'transitionend'
          },
          transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
          $wrapper = $( '#custom-inner' ),
          $calendar = $( '#calendar' ),
          cal = $calendar.calendario( {
            onDayClick : function( $el, $contentEl, dateProperties ) {

              if( $contentEl.length > 0 ) {
                showEvents( $contentEl, dateProperties );
              }

            },
            caldata : codropsEvents,
            displayWeekAbbr : true
          } ),
          $month = $( '#custom-month' ).html( cal.getMonthName() ),
          $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
          cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
          cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {        
          $month.html( cal.getMonthName() );
          $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

          hideEvents();
          
          var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
            $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

          $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
          
          setTimeout( function() {
            $events.css( 'top', '0%' );
          }, 25 );

        }
        function hideEvents() {

          var $events = $( '#custom-content-reveal' );
          if( $events.length > 0 ) {
            
            $events.css( 'top', '100%' );
            Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

          }

        }
      
      });
    </script>

        <script>
    $('#main-slider').liquidSlider();
  </script>
  <script>
(function($){
        $(window).load(function(){
            $("html").niceScroll();
        });
    })(jQuery);
</script>
</body>
</html>