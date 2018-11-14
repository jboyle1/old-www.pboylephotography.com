<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<meta name="Description" content="Affordable and professional property photography, Photographer, Architecture, Construction, Estate Agents">
		<meta name="Keywords" content="Photography, Property, Buildings, Estate Agents">
		<meta name="author" content="Paddy Boyle">
		<title>Paddy Boyle Property Photography | Welcome</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/png" href="images/dads/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
	</head>
	<body>
			<header>
			<div class="container">
				<div id="branding">
				<span><a href="index.html"> 
					<img src="images/dads/d2finished.svg" height="50px" width="200px" alt="Jed Boyle Logo" onmouseover="this.src='images/dads/d1finished.svg';"
					onmouseout="this.src='images/dads/d2finished.svg';"></a></span>
					<div class="type"><span><h1></h1><h2></h2></span></div>
				</div>
				
				<div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a href="services.html">Services</a>
        </div>
    </div>
			</div>
		</header>
	
		
		<section id="cv">
			<div class="container">
				<h9>Follow me on Social Media</h9>
				
				
				
			<form>
				<div class="social">
				<a href="https://www.instagram.com/paddyboylephotography/"><img id="instagram" width="30px" src="images/dads/instagram1.svg" href="index.html" alt="instagram"
		 		onmouseover="this.src='images/dads/instagram2.svg';"
		 		onmouseout="this.src='images/dads/instagram1.svg';"></a>
				<a href="https://uk.linkedin.com/in/paddyboyleportraits"><img id="linkedin" width="30px" src="images/dads/linkedin1.svg" href="index.html" alt="linkedin"
		 		onmouseover="this.src='images/dads/linkedin2.svg';"
		 		onmouseout="this.src='images/dads/linkedin1.svg';"></a>
				<a href="https://www.facebook.com/paddy.boyle.1614"><img id="facebook" width="30px" src="images/dads/facebook1.svg" href="index.html" alt="facebook"
		 		onmouseover="this.src='images/dads/facebook2.svg';"
		 		onmouseout="this.src='images/dads/facebook1.svg';"></a>
				</div>
			</form>
			</div>
		</section>
		
		
		<section id="main">
			<div class="container">
				<article id="main-col">
					<h4 class="page title">Services</h4><br>
					<ul id="services">
						
							<h11>Property Market</h11><br><br>
						
						<li>
							<div class="service2"></div><p><b>3-Bedroom House</b><em> (incl 1 living, 1 dining &amp; 1 bathroom)</em><br>£100</p></li>
						<li>
							<div class="service2"></div><p><b>Extra Rooms</b><br>Plus £20 each</p></li>
						<li>
							<div class="service2"></div><p><b>Aerial Images</b><br>Plus £20 per extra image</p></li>
						<li>
							<div class="service2"></div><p>This service is exclusive to the sale of household properties. A minimum of 20 high-resolution images will be supplied. Basic post production of cropping, colour balance, parallax distortion correction and enhancements are included in the package.</p></li>
						<li>
							<div class="service2"></div><p>It is my absolute intention to provide the vendor with excellent quality imagery that will enhance the sale of their property. However, the vendor should be aware that the property should be in good order and ready for photography. I have no authority to organize or arrange the individual rooms.</p></li>
							
						<br><h11>Commercial Market</h11><br><br>
						
						<li>
							<div class="service2"></div><p><b>Half Day</b><em> (4 hours)</em><br>£300</p></li>
						<li>
							<div class="service2"></div><p><b>Subsequent Hours</b><br>£50 per hour</p></li>
						<li>
							<div class="service2"></div><p><b>Aerial Images</b><br>£25 per image</p></li>
						<li>
							<div class="service2"></div><p>Discounted rates are available for multiple commissions. As with all bespoke commissions establishing the client’s requirements is essential. A cordial discussion prior to the photography is recommended. All post production is included in the fee.</p></li>
						
						<br><h11>Expenses</h11><br><br>
						
						<li>
							<div class="service2"></div><p><b>Mileage</b><em> (within 10-mile radius, free)</em><br>45p per mile</p></li>
						
						<li>
							<div class="service2"></div><p><b>Travel Time</b><em> (first hour free)</em><br>£20 per hour</p></li>
						
						<br><h11>Copyright Notice</h11><br><br>
						
						<li>
							<div class="service2"></div><p>Copyright remains at all times with the photographer, but extensive licences are supplied to the client for multiple usages. Images may not be sold on to a 3rd party without the express consent of the photographer.</p></li>
					</ul>
				</article>
				<aside id="sidebar">
					<div class="dark2">
						<h5>Get a Quote</h5>
						<div class="quote">
							<?=$thankYou ?>

							<form method="post" action="contact.php">
								<label>Name:</label>
								<input name="sender">

								<label>Email address:</label>
								<input name="senderEmail">

								<label>Message:</label>
								<textarea rows="5" cols="20" name="message"></textarea>

								<input type="submit" name="submit">
							</form>
						</div>
					</div>
				</aside>
				
			</div>
		</section>
		<style>
			


	














aside#sidebar{
	float: right;
	width: 30%;
	margin-top: 39px;
}

aside#sidebar .quote input, aside#sidebar .quote textarea{
	width: 90%;
	padding: 5px;
}

/*Mai-col*/

article#main-col{
	float: left;
	width: 65%;
}

/*Services*/





/* Media queries*/

@media(max-width: 700px){
	header,
	header nav,
	container,
	header nav li,
	#cv h1,
	#boxes .box, 
	article#main-col,
	aside#sidebar{
		float: none;
		text-align: center;
		width: 100%;
}
	
	#showcase h1{
		margin-top: 40px;
	}
	#cv button, .quote button{
		display: block;
		width: 100%;
	}
	
	
}












		</style>
		<br><br><br>
		<footer>
				<p>Paddy Boyle Photography &copy; 2018</p>
		</footer>
	</body>
</html>


<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    

