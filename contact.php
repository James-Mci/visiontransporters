<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Vision Transporters</title>
	    <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    
	</head>


	<body id="page-top">
		<div id="st-container" class="st-container">
    		<div class="st-pusher">
    			<div class="st-content">
				  	<?php include 'include/header.php';?>

					<section class="contact-info-section">
						<div class="container">
							<div class="text-center">
								<h2 class="section-title">Get in Touch</h2>
								<span class="section-sub">We Are Ready to Help You 24/7</span>
							</div>

							<div class="row content-row">

								<div class="col-md-7">
									<div class="contact-map">
										<h3>Contact Form</h3>
										<form id="mainContact" action="mail.php" method="POST">
											<div class="form-group">
											    <label for="name">Name</label>
											    <input name="name" type="text" class="form-control"  required="" placeholder="">
											</div>
										  	<div class="form-group">
										    	<label for="email">Email address</label>
										    	<input name="email" type="email" class="form-control" required="" placeholder="">
										  	</div>

											<div class="row">
												<div class="col-md-6">
												  <div class="form-group">
												    <label for="subject">Subject</label>
												    <input name="subject" type="text" class="form-control" required="" placeholder="">
												  </div>
												</div>
												<div class="col-md-6">
												  <div class="form-group">
												    <label for="phone">Phone Number</label>
												    <input name="phone" type="text" class="form-control" placeholder="">
												  </div>
												</div>
											</div>
											<div class="form-group text-area">
												<label for="message">Your Message</label>
												<textarea name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
											</div>

											<button type="submit" class="btn btn-primary">Send Message</button>
										</form>
									</div>
								</div>

								<div class="col-md-5">
									<div class="contact-info">
										<h3>Head Office</h3>

										<address>
											Neema Hardware<br>
											Opp Diani Police St.<br>
											Phone : +254722256364<br>
											Email : visiontransporters@business.net<br>
										</address>
									</div><!-- /.contact-info -->

									<div class="contact-map">
										<h3>Location Map</h3>

										<div id="contactMap"></div>
									</div><!-- /.contact-info -->


								</div>
							</div>
						</div>
					</section>

					

			        <!-- cta start -->
			        <section class="cta-section">
			        	<div class="container text-center">
			        		<a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>

							<!-- Modal -->
							<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="quoteModalLabel">Request Delivery Services.</h4>
							      </div>
							      <div class="modal-body">
									<form id="contactForm" action="sendemail.php" method="POST">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												    <label for="name">Name</label>
												    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="company">Company Name</label>
											    <input id="company" name="company" type="text" class="form-control" placeholder="">
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="phone">Phone Number</label>
											    <input id="phone" name="phone" type="text" class="form-control" placeholder="">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="email">Email address</label>
											    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
											  </div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="city">City Name</label>
											    <input id="city" name="city" type="text" class="form-control" placeholder="">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="subject">Subject</label>
											    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
											  </div>
											</div>
										</div>
										<div class="form-group text-area">
											<label for="message">Your Message</label>
											<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
										</div>

										<button type="submit" class="btn btn-primary">Send Message</button>
									</form>
							      </div>
							    </div>
							  </div>
							</div>

			        	</div><!-- /.container -->
			        </section><!-- /.cta-section -->
			        <!-- cta end -->

			        <?php include 'include/footer.php';?>
				</div> <!-- .st-content -->
    		</div> <!-- .st-pusher -->

	    	<!-- OFF CANVAS MENU -->
	    	<?php include 'include/offcanvas.php';?>
		</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>


		<!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="js/classie.js"></script>
		<!-- selectFx -->
		<script src="js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	    
	</body>
</html>