<?php
$e=$_REQUEST['c'];
require("../connition.php");
 
  $in = "DELETE FROM `user_courses` WHERE `user_name`='$name' && `cours_id`='$e'";
  $result2 = mysqli_query($con, $in);
  $num2 = mysqli_num_rows($result2);
   if($num2 == 1){
    header('location:all-courses.php');    }else
    {
      header('location:all-courses.php');
    }

?>