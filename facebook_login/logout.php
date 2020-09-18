<?php


 require 'config.php';


 $facebook->destroySession();
 session_start();
 unset($_SESSION['userdata']);
 session_destroy();
 header("Location:index.php");


?>