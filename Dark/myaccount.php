<?php
require("../connition.php");
$n=$_COOKIE['userdata'];
  if ($n=='Saja' || $n=='Arar' || $n=='aaa'){
    header('location:../login.php');}

    
    $targetDir = "images/";
    
    new mysqli($servername , $username, $password, $dbname);
    
    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
      $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = mysqli_query($con, "UPDATE `usertable` SET `images`='$fileName' WHERE  `usertable`.`name`='$n'");
            } 
          }  
        }

?>


<!DOCTYPE html>
<head>
<title> My Account </title>
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
<!--------banner section--------->
<section id="account">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <h4 class="h4">Name :<?php echo $_COOKIE['userdata'];?> </h4> <!--Saja Edit This-->
    <h4 class="h4a">Pass:  <?php echo $_COOKIE['userp'];?>  </h4>  <!--Saja Edit This-->
    <br><br>
    <a class="btn0" href="mycourses.php" target="_self">My Courses</a> </br>    </div>
    <div class="col-md-6 text-center" id="content">
    <?php
   $query =  mysqli_query($con,"SELECT * FROM usertable WHERE `name`='$n' ");
   if(!$query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
   }

   if(mysqli_num_rows($query) > 0){
       while($row =mysqli_fetch_array($query)){
           $imageURL = 'images/'.$row['images'];
   ?>
   <img  class="img-fluid" src="<?php echo $imageURL; ?>" alt="" />
   <?php }
   }
   else{ ?>
       <img  class="img-fluid" src="images/user1.png" alt="" />
   <?php } ?>

   <form action="myaccount.php" method="post" enctype="multipart/form-data">
   <br>
    Select Image File to Upload:
    <br><br>
    <input type="file" name="file" class="btn btn-primary">
    <br><br>

    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
    </form>

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
  