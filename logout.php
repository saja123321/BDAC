<?php 
session_start();
session_destroy();

header('location:login.php');
setcookie("userdata" , 0,time()-60*60*24 );
setcookie("userdata" ,0,time()-60*60*24 );
setcookie("login" ,  0 , time()-60*60*24 );
?>