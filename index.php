<!DOCTYPE html>
<html>
<head>
  <title>kkmeena</title>
  <link rel="icon" href="images/title.png" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
  <link href="footer.css" rel="stylesheet" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
  body {
      position: relative; 
  }

  .back-cover2 {
	height:80vh;
	background:url(images/stones.jpg) no-repeat fixed;
	background-size:cover;
	background-position:center;*/
}
.back-cover1 {
	height:80vh;
	background:url(images/glass.jpg) no-repeat fixed;
	background-size:cover;
	background-position:center;*/
}

 /* div.sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 10%;
      background-color: yellow;
      padding: 50px;
      font-size: 20px;
  }  */




  #section1 {
    padding-top:10%;
    height:800px;
    color: #000;
    background:#fff;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
  #section2 {
    padding-top:50px;
    height:800px;color: #fff; 
    background-color: #673ab7;
    
    }
  #section3 {padding-top:50px;height:800px;color: #fff; background-color: #ff9800;}
  #section5 {padding-top:50px;height:800px;color: #fff; background-color: #405308;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="section1">KK's Blog</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar" style="background-color:#1B2F4B;">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">About Me</a></li>
          <li><a href="#section3">Address</a></li>
        <!--  <li><a href="#section41">Section 4</a></li>
          <li><a href="#section5">session5</a></li> -->
          <li><a href="https://kk4466345.000webhostapp.com/contect_form/index.html">Contect Me</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid">

  <div class="row">
  
    <div class="col-lg-7" style="margin-top:10%;">
      
      <p style="padding-left: 20%;font-family: Times New Roman;"><font size="9">Hi</font><font size="4"> , Myname is </font></p>
      <h3 style="line-height:50%;padding-left: 20%;color:rgb(104, 250, 254);font-family:'Aguafina Script'; font-size:4em; "> Krishna Kumar </h3>
      <p style="padding-left: 20%;font-family: Times New Roman;"><font size="4">I am second year undergraduate student at iit kanpur.</font></p>
    </div>
    <div class="col-lg-5">
      <?php include 'clock.html'; ?>
    </div>
  </div>

  </div>



  <div class="back-cover2">
			<!--<div class="container upcoming">
				<h1 style="font-family:'edo';">Upcoming Events</h1>
			</div>-->
	</div>



<div id="section2" class="container-fluid sticky">
    <p style='font-family:"Akronim";font-size:6em;color:lightgray;text-align:center;flex-direction:row;display:flex;justify-content:center;align-items:center;'>About Me</p>
  <h3 style="line-height:200%;color:#673ab7 ">-</h3>
  <h3 style="margin-left:18%;margin-right:20%;">Currently,   I am Third year Undergraduate student at IIT Kanpur.</h3>
  <h4 style="margin-left:18%;margin-right:20%;">I complete my 12 from KVM Public school, Sikar(Rajasthan)  RBSE bord with 83%.
    After that I start prepration to jee and selected as ONE of the 10,000 student from 1.5 lacks student from all inia </h4>
  <h4 style="margin-left:18%;margin-right:20%;">My earler study was from my village</h4> 
</div>


  <div class="back-cover1">
			<!--<div class="container upcoming">
				<h1 style="font-family:'edo';">Upcoming Events</h1>
			</div>-->
	</div>

<!--  ################  Address section start here ############ -->



<div id="section3" class="container-fluid sticky">
  <?php include 'address.php';?>
</div>



<!---  ################address section ends here ##################### -->



<div id="section4" class="container-fluid sticky">
  <?php include '';?>
</div>



<!--  ################### contect me ends here #############-->

<!--

<div id="section41" class="container-fluid sticky">
  
  <p style='font-family:"Akronim";font-size:6em;color:lightgray;text-align:center;flex-direction:row;display:flex;justify-content:center;align-items:center;'>Projects</p>

  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section42" class="container-fluid sticky">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

-->
<?php include 'footer.php'; ?>


</body>
</html>
