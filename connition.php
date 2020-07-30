<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "userregistration";
$name = $_COOKIE['userdata'];
$con = mysqli_connect('localhost:3306','root', '', 'userregistration');
mysqli_select_db($con, 'userregistration');

?>