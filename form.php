<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
		<link rel="stylesheet" href="style.css">

		<link href="data-aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	</head>
	<body>
		<center>
		<div data-aos="fade-right">
		<h1 style="color:azure"> Contect Form</h1>	
		</div>
			<div data-aos="fade-left">

				<h3 style="color:azure;font-style:italic">Feel Free to Contect Me</h3>
			</div>
		</center>
		<div class="loginBox">
			<form action="" method="GET">
				<p>Name</p>
				<input type="text" name="name" placeholder="Enter Your Name" require>
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Your Email" require>
				<p>Phone Number</p>
				<input type="text" name="phone" placeholder="Enter Your Phone Number" require>
				<p>Meaasge:</p>
				<textarea rows="3" cols="5" name="comment" placeholder="Write Your Message.."></textarea>
			<!--	<input type="text" name="" placeholder="Enter Your Email">
				<p>Message:</p> 
				<input type="text" name="" placeholder="Your Massage">-->




				<input type="submit" name="submit" value="Submit">



				<!-- <a href="#">Forget Password</a> -->



			</form>
	
		</div>

		<script>
				AOS.init();
				duration:1200;
		</script>
	</body>
</html>
