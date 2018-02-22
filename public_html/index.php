<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>

		<title>Imagination L.A.B.</title>


		<!-- sets default bootstrap viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
				integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- fancyBox CSS -->
		<link rel="stylesheet" type="text/css"
				href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">

		<!-- Personal CSS -->
		<link rel="stylesheet" href="css/style.css"/>

		<!-- jQuery first, then Popper.js, then bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
				  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
				  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
				  crossorigin="anonymous"></script>

		<!-- Fancy Box JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body class="">
		<div class="gradient">
			<h1>Imagination L.A.B.</h1>

			<div class="container">
				<h2>Dragons</h2>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/dragons/dragon-heart-img.jpg" data-fancybox="gallery-dragon"
							data-caption="This image depicts light and dark in a dance of life!">
							<img class="img-thumbnail" src="images/dragons/dragon-heart-img.jpg" alt="dragons forming heart"/>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/dragons/fantasy-dragon.jpg" data-fancybox="gallery-dragon" data-caption="fantasy dragon">
							<img class="img-thumbnail" src="images/dragons/fantasy-dragon.jpg" alt="fantasy style dragon"/>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/dragons/green-dragon.jpg" data-fancybox="gallery-dragon" data-caption="green dragon">
							<img class="img-thumbnail" src="images/dragons/green-dragon.jpg" alt="green dragon"/>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/dragons/hand-drawn-dragon.png" data-fancybox="gallery-dragon" data-caption="hand drawn dragon">
							<img class="img-thumbnail" src="images/dragons/hand-drawn-dragon.png" alt="hand drawn dragon"/>
						</a>
					</div>
				</div>
			</div>


			<div class="container">
				<h2>Landscape</h2>
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/landscape/fantasy-landscape.jpg" data-fancybox="gallery-landscape" data-caption="fantasy landscape">
							<img class="img-thumbnail" src="images/landscape/fantasy-landscape.jpg" alt="fantasy landscape"/>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/landscape/hand-drawn-landscape.jpg" data-fancybox="gallery-landscape" data-caption="hand drawn landscape">
							<img class="img-thumbnail" src="images/landscape/hand-drawn-landscape.jpg"
								  alt="hand drawn landscape"/>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/landscape/painted-landscape.JPG" data-fancybox="gallery-landscape" data-caption="painted landscape">
							<img class="img-thumbnail" src="images/landscape/painted-landscape.JPG" alt="painted landscape"/>
						</a>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<a href="images/landscape/horse-in-field.png" data-fancybox="gallery-landscape" data-caption="horse in field">
							<img class="img-thumbnail" src="images/landscape/horse-in-field.png" alt="horse in field"/>
						</a>
					</div>
				</div>
			</div>


			<div class="container">
				<h2>Abstract</h2>
				<div class="row">
					<div class="col-md-3">
						<a href="" data-fancybox="gallery-abstract" data-caption="">
							<img class="img-thumbnail" src="" alt=""/>
						</a>
					</div>
					<div class="col-md-3">
						<a href="" data-fancybox="gallery-abstract" data-caption="">
							<img class="img-thumbnail" src="" alt=""/>
						</a>
					</div>
					<div class="col-md-3">
						<a href="" data-fancybox="gallery-abstract" data-caption="">
							<img class="img-thumbnail" src="" alt=""/>
						</a>
					</div>
					<div class="col-md-3">
						<a href="" data-fancybox="gallery-abstract" data-caption="">
							<img class="img-thumbnail" src="" alt=""/>
						</a>
					</div>
				</div>
			</div>

			<br>
			<div class="container">
				<h2>Contact Me</h2>
				<form id="contactForm" action="php/mailer.php" method="post">
					<div class="form-group col-sm-8">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
					<div class="form-group col-sm-8">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="jane123@gmail.com">
					</div>
					<div class="form-group">
						<label for="subject">Subject</label>
						<input type="text" id="subject" name="subject" placeholder="subject">
					</div>
					<div class="form-group col-sm-8">
						<label for="message">Message</label>
						<br>
						<textarea rows="4" name="message" id="message" placeholder="Message" spellcheck="true"></textarea>
					</div>
					<!-- reCAPTCHA -->
					<div class="g-recaptcha" data-sitekey="6Ldt_UcUAAAAAE9hwtcV3yuMNdQg0hnH6LsXjJlo"></div>
					<br>
					<input type="submit" value="Submit">
					<input type="reset">
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>

			</div>


			<footer>
				<p class="muted">All content is intended for educational and professional purposes.</p>
			</footer>
		</div>
	</body>
</html>