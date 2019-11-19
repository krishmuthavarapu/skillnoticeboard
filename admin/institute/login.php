<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Institute Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Institute Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>email</label>
			<input type="email" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="../../institute_registration.php">Sign up</a>
		</p>
	</form>


</body>
</html>