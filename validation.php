<?php

require("connition.php");

$name = $_POST ['user'];
$pass = $_POST ['password'];

$s = "select * from usertable where name = '$name' && pass = '$pass'";
$t = "select * from teachertable where name = '$name' && pass = '$pass'";
$im="select `images` from usertable where name ='$name'";
$result = mysqli_query($con, $s);
$result2 = mysqli_query($con, $t);
$num1 = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

if($num1 == 1){


  
    $_SESSION['username'] = $name;
    header('location:Dark/index.php');
    setcookie("userdata" ,$name ,time()+60*60*24 );
    setcookie("userp" , $pass,time()+60*60*24 );
    setcookie("login" ,  1 , time()+60*60*24 );

}
else if ($num2==1){

    $_SESSION['username'] = $name;
header('location:Dark/teacheraccount.php');
setcookie("userdata" ,$name ,time()+60*60*24 );
setcookie("userp" , $pass,time()+60*60*24 );
setcookie("login" ,  1 , time()+60*60*24 );}
else{
    header('location:erorr.php');
    setcookie("userdata" , $_POST['$name'],time()-60*60*24 );
    setcookie("userp" , $_POST['$pass'],time()-60*60*24 );
    setcookie("login" ,  1 , time()-60*60*24 );
}
?>