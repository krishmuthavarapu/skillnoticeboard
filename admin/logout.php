<?php 
session_start();
// logout

if(isset($_POST['logoutbtn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}
?>