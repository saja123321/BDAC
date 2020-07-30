<?php
$e=$_REQUEST['c'];

require("../connition.php");
$s = "select * from user_courses where user_name= '$name' && cours_id = '.$e.'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
  header('location:c++.php');

}
else
{ 
  $in = "insert into user_courses (cours_id, user_name, teacher_name) VALUES ('$e','$name', 'Saja')";
  $result2 = mysqli_query($con, $in);
  $num2 = mysqli_num_rows($result2);
  
  switch ($e){
     case '1':
  header('location:c++.php');    
   break;  
   case '2':
    header('location:java.php');    
     break; 
     case '3':
      header('location:php.php');    
       break; 
       case '4':
        header('location:latex.php');    
         break; 
         case '5':
          header('location:Csharp.php');    
           break; 
           case '6':
            header('location:js.php');    
             break; 
             default:
    header('location:all-courses.php');    }
}
?>