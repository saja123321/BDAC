<?php 
if (!isset($_COOKIE["login"])){

  header('location:../login.php');
}
require("../connition.php");
$n=$_COOKIE['userdata'];
  if ($n=='Saja' && $n=='Arar'){
    header('location:../login.php');}
?>

<!DOCTYPE html>
<html>
<head>
<title> Agency Website Template</title>
<title><img src="images/googlelogo.png" ></img>Webnet</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="images/googlelogo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
      </button>
      <div class="dropdown">
        <button class="dropbtn"><i class="fa fa-user"></i></button>
        <div class="dropdown-content">
          <a href="myaccount.php" target="_self" >My account</a>
          <a href="mycourses.php" target="_self">My Courses</a>
          <a href="../logout.php">Logout</a>  <!--Saja Edit This-->
        </div>
      </div>
          <div style="position: sticky;" class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services"> Services </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us"> About Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimoials"> Testimonials </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer"> Contact </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#courses"> courses </a>
              </li>
          <li>
          <input onclick="change()" type="button" value="Toggle dark mode" id="myButton1" class="dark"></input>
          </li>
          </ul>
        </div>
      </nav>
</section>
<script>
function change() 
{
    var element = document.body;
    element.classList.toggle("dark-mode");
    var elem = document.getElementById("myButton1");
    if (elem.value=="Toggle light mode") elem.value = "Toggle dark mode";
    else elem.value = "Toggle light mode";
}
</script>
<!--------banner section--------->
<section id="banner">
<div class="container">
<div class="row">
<div class="col-md-6">
<p class="promo-title"> Best Digital Agency</p>
<p>Follow my Facebook Profile to see the new IT news and new memes</p>
<a href="#"><img src="images/play.png" class="play-btn">Watch Here</a>  
</div>
<div class="col-md-6 text-center">
<img src="images/9.png" class="img-fluid">
</div>
</div>
</div>
<img src="images/wave1.png" class="bottom-img">
</section>

<!--------------- Services Section --------------->

<section id="services">
<div class="container text-center">
<h1 class="title">What We Do ? </h1>
<div class="row text-center">
<div class="col-md-4 services">
<img src="images/Service1.png" class="service-img">
<h4>Marketing</h4>
<p>Follow my Facebook Profile to see the new IT news and new memes</p>
</div>
<div class="col-md-4 services">
  <img src="images/Service2.png" class="service-img">
  <h4>Online Branding</h4>
  <p>Follow my Facebook Profile to see the new IT news and new memes</p>
  </div>
  <div class="col-md-4 services">
    <img src="images/Service3.png" class="service-img">
    <h4>Animated Ads</h4>
    <p>Follow my Facebook Profile to see the new IT news and new memes</p>
    </div>
</div>
<button type="button" class="btn btn-primary"> All services</button>
</div>
</section>
<!--------------- Courses Section --------------->
<section id="courses">
  <div class="container text-center">
  <h1 class="title">Find you course </h1>
  <div class="row text-center">
  <div class="col-md-4 courses">
  <img src="images/php.png" class="courses-img">
  <h4>PHP</h4>
  <br>
  <button type="button" class="btn btn-primary"><a class="a" href="php.php" target="blank">Enroll Now</a></button>
  </div>
  <div class="col-md-4 courses">
    <img src="images/java.png" class="courses-img">
    <h4>Java</h4>
    <br>
    <button type="button" class="btn btn-primary"><a class="a" href="java.php"  target="blank">Enroll Now</a></button>
    </div>
    <div class="col-md-4 courses">
    <img src="images/C++.png" class="courses-img">
    <h4>C++</h4>
    <br>
    <button type="button" class="btn btn-primary"><a class="a" href="c++.php"  target="blank">Enroll Now</a></button>
    </div>
<div class="col-md-4 courses">
        <img src="images/js.png" class="courses-img">
        <h4>JS</h4>
        <br>
        <button type="button" class="btn btn-primary"><a class="a" href="js.php"  target="blank">Enroll Now</a></button>
        </div>
