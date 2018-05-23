<!DOCTYPE html>
<html>
<head>
<title>Putra Specialist Hospital</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <div class="logo">
    <a href="#">Putra<span> Specialist<span> Hospital</span></a>
  </div>
  <div class="Logout">
    <a href="logout.php" style="color: #fff"><img src="images/logout.png">  Logout</a>
  </div>
  
  
</div>


<a class="mobile">MENU</a>


<div id="container">

  <div class="sidebar">

    <ul id="nav">
      <li><a class="selected" href="home.html"><img src="images/home.png">    Dashboard</a></li>
      <li><a href="PatientRecord.html"><img src="images/medical-history.png">  Pateint Record</a></li>
      <li><a href="#"><img src="images/question.png">  Feedback</a></li>
      <li><a href="#"><img src="images/care.png">  Services</a></li>
      <li><a href="#"><img src="images/doctor.png">  Our Doctors</a></li>
      <li><a href="#"><img src="images/calendar.png">  Appointment</a></li>
      <li><a href="#"><img src="images/chat.png">  Forum</a></li>
      <li><a href="#"><img src="images/news.png">  News</a></li>
      <li><a href="gallery.html"><img src="images/news.png">  Gallery</a></li>
    </ul>
    
  </div>

  <div class="content">
    
    
    

    <div id="wufoo-z11hzhfm1d0plii">
    Fill out my <a href="https://f4zz.wufoo.com/forms/z11hzhfm1d0plii">online form</a>.
    </div>
    
    <script type="text/javascript">var z11hzhfm1d0plii;(function(d, t) {
    var s = d.createElement(t), options = {
    'userName':'f4zz',
    'formHash':'z11hzhfm1d0plii',
    'autoResize':true,
    'height':'711',
    'async':true,
    'host':'wufoo.com',
    'header':'show',
    'ssl':true};
    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
      s.onload = s.onreadystatechange = function() {
    var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
    try { z11hzhfm1d0plii = new WufooForm();z11hzhfm1d0plii.initialize(options);z11hzhfm1d0plii.display(); } catch (e) {}};
    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
    })(document, 'script');</script>


  </div>


</div><!-- #container -->

<script type="text/javascript">

	$(document).ready(function(){
     $("a.mobile").click(function(){
      $(".sidebar").slideToggle('fast');
     });

    window.onresize = function(event) {
      if($(window).width() > 480){
      	$(".sidebar").show();
      }
    };


	});

</script>


</body>
</html>