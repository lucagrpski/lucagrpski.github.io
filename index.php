<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>luca_grpski</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/favicon.ico">
	</head>
	
	<body>
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo/logo.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#infos">Infos</a></li>
								<li><a href="#fotos">Top Fotos</a></li>
								<li><a href="#kontakt">Kontakt</a></li>
								<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </li>
								<li><a class="list-instagram" href="https://www.instagram.com/luca_grpski/"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/b1.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-home"></i> Willkommen</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Hier findest du alles rund um mein Instagram Profil</h3>
									<!-- button -->
									<a href="https://www.instagram.com/luca_grpski/" class="animated fadeIn btn btn-theme">Zu Instagram</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-info-circle"></i> Alle Infos</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Auf meiner Webseite findest du außerdem alle Infos rund um Instagram</h3>
									<!-- button -->
									<a href="#infos" class="animated fadeIn btn btn-theme">Zu den Infos</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b3.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-camera"></i> Top Fotos</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Meine Top 3 Fotos findest du auch auf meiner Webseite</h3>
									<!-- button -->
									<a href="#fotos" class="animated fadeIn btn btn-theme">Zu den Fotos</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			<div id="infos" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Infos und Ankündigungen</h2>
						<hr>
						<!-- paragraph -->
						<p>Hier findest du alle Infos and Ankündigungen:</p>
					</div>
					<!-- info board -->
                    <br><br>
					<div class="info_board">
						<h3><ul>
							<li>Aktuell sind keine Infos vorhanden</li>
						</h3></ul>
					</div>
				</div>
			</div>
			<!--/ hero end -->
			
			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Wie entsteht ein Foto?</h3>
						<!-- paragraph -->
						<p>Bei der Kamera fällt das gebündelte Licht durch ein <b>Objektiv</b> auf einen <b>Film</b> oder auf eine lichtempfindliche Scheibe, den <b>Sensor</b>. Der speichert das Licht und macht dann daraus ein Foto. Ein <b>Objektiv</b> besteht aus einer oder - meistens - mehreren <b>Linsen</b>.</p>
					</div>
				</div>
			</div>
			<!--/ promo end -->
			
			<!-- featured abbum -->
			<div class="featured pad" id="fotos">
				<div class="container">
					<!-- default heading -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Top Fotos</h2>
						<hr>
						<!-- paragraph -->
						<p>Hier findest du meine Top 3 bewerteten Fotos</p>
					</div>
					<!-- featured album elements -->
					<div class="featured-element">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/1.jpg" alt="" />
										<!-- paragraph -->
									<center><h1><p>Daten vom Foto: <br /> --------------------- <br /> Belichtungszeit: 1/250 Sek <br /> Blende: F30 <br /> Iso: 100 <br /> --------------------- <br /> Bearbeitet mit Lightroom <br /> --------------------- <br /> Kamera: Canon EOS 2000D</p></h1></center>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Top 1</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/2.jpg" alt="" />
										<!-- paragraph -->
										<center><h1><p>Daten vom Foto: <br /> --------------------- <br /> Belichtungszeit: 1/30 Sek <br /> Blende: F5.6 <br /> Iso: 200 <br /> --------------------- <br /> Unbearbeitet <br /> --------------------- <br /> Kamera: Canon EOS 2000D</p></h1></center>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Top 2</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/3.jpg" alt="" />
										<!-- paragraph -->
										<center><h1><p>Daten vom Foto: <br /> --------------------- <br /> Belichtungszeit: Keine Angabe <br /> Blende: Keine Angabe <br /> Iso: Keine Angabe <br /> --------------------- <br /> Unbearbeitet <br /> --------------------- <br /> Kamera: Iphone 8 Plus</p></h1></center>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Top 3</h4>
									</div>
								</div>
							</div>
							<div class="text-center">
								<a href="https://www.instagram.com/luca_grpski/" class="btn btn-lg btn-theme">Alle Bilder auf Instagram</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- features end -->
			
			<!-- call to action -->
			<div class="promo parallax-two pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Fotografie im Laufe der Zeit</h3>
						<!-- paragraph -->
						<p>Unter <b>Fotografie</b> versteht man das technische Verfahren, bei welchem mittels <b>optischer Systeme</b> ein Lichtbild auf ein <b>lichtempfindliches Medium</b> projiziert und dort direkt längerfristig gespeichert werden kann; es handelt sich dabei um ein <b>analoges Verfahren</b>. Im Laufe der Entwicklung <b>elektronischer Systeme</b>, durch welche <b>analoge</b> in <b>elektronische Daten</b> umwandelbar wurden, die dann auf entsprechende <b>Speichermedien</b> gespeichert werden konnten, kam das <b>digitale Verfahren</b> auf.</p>
					</div>
				</div>
			</div>
			<!--/ cta end -->
			
			<div class="portfolio pad" id="kontakt">
				<div>
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Portfolio</h2>
					</div>
				</div>

				<div class="text-center">
					<?php
					if(isset($_POST["submit"])){
						mail("cloudmusicluca@gmail.com", "Kontaktformular", 'Email: '.$_POST["Email"].' Inhalt: '.$_POST["inhalt"]);
						?>
						<h1>Das Formular wurde gesendet!</h1>
						<?php 
					}
					?>



					<form method="post" action=""> <table border="0" summary="">          
					<tr>         
						<td>Betreff:</td>         
						<td><input type="text" name="Email"/></td>     
					</tr>     
					<tr>        
						<td>Text:</td>         
						<td><textarea name="inhalt"></textarea></td>     
					</tr>      
					<tr>         
						<td></td>         
						<td><input type='submit' name="submit" value="Versenden"/></td>     
					</tr>  
					</table> 
					</form>
				</div>
				<!-- portfolio end -->
			</div>
			<!-- work with us end -->

				</div>
			</div>
			<!-- contact end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-instagram" href="https://www.instagram.com/luca_grpski/"><i class="fa fa-instagram"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; copyright 2020, All rights are reserved.</p>
				</div>
			</footer>
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>