<div class="col-md-4 courses">
          <img src="images/Csharp.png" class="courses-img">
          <h4>C#</h4>
          <br>
          <button type="button" class="btn btn-primary"><a class="a" href="Csharp.php"  target="blank">Enroll Now</a></button>
          </div>
<div class="col-md-4 courses">
            <img src="images/latex.png" class="courses-img">
            <h4>LaTex</h4>
            <br>
            <button type="button" class="btn btn-primary"><a class="a" href="latex.php"  target="blank">Enroll Now</a></button>
            </div>
  </div>
  <br>
  
  <button type="button" class="btn btn-primary"><a class="a" href="all-courses.php"  target="blank">All courses</a></button>
  </div>
  </section>
<!--------------- About Us --------------->
<section id="about-us">
<div class="container">
<h1 class="title text-center">Why Choose US</h1>
<div class="row">
<div class="col-md-6 about-us">
<p class="about-title"> Why We're Different </p>
<ul>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
<li>Believe in doing Business with honesty</li>
</ul>
</div>
<div class="col-md-6">
<img src="images/network.png" class="img-fluid">
</div>
</div>
</div>
</section>

<!--------------- Testimonials --------------->
<section id="testimoials">
<div class="container">
<h1 class="title text-center">What Client Say </h1> 
<div class="row offset-1">
<div class="col-md-5 testimonials">
<p>Follow my Facebook Profile to see the new IT news and new memes</p>
<img src="images/user1.png">
<p class="user-details"><b>Abdrhman Arar</b> Co-founder at xyz</p>  
</div>
<div class="col-md-5 testimonials">
  <p>Follow my Facebook Profile to see the new IT news and new memes</p>
  <img src="images/user2.png">
  <p class="user-details"><b>Saja Malkawi</b> Director at xyz</p>  
</div>
</div>
</div>
</section>

<!--------------- Social Media Section --------------->
<section id="social-media">
<div class="container text-center">
<p> Find Us on Social media </p>
<div class="social-icons">
<a href="https://www.facebook.com/abdrhmanarar" target="_self"><img src="images/facebook.png"></a>
<a href="https://api.whatsapp.com/send?phone=962791841913" target="_self"><img src="images/whatsapp.png"></a>
<a href="https://www.instgram.com/abdrhmanarar" target="_self"><img src="images/instgram.png"></a>
<a href="https://www.twitter.com/abdrhmanarar" target="_self"><img src="images/twitter.png"></a>
<a href="https://www.snapchat.com/add/abdrhmanarar" target="_self"><img src="images/snapchat.png"></a>
<a href="https://www.linkedin.com/in/abdrhmanarar" target="_self"><img src="images/linkedin.png"></a>
</div>
</div>
</section>
<!--------------- Footer Section --------------->
<section id="footer">
<img src="images/wave2.png" class="footer-img">
<div class="container">
<div class="row">
<div class="col-md-4 footer-box">
<img src="images/googlelogo.png">
<p>Follow my Facebook Profile to see the new IT news and new memes by pressing the follow icon</p>
</div>
<div class="col-md-4 footer-box">
<p><b>Contact Us</b></p>
<p><i class="fa fa-map-marker"></i>World Trade Center, Jordan</p>
<p><i class="fa fa-phone"></i>+962 791841913</p>
<p><i class="fa fa-envelope-o"></i>xyz@yourmail.com</p>
</div>
<div class="col-md-4 footer-box">
  <p><b>Subscribe Newsletter</b></p>
  <input type="email" class="from-control" placeholder="your Email">
  <button type="button" class="btn btn-primary">Subscribe</button>
</div>  
</div>
<hr>
<p class="copyright">Website Crafted by Abdrhman Arar & Saja Malkawi</p>
</div>
</section>
<!--------------- Smooth Scroll --------------->
<script src="smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>