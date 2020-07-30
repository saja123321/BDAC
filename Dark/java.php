
<?php 
if (!isset($_COOKIE["login"])){

  header('location:../login.php');
  
  
}


require("../connition.php");
$n=$_COOKIE['userdata'];
  if ($n=='Saja' && $n=='Arar'){
    header('location:../login.php');}

$s = "select * from user_courses where user_name= '$name' && cours_id = '2'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html> 
<html>
<head  >

<script>
  var num = "<?php echo(json_encode($num)); ?>";

    function change0() 
  {
      var elem = document.getElementById("myButton2");

      var x = document.getElementById("courses");
    
      if (num==1)
      {  elem.value = "Unenroll"
        x.style.display = "block"}

      else { elem.value = "Enroll Now"
        x.style.display = "none"}
     
  }

  function en() 
  {
      var elem = document.getElementById("myButton2");
      var num = "<?php echo(json_encode($num)); ?>";
        if (num==0)
      {  
        location.href = 'enroll.php?c=2';
        
      }

      else {
        location.href = 'un.php?c=2';
      }
     
  } 
  </script>
<title> Java </title>
<link rel="stylesheet" href="courses/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  onload="change0();">
<!----------------- Nav-Bar Section --------------->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="#"><img src="images/googlelogo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-bars"></i>
</button>
<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-user"></i></button>
  <div class="dropdown-content">
    <a href="myaccount.php" target="_self" >My account</a>
    <a href="mycourses.php" target="_self">My Courses</a>
    <a href="../logout.php">Logout</a>  <!--Saja Edit This-->
  </div>
</div>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
  <a class="nav-link" href="index.php"> Home </a>
</li>
<li class="nav-item">
<a class="nav-link" href="#courses"> Lessons </a>
</li>      
<li class="nav-item">
<a class="nav-link" href="#footer"> Contact </a>
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
<p class="promo-title"> Learn Java </p>
<p>Here you can the best way you want to learn Java Just click on Enroll now to get it </p>
<input onclick="en()" type="button" value="Enroll Now" id="myButton2" class="btn btn-primary"></input> 
</div>
<div class="col-md-6 text-center">
<img src="images/java.png" class="img-fluid">
</div>
</div>
</div>
<img src="images/wave1.png" class="bottom-img">
</section>
<!--------------- Courses Section --------------->
<section id="courses">
<div class="container text-center">
<h1 class="title">Start Learning </h1>
<div class="row text-center">
<?php

$fetchVideos = mysqli_query($con, "SELECT vid_location , vid_description FROM course_video where course_id='2' ORDER BY `course_video`.`time_added` ASC");
while($row = mysqli_fetch_assoc($fetchVideos)){
 $location = $row['vid_location'];
 $dis= $row['vid_description'];
 
 echo "   <div class=\"col-md-4 courses\"> ";
 echo "<div>  <h4> $dis </h4> </div>";
 echo "<video class=\"courses-img\" src='".$location."' controls  >";
 echo "</div> ";
   }

     
    
     ?>

  </div>
<br>
<div align ="center">
<br>
<p class="more">Rate this course 💚</p>

<textarea> Rate Us here... </textarea>
<br>
<button id="myFunction0" onclick="myFunction0()" > Rate now </button>
<script>
  function myFunction0() {
    var txt;
    if (confirm("Thanks for rate !")) {
      txt = "You pressed OK!";
    } else {
      txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
  }
  </script>
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