<?php
// Start the session
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Me N' Katz Centre</title>
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/mkc.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<script type='text/javascript'>
function confirmLogout()
{
   return confirm("Are you sure you want to logout?");
}
</script>
<style>

div iframe{
	width: 500px;
	height: 400px;
}
ul#t1{
	padding:0;
	margin:0;
}
ul#t1 li{
	list-style-type:none;
	display:inline-block;
	margin:10px;
	color:white;
	text-shadow:2px 2px 7px grey;
	font-size:25px !important;
}
ul#t1 li:hover{
	color:yellow;
}
ul#t1 li.active,ul#t1 li.secondary-active{
	color:yellow;
}
input[type="radio"]{
	display:none;
}

.contactA-form {
    padding-top: 25px;
    padding-bottom: 30px;
}

.contactA-form form {
    margin-top: 25px;
}

.contactA-form form .form-group {
	margin-bottom: 20px;
}

.contactA-form input[type="text"] { width: 95%; height: 34px; }
.contactA-form textarea { width: 95%; height: 170px; padding-top: 6px; padding-bottom: 6px; }
.contactA-form label { font-size: 13px; font-weight: 400; }
.contactA-form label .error-label { font-style: italic }
.contactA-form button { margin-top: 5px; padding: 0 45px; }

.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #5d5d5d;
	font-family: 'Droid Sans', sans-serif;
    font-size: 14px;
	font-weight: bold;
    text-transform: uppercase;
    text-shadow: 0 1px 0 rgba(255,255,255,.7);
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	
	border-radius: 2px;

	font-size: 20px;
	
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}


</style>
</head>
<body style="overflow-y: scroll; overflow-x:hidden;">
	<!--start-home-->
	<div class="header_top"><!--header_top-->
			<div class="containera">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							<?php if(isset($_SESSION['username'])) 
							{ 
								$un = $_SESSION['username'];
								echo "<li><a>Hello $un !</a></li>";
								echo'<li><a href="myaccount.php"><i class="fa fa-user"></i> My account</a></li>';
								echo'<li><a href="logout.php" onclick="return confirmLogout()"><i class="fa fa-sign-out"></i>Logout</a></li>';
							}
							else
							{
								echo'<li><a href="loginadmin.php"><i class="fa fa-user-secret"></i>Admin</a></li>';
								echo'<li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>';
								echo'<li><a href="register.php"><i class="fa fa-registered"></i>Register</a></li>';
							}
							?>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a><img src="images/mkc3.png"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="home.php"> <i class="fa fa-home"></i><br>Home</a>
							
						</li>
						
						<li>
							<a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
							<i class="fa fa-tasks"></i><br>Services<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<?php if(isset($_SESSION['username']))
							{
								echo '<li><a href="booking.php">Booking</a></li>';
							}
							else{
								echo '<li><a href="login.php">Booking</a></li>';
							}
							?>
								<li><a href="appointmenthome.php">Appointment</a></li>
							</ul>
						</li>
						<li>
							<a href="shop.php"><i class="fa fa-github"></i><br>Shop</a>
						</li>
						<li>
							<?php if(isset($_SESSION['username']))
							{
								echo '<a href="cart.php"><i class="fa fa-shopping-cart"></i><span class="badge"></span><br>Cart</a>';
							}
							else{
								echo '<a href="login.php"><i class="fa fa-shopping-cart"></i><span class="badge"></span><br>Cart</a>';
							}
							?>
						</li>
						<li class="active">
							<a href="contact.php"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
<!--contact-->
	<div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contactA-form wow fadeInLeft">
	                    
	                    <form role="form" action="feedbackinsert.php" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Name</label>
								<?php
								if(isset($_SESSION['username']))
								{
									$result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);
									if($result === FALSE)
									{
										die(mysqli_error($mysqli));
									}

									if($result) 
									{
										$obj = $result->fetch_object();
										$name = $obj->name;
										?><input type="text" name="name" value="<?php echo $name ?>" class="contact-name"> <?php
									}
								}
								else
								{
									echo '<input type="text" name="name" placeholder="Enter your name..." class="contact-name" required>';
								}
								?>
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
								<?php
								if(isset($_SESSION['username']))
								{
									$result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);
									if($result === FALSE)
									{
										die(mysqli_error($mysqli));
									}

									if($result) 
									{
										$obj = $result->fetch_object();
										$email = $obj->email;
										?><input type="text" name="email" value="<?php echo $email ?>" class="contact-email"> <?php
									}
								}
								else
								{
									echo '<input type="text" name="email" placeholder="Enter your email..." class="contact-email" required>';
								}
								?>
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Subject</label>
	                        	<input type="text" name="subject" placeholder="Your subject..." class="contact-subject" required>
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Message</label>
	                        	<textarea name="message" placeholder="Your message..." class="contact-message"></textarea>
	                        </div>
							<div class="form-group">
								<label for="contact-rating">Rate our services</label>
	                        	<ul id="t1">
								<li><label for="rating_1"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="ratings" id="rating_1" value="1" required></li>
								<li><label for="rating_2"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="ratings" id="rating_2" value="2"></li>
								<li><label for="rating_3"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="ratings" id="rating_3" value="3"></li>
								<li><label for="rating_4"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="ratings" id="rating_4" value="4"></li>
								<li><label for="rating_5"><i class="fa fa-star" aria-hidden="true"></i></label><input type="radio" name="ratings" id="rating_5" value="5"></li>
								</ul>
	                        </div>
	                        <button type="submit" class="btn">Send</button>
	                    </form>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                    <h3>We Are Here</h3>
	                    <div><iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=F-G-3%2C%20Residensi%20Bistaria%2C%20Jalan%20Ukay%20Bistari%2C%2068000%20Ampang%2C%20Kuala%20Lumpur+()&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div>
	                    <h3>Address</h3>
	                    <p>F-G-3, Residensi Bistaria, <br> Jalan Ukay Bistari, 68000 <br> Ampang, Kuala Lumpur</p>
	                    <p>Phone: 018-280 4461</p>
						<h3>E-mail</h3>
						<p>https://web.facebook.com/menkatzcentre/</p>
	                </div>
	            </div>
	        </div>
        </div>
	<!--/contact-->
	<!---- footer --->
	<footer class="footer-distributed">

			<div class="footer-left wow fadeInUp">

				<img src="images/mkc3.png">

				<p class="footer-links">
					<a href="home.php">Home</a>
					·
					<a href="booking.php">Booking</a>
					·
					<a href="appointmenthome.php">Appointment</a>
					·
					<a href="shop.php">Shop</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Me N' Katz Centre</p>
			</div>

			<div class="footer-center wow fadeInDown">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>F-G-3, Residensi Bistaria,</span><span> Jalan Ukay Bistari, 68000</span><span>Ampang, Kuala Lumpur</span></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>018-280 4461</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">https://web.facebook.com/menkatzcentre/</a></p>
				</div>

			</div>

			<div class="footer-right wow fadeInUp">

				<p class="footer-company-about">
					<span>About us</span>
					We provide pet boarding, grooming, veterinary clinic and pet shop services.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
	
	
	
<script>
$('li').on('click',function(){
	$('li').removeClass('active');
	$('li').removeClass('secondary-active');
	$(this).addClass('active');
	$(this).prevAll().addClass('secondary-active');
})
</script>
			
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>	
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ad729545f7cdf4f0533040e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->		
</body>
</html>