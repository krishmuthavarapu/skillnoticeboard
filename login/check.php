<?php
   include("db.php");
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysql_real_escape_string($_POST['user']);
      $mypassword = mysql_real_escape_string($_POST['pass']); 
      $verify="";
      $sql = "SELECT * FROM login WHERE user = '$myusername' and password = '$mypassword'";
      $result = mysql_query($sql);
      while($row = mysql_fetch_array($result))
	  {
		  $verify= $row['user'];
	  }
    
      if($verify == $myusername) {
          session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: Dashboard.php");
      }else {
          echo "<script type='text/javascript'>
	  window.location.href='index.php';

 alert('Sorry Please try again with correct username and password!');
	 </script>";
	 
      }
   }
?>