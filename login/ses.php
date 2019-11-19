<?php
session_start();

 if($_SESSION['login_user'] != "admin"){
      header("location:index.php");
      die();
   }
?>