<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>luca_grpski</title>
		<!-- Description, Keywords and Author -->
		<meta name="Offizielle Webseite" content="Offizielle Webseite von luca_grpski">
		<meta name="Keywords" content="luca, grpski, luca_grpski">
		<meta name="author" content="Luca">
		
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
		<link href="css/darkmode.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
		<link href="css/all.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script defer src="js/darkmode.js"></script>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/favicon.ico">
	</head>
	
	<body>
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
							<ul>
							<?php 
								session_start();
								require_once("inc/config.inc.php");
								require_once("inc/functions.inc.php");
								include("templates/header.inc.php")
								?>
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
							<img src="img/banner/b1.jpeg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-home"></i> Willkommen</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Hier findest du alles rund um Instagram und Discord</h3>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b4.jpeg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-comments"></i> Live Chat</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Bei meinem Live Chat kannst du mit anderen Besuchern schreiben</h3>
									<!-- button -->
									<a href="#chat" class="animated fadeIn btn btn-theme">Zum Live Chat</a>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b2.jpeg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fas fa-code"></i></i>Beta Programm</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Du kannst dich gerne auch als Beta Tester registrieren</h3>
									<!-- button -->
									<a href="register.html" class="animated fadeIn btn btn-theme">Zur Registrierung</a>
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
			<div id="neuerungen" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Neuerungen</h2>
						<hr>
						<!-- paragraph -->
						<p>Hier findest du alle Neuerungen meiner Webseite</p>
					</div>
					<!-- info board -->
                    <br><br>
					<div class="info_board">
						<h3><ul>
							<li>Meine Webseite hat eine neue Domain</li>
						</h3></ul>
					</div>
				</div>
			</div>
			<!--/ hero end -->
			

			<!--      cut        -->

			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Objektive</h3>
						<!-- paragraph -->
						<p>Das einfachste Objektiv ist eine einzelne <b>Sammellinse</b>, wie sie um <b>1608</b> die ersten Fernrohre hatten. Bestandteile eines Objektivs können jedoch sowohl <b>Linsen</b>, als auch <b>Spiegel</b> oder (seltener) <b>Beugungsgitter</b> sein, die sich je nach Einsatzzweck in einem oder mehreren <b>Tuben</b> befinden, die innen geschwärzt und gerippt sind, um <b>Streulicht</b> zu reduzieren.</p>
					</div>
				</div>
			</div>
			<!--/ promo end -->
			
			<!-- featured abbum -->
			<div class="featured pad" id="chat">
				<div class="container">
					<!-- default heading -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Live Chat</h2>
						<hr>
						<!-- paragraph -->
						<p>Neuer Livechat coming soon...</p>
					</div>
					<!-- featured album elements -->
					<br><br>
					<div class="text-center">
						<h4>Leider funktioniert der Live Chat momentan nicht, ich programmiere aber schon einen neuen...</h4>
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
			
			<div class="portfolio-content" id="kontakt">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content ">
						<!-- heading -->
						<h2>Kontakt</h2>
						<hr>
						<!-- paragraph -->
						<p>Hier kannst du mich kontaktieren oder Fehler anmerken</p>
						<br><br>
					</div>

				<div class="text-center">
					<form class="jotform-form" action="https://submit.jotformeu.com/submit/202263307663047/" method="post" name="form_202263307663047" id="202263307663047" accept-charset="utf-8" autocomplete="on">
						<input type="hidden" name="formID" value="202263307663047" />
						<input type="hidden" id="JWTContainer" value="" />
						<input type="hidden" id="cardinalOrderNumber" value="" />
						<div role="main" class="form-all">
						  <p class="form-section page-section">
							<p class="form-line jf-required" data-type="control_email" id="id_3">
								<h4><label class="form-label form-label-top form-label-auto" id="label_3" for="input_3">
								Email Adresse
								</h4></label><span class="form-required">
								  
								</span>
							  </label>
							  <h4><div id="cid_3" class="form-input-wide jf-required" data-layout="half">
								<input type="email" id="input_3" name="q3_emailadresse" class="form-textbox validate[required, Email]" style="width:310px" size="310" value="" placeholder="Deine Email" data-component="email" aria-labelledby="label_3" required="" />
								<br><br>
							  </h4></div>
						  </p>
							<p class="form-line jf-required" data-type="control_textarea" id="id_4">
								<h4><label class="form-label form-label-top" id="label_4" for="input_4">
								Nachricht
								</h4><span class="form-required">
								  
								</span>
							  </label>
							  <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
								<h4><textarea id="input_4" class="form-textarea validate[required]" name="q4_nachricht" style="width:310px;height:163px" placeholder="Deine Nachricht" data-component="textarea" required="" aria-labelledby="label_4"></textarea></h4>
								<br><br>
							  </div>
						  	</p>
							<p class="form-line" data-type="control_button" id="id_2">
							  <div id="cid_2" class="form-input-wide" data-layout="full">
								<h4><div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
								  <button onclick="myFunction()" id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
									Absenden
								  </button>
								<h4></div>
							  </div>
							  <script>
								function myFunction() {
								alert("Erfolgreich abgesendet!");
								}
								</script>
							</p>
							<li style="display:none">
							  Should be Empty:
							  <input type="text" name="website" value="" />
							</li>
						  </ul>
						</div>
						<script>
						JotForm.showJotFormPowered = "new_footer";
						</script>
						<input type="hidden" id="simple_spc" name="simple_spc" value="202263307663047" />
						<script type="text/javascript">
						document.getElementById("si" + "mple" + "_spc").value = "202263307663047-202263307663047";
						</script>
						<div class="formFooter-heightMask">
						</div>
						<div class="formFooter f6">
						  <div class="formFooter-wrapper formFooter-leftSide">
							<a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=202263307663047&utm_content=jotform_logo&u</a>tm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"></a>
						  </div>
						</div>
					  </form>
				</div>
				<!-- portfolio end -->
			</div>
			<!-- work with us end -->

				</div>
			</div>
			<!-- contact end -->

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
						<div class="featured pad" id="settings">
							<div class="container">
								<!-- default heading -->
								<div class="hero-content ">
									<!-- heading -->
									<h2>Einstellungen</h2>
									<hr>
									<!-- paragraph -->
									<p>Hier findest du alle Einstellungen, die du auf meiner Seite vornehmen kannst</p>
								</div>
								<!-- featured album elements -->
								<br><br>
								<div class="text-center">
									<center><a><div>
										<input type="checkbox" class="checkbox" id="chk" />
										<label class="label" for="chk">
											<i class="fas fa-moon"></i>
											<i class="fas fa-sun"></i>
											<div class="ball"></div>
										</label>
									</center></a></div>
								</div>
							</div>
						</div>
						<!-- features end -->
			
			<!-- footer -->
			<footer>
				<h2><span style="color:white"> Beta Tester </span></h2>
				<h4><span style="color:white"> -------------------------- </span></h4>
				<h4><span style="color:white"> Als Beta Tester kannst du alle Änderungen sehen, bevor sie offiziell hochgeladen sind </span></h4>
				<br>
				<a href="login" class="myButton">Login</a>
				&ensp;&ensp;
				<a href="register" class="myButton">Registrierung</a>
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