<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="google-site-verification" content="uLH10ujjI-TBgtCEM4vFd20GnYYO0lYKzDan4_3GrCI"/>
	<title>RLM Chicago</title>
	<link rel="icon" href="favicon.ico" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" media="screen" href="public/style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Montserrat:200" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-custom fixed-top navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#home"><img id="nav-logo" src="public/images/rlmlogo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#about">About</a>
      <a class="nav-item nav-link" href="#work">Our Work</a>
      <a class="nav-item nav-link" href="#values">Our Values</a>
      <a class="nav-item nav-link" href="#contact">Get in Touch</a>
    </div>
  </div>
</nav>
	
<?php

// THE BELOW LINE STATES THAT IF THE SUBMIT BUTTON
// WAS PUSHED, EXECUTE THE PHP CODE BELOW TO SEND THE 
// MAIL. IF THE BUTTON WAS NOT PRESSED, SKIP TO THE CODE
// BELOW THE "else" STATEMENT (WHICH SHOWS THE FORM INSTEAD).
if ( isset ( $_POST [ 'buttonPressed' ] )){

// REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
$to = 'ttejuosho@outlook.com' ;
$subject = 'PHP Contact Form Email' ;

// NOT SUGGESTED TO CHANGE THESE VALUES
$message = $_POST [ "message" ] ;
$headers = 'From: ' . $_POST[ "from" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;

// THE TEXT IN QUOTES BELOW IS WHAT WILL BE 
// DISPLAYED TO USERS AFTER SUBMITTING THE FORM.


?>
        
        <!-- Header Image Section -->
        <div id="sentConfirmation">
        <div class="jumbotron">
          <h1 class="display-4">Thank You</h1>
          <hr class="my-4">
          <p class="lead">We will get back to you shortly</p>
          <a class="btn btn-primary btn-lg" href="/" role="button">Back to Home</a>
        </div>
        </div>

<?php

}

else{
?>


<!-- Header Image Section -->
<div id="home">
	<div id="weblogo">
		<img src="public/images/rlmweblogo.png">
	</div>
</div>

<!-- About Section -->
<div id="about" class="row">
	<div class="col-12 about">
		<h2>RLM CHICAGO</h2>
		<hr/>
		<p>We exist to come alongside our clients 
			in trusted partnership to realize their vision 
			with a consultative, relationship-driven approach 
			with unparalleled delivery and execution. 
		</p>
	</div>
</div>

<!-- Services Section -->
<div id="service">
	<div class="white">
		<h4>WHAT WE DO</h4>
		<hr/>
	</div>

	<div class="d-flex flex-row flex-wrap justify-content-center">
		<div class="p-2 servicecard">
			<img class="icon" src="public/images/planning.png">
			<h5 class="card-title"><b>EVENT PLANNING</b></h5>
			<p class="card-text">We know the importance of entertaining. We will design, plan and manage your event so you can enjoy the party. If you can dream it, we are here to elevate and execute your vision.</p>
		</div>
		<div class="p-2 servicecard">
			<img class="icon" src="public/images/design.png">
			<h5 class="card-title"><b>DESIGN</b></h5>
			<p class="card-text">Captivate your guests with an unforgettable experience! Every detail contributes to creating a memorable atmosphere for the occasion.</p>
		</div>
		<div class="p-2 servicecard">
			<img class="icon" src="public/images/wine.png">
			<h5 class="card-title"><b>EDUCATION</b></h5>
			<p class="card-text">We believe in the power of learning. Whether you are starting with the basics or growing in personal mastery, we offer hands on, interactive ways for your guests to experience something new.</p>
		</div>
		<div class="p-2 servicecard">
			<img class="icon" src="public/images/catering2.png">
			<h5 class="card-title"><b>CATERING</b></h5>
			<p class="card-text">We’ve got you covered! We’ve partnered with some of Chicago’s top culinary leaders to offer customized catering services.</p>
		</div>
	</div>
</div>

<!-- Our Work Section -->
<div id="work">
	<div >
		<h4>OUR WORK</h4>
		<hr/>
		<p>We strive to become Chicagoland’s most innovative and trusted curators of unique, customized and transformative events.
		</p>
	</div>
	<div class="d-flex flex-row flex-wrap justify-content-center">
		<div class="p-2">
			<img class="gallery" src="public/images/gallery1.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery2.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery3.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery4.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery6.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery5.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery7.png">
		</div>
		<div class="p-2">
			<img class="gallery" src="public/images/gallery8.png">
		</div>
	</div>
</div>

<!-- Team Section -->
<div id="team">
	<div >
		<h4>OUR TEAM</h4>
		<hr/>
	</div>
	<div class="d-flex flex-row flex-wrap justify-content-center">
		<div class="p-2">
			<img class="profile" src="public/images/jordyn2.png">
			<p>Jordyn</p>
		</div>
		<div class="p-2">
			<img class="profile" src="public/images/oscar2.png">
			<p>Oscar</p>
		</div>
		<div class="p-2">
			<img class="profile" src="public/images/brigitte2.png">
			<p>Brigitte</p>
		</div>
		<div class="p-2">
			<img class="profile" src="public/images/danny2.png">
			<p>Danny</p>
		</div>
		<div class="p-2">
			<img class="profile" src="public/images/jen2.png">
			<p>Jen</p>
		</div>
	</div>
</div>

<!-- Values Section -->
<div id="values">
	<div>
		<h4>OUR VALUES</h4>
		<hr style="border: 1px solid #252226" />
	</div>
	<div class="d-flex flex-row flex-wrap justify-content-center">
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/1a.png">
			<h5 class="value-title">RESPECT</h5>
			<p class="value-text"> Respect is the cornerstone of our core values. Respect should be expected and extended in all our relationships and interactions. We respect our clients, our colleagues, our vendor partners, our meeting places, our venues, ourselves, and our work.
			</p>
		</div>
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/2a.png">
			<h5 class="value-title">COLLABORATION</h5>
			<p class="value-text">We know that achieving great results requires working in collaboration with others who bring unique skills, abilities, and perspectives. We value diversity of thought and welcome input from others.
			</p>
		</div>
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/3a.png">
			<h5 class="value-title">MUTUALITY</h5>
			<p class="value-text">We strive for mutuality in our partnerships because when we create shared value, we build lasting relationships that lead to sustainable results.
			</p>
		</div>
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/4a.png">
			<h5 class="value-title">HUMILITY</h5>
			<p class="value-text">We create space for continuous improvement by accepting feedback in humility. We celebrate each success in a way that readily gives acknowledgement to others and that recognizes even our strengths have been given to us as gifts.
			</p>
		</div>
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/5a.png">
			<h5 class="value-title">CREATIVITY</h5>
			<p class="value-text">We celebrate creativity and innovation! We believe that in a fast-paced and functionally-oriented culture, our clients crave art, creativity, and beauty. We believe that there is value not only to that which is practical and functional, but also to that which is beautiful.
			</p>
		</div>
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/6a.png">
			<h5 class="value-title">OWNERSHIP</h5>
			<p class="value-text">We take ownership of our work, and accountability for our actions, and believe in conducting every aspect of our business with integrity. We believe that to be good stewards of our resources, skills, and abilities, we have a responsibility to carry out our work with the highest level of excellence, and we approach our work with passion.
			</p>
		</div>
		<div class="p-2 valuecard">
			<img class="numbers" src="public/images/7a.png">
			<h5 class="value-title">MULTIPLICATION</h5>
			<p class="value-text">We seek to develop talent and provide our employees opportunities for professional development. We aim to develop our employees to be not only the best professionals they can be, but also to become better family members, friends, neighbors, and members of their communities.
			</p>
		</div>
	</div>

</div>

<!-- Contact Section -->
<form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" />
<div class="messages"></div>
	<div class="controls">
		<div id="contact">
			<div>

				<h4 class="white">GET IN TOUCH</h4>
				<hr class="white"/>
				<img id="mail" src="public/images/mail.png">
				<p class="white">info@rlmchicago.com</p>
			</div>

			<div class="d-md-flex flex-row flex-wrap justify-content-center">
				<div class="p-2 width2">
					<div class="form-group">
						<input id="form_email" type="email" name="from" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
						<div class="help-block with-errors"></div>
					</div>
				</div>
      </div>
      
			<div class="d-md-flex flex-row flex-wrap justify-content-center">
				<div class="p-2 width2">
					<div class="form-group">
						<textarea id="form_message" rows="5" name="message" class="form-control" placeholder="Enter Message Here" required="required" data-error="Message field is empty."></textarea>
						<div class="help-block with-errors"></div>
					</div>
				</div>
			</div>
			<div class="d-md-flex flex-row flex-wrap justify-content-center">
				<div class="p-2">
					<input type="submit" name="buttonPressed" class="btn btn-success btn-send">
				</div>
			</div>
		</div>
	</div>
</form>

<?php } ?>

<div class="foot">
	<a href="" target="_blank"><img class="social" src="../public/images/insta.png"></a>
	<a href="https://www.facebook.com/RLMChicago/" target="_blank"><img class="social" src="../public/images/facebook.png"></a>
</div>
</body>
</html>
