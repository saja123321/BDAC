<?php
require("../connition.php");
?>
<!doctype html>
<html>
  <head>
    <style>
    video{
     float: left;
    }
    </style>
  </head>
  <body>
    <div>
 
     <?php
     $fetchVideos = mysqli_query($con, "SELECT vid_location FROM course_video where course_id='1' ORDER BY vid_id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['vid_location'];
 
       echo "<div >        ";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";
     }
     ?>
 
    </div>

  </body>
</html>