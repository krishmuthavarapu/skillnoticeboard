<?php

$mysqli = new mysqli("localhost", "ibpstcc2_rama", "rama@123", "ibpstcc2_skillmonks");
 if(isset($_POST['submit']))
{
  // Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$number = $mysqli->real_escape_string($_REQUEST['number']);
$city = $mysqli->real_escape_string($_REQUEST['city']);
$comment = $mysqli->real_escape_string($_REQUEST['comment']);

date_default_timezone_set('Asia/Calcutta');
$date = date('d-m-Y h:i:s');

 
// Attempt insert query execution
$sql = "INSERT INTO smlead (name, email, number, city, comment,time) VALUES ('$name', '$email', '$number', '$city', '$comment','$date')";
if($mysqli->query($sql) === true){
	 echo "<script type='text/javascript'>
	  window.location.href='http://www.skillmonks.com/welcome';

 alert('submitted successfully!');
	 </script>";
	 
	
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
}

?>

  <div>
	   	<form class='reg-now-visible'  action="post.php" method="post" >
								<div class='control-group'>
									<input type="text" name="name" value="" placeholder='Enter your Name' required >
								</div>
								<div class='control-group'>
									<input type="text" name="email" value=""  placeholder='Enter your Email' required>
								</div>
								<div class='control-group'>
									<input type="text" name="number" value="" placeholder='Enter your telephone' required>
								</div>
								<div class='control-group'>
									<input type="text" name="city" value=""  placeholder='Enter your City' required>
								</div>
								<div class='control-group'>
									<textarea type="text" name="comment" value="" placeholder='Message'required ></textarea>
								</div>

								<style>
								.big{
								    background-color: #fd5b1c;
									margin: 0px 9px 11px 4px;
									width: 165px;
									margin-left: 75px;
									height: 49px;
								}
								@media only screen and (max-width: 768px) {
								
								.small1{
								background-color: #0ace0a;
								margin: 0px 9px 11px 4px;
								width: 197px;
								margin-left: 32px;
								height: 54px;
								}
								</style>								

								 <button type="submit" value="Register Now" class='big small1 btn submit sub-form' name="submit">Submit</button>
							</form>
	   </div>
