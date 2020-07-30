<!doctype html>
<html>
  <head>
  <title> Upload Video </title>
<link rel="stylesheet" href="courses/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php

if (!isset($_COOKIE["login"])){

header('location:../login/login.php');}
$n=$_COOKIE['userdata'];
if ($_COOKIE['userdata']!='Saja' && $_COOKIE['userdata']!='Arar'){
header('location:../login.php');}
require("../connition.php");

    if(isset($_POST['but_upload'])){
       $maxsize = 5242880; 
       $vid_description=$_POST['dis'];
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];
       $course_id = $_POST['co'];
      
       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO course_video (`vid_description`, `course_id`, `vid_location`, `time_added`) VALUES('".$vid_description."','".$course_id."','".$target_file."',CURRENT_TIMESTAMP)";

              mysqli_query($con,$query);
              echo "Upload successfully.";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
     } 
     ?>

  </head>
  <body>
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
                <a href="teacheraccount.php" target="_self" >My account</a>
                <a href="techercourses.php" target="_self">My Courses</a>
                <a href="../logout.php">Logout</a>  <!--Saja Edit This-->
              </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"> Home </a>
                </li>
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
    <p class="promo-title"> Upload Your Course Here </p>
    <p>Upload you video with best Quality  </p>
    </div>
    <div class="col-md-6 text-center">
    <img src="images/9.png" class="img-fluid">
    </div>
    </div>
    </div>
    <img src="images/wave1.png" class="bottom-img">
    </section>    


  </br> </br>
    <center>
    <form method="post" action="" enctype='multipart/form-data'>
   
    <?php 
  $query1 = "SELECT * FROM `courses` WHERE `courses`.`teacher_name`='$n'";
$Q=mysqli_query($con,$query1);


$count=0;
if($Q){
?> 
 <select  name="co" class="btn btn-primary dropdown-toggle">
<?php
while($row = mysqli_fetch_assoc($Q)){
  $course = $row['course_name'];
  $count=$count+1;
  ?>
  <option value="<?= $count ?> " >  <?= $course ?> </option> 
  <?php
} 
echo " </select  > ";
}
else
echo "eeeeerrrroooorrr ";
 ?>  
</select>
</center>


</br> </br>
<center>

<div >
    <textarea name="dis" rows="4" cols="50"  placeholder=" Type a Description of video "></textarea>
</div>
    </br>
    <input type='file' name='file' class="btn btn-primary" />
    <input type='submit' class="btn btn-primary" value='Upload' name='but_upload'>
    </br> 
    </br>
    </br>
    </form>
</br>
</center>

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
    <br>
    <p class="copyright">Website Crafted by Abdrhman Arar & Saja Malkawi</p>
    </div>
    </section>

 


</body>
</html>