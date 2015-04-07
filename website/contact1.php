<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Website</title>

	<!-- CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/flexslider/flexslider.css">
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media-queries.css">


	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
<div class="container-fluid responsive">
	<div id="header">
		<div class="pull-left">
			<h1><a href="index.html">BangoBondhu Archive</a></h1>
			<p>Tribute to nations Father</p>
		</div>
		<br class="clear" />
	</div>
</div>

        <!-- Top menu -->
	  <div class="row">
		  <nav class="navbar navbar-collapse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php"><!--<i class="fa fa-user"></i><br>-->About</a>
						</li>
						<li>
							<a href="portfolio.php">BB Archive</a>
						</li>
					<!--	<li>
							<a href="portfolio.php">Photo Gallery</a>
						</li>-->
						<!--drdwn-->
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >
								Events <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="events1.php">Event 1</a></li>
								<li><a href="registration.php">Event 2</a></li>
							</ul>
						</li>
						<!--drdwn-->

							<li>
								<a href="contact.php">Message from Presedent</a>
							</li>
							<li class="pull-right">
								<a href="contact.php">Contact</a>
							</li>

					</ul>
				</div>
		  </nav>
	  </div><!---row-->

		<!-- Slider -->
<div class="contact-us-container">
	<div class="container">
		<div class="row">
				<div class="panel panel-default">
					<div class="panel-body">
						<!-- <h3>Address</h3>
                        <p>Mirpur <br>Dhaka</p>
                        <p>Phone: 0039 333 12 68 347</p> -->
						<div class="gmap">
							<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%"
									height="300" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Mirpur,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=mirpur&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=Mirpur,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
						</div>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 contact-form wow fadeInLeft">
				<p>
				if you have any question or any sugestion please send us a message
				</p>
				<form role="form" action="assets/contact.php" method="post">
					<div class="form-group">
						<label for="contact-name">Name</label>
						<input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
					</div>
					<div class="form-group">
						<label for="contact-email">Email</label>
						<input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
					</div>
					<div class="form-group">
						<label for="contact-subject">Subject</label>
						<input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
					</div>
					<div class="form-group">
						<label for="contact-message">Message</label>
						<textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
					</div>
					<button type="submit" class="btn" title="send">Send</button>
				</form>
			</div>

		</div>

		</div>
	</div>
</div>


<footer>
	<div class="container">

		<div class="row">
			<div class="col-sm-7 footer-copyright wow fadeIn">
				<p>Copyright &copy;2015 sai'sphotography  - All rights reserved</p>
			</div>

		</div>
	</div>
</footer>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
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

</body>
</html>