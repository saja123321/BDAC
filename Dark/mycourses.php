<?php 
if (!isset($_COOKIE["login"])){

  header('location:../login.php');
  
}

$n=$_COOKIE["userdata"];

require("../connition.php");
$query1 = "SELECT * FROM `user_courses` WHERE `user_courses`.`user_name`='$n'";
$Q=mysqli_query($con,$query1);
$nrow= mysqli_num_rows($Q);

?> 
<!DOCTYPE html>
<html>
<head>
<title> My Courses </title>
<title><img src="images/googlelogo.png" ></img>Webnet</title>
<link rel="stylesheet" href="style0.css">
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
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"> Home </a>

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
<section id="courses">
    <div class="container text-center">
    <h1 class="title">My Courses </h1>
    <div class="row text-center">

    <?php
if($nrow>0){
  while($row = mysqli_fetch_assoc($Q)){
    $c = $row['cours_id'];
       if($c==1)
       {
       
    echo  "  <div class=\"col-md-4 courses\">";
    echo  "  <img src=\"images/C++.png\" class=\"courses-img\">";
    echo  " <h4> C++ </h4>  <br> ";
    echo  "<button type=\"button\" class=\"btn btn-primary\"><a class=\"a\" href=\"c++.php\"  target=\"blank\">Watch Now</a></button> ";
    echo  "</div> ";
        
       }

       if($c==2)
       {
       
    echo  "  <div class=\"col-md-4 courses\">";
    echo  "  <img src=\"images/java.png\" class=\"courses-img\">";
    echo  " <h4> Java </h4>  <br> ";
    echo  "<button type=\"button\" class=\"btn btn-primary\"><a class=\"a\" href=\"java.php\"  target=\"blank\">Watch Now</a></button> ";
    echo  "</div> ";
        
       }
       
       if($c==3)
       {
       
    echo  "  <div class=\"col-md-4 courses\">";
    echo  "  <img src=\"images/php.png\" class=\"courses-img\">";
    echo  " <h4> PHP </h4>  <br> ";
    echo  "<button type=\"button\" class=\"btn btn-primary\"><a class=\"a\" href=\"php.php\"  target=\"blank\">Watch Now</a></button> ";
    echo  "</div> ";
        
       }

       if($c==4)
       {
       
    echo  "  <div class=\"col-md-4 courses\">";
    echo  "  <img src=\"images/latex.png\" class=\"courses-img\">";
    echo  " <h4> Latex </h4>  <br> ";
    echo  "<button type=\"button\" class=\"btn btn-primary\"><a class=\"a\" href=\"latex.php\"  target=\"blank\">Watch Now</a></button> ";
    echo  "</div> ";
        
       }

       if($c==5)
       {
       
    echo  "  <div class=\"col-md-4 courses\">";
    echo  "  <img src=\"images/Csharp.png\" class=\"courses-img\">";
    echo  " <h4> C# </h4>  <br> ";
    echo  "<button type=\"button\" class=\"btn btn-primary\"><a class=\"a\" href=\"Csharp.php\"  target=\"blank\">Watch Now</a></button> ";
    echo  "</div> ";
        
       }

       if($c==6)
       {
       
    echo  "  <div class=\"col-md-4 courses\">";
    echo  "  <img src=\"images/js.png\" class=\"courses-img\">";
    echo  " <h4> Jva Script </h4>  <br> ";
    echo  "<button type=\"button\" class=\"btn btn-primary\"><a class=\"a\" href=\"js.php\"  target=\"blank\">Watch Now</a></button> ";
    echo  "</div> ";
        
       }

 
 ?> 

<?php }
}



else {
?>
<center>

    
    <h4 align="center">  No Cuorses </h4>

 
    </center>
<?php }
    ?>
    <br>
</br>
    </div>
    <center>
    <button type="button" class="btn btn-primary"><a class="a" href="index.php">Back to main</button>
    </center>
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