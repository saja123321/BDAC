<?php

session_start();
header('location:login.php');
require("connition.php");

$name = $_POST ['user'];
$pass = $_POST ['password'];
$image = $_FILES['image']['name'];
$target = "images/".basename($image);
$s = "select * from usertable where name = '$name'";
$s2 = "SELECT * FROM teachertable WHERE name = '$name'";

$result = mysqli_query($con, $s);
$result2 = mysqli_query($con, $s2);

$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

if($num == 1 OR $num2 == 1){
    echo "Username Already Taken";
    header('location:erorr2.php');
}
else{
    $reg = " insert into usertable(name , pass,images) values ('$name' , '$pass','$image')";
    mysqli_query($con, $reg);
    header('location:sucsess.php');
         
}
?>