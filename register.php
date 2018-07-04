<?php include('functions.php') ?>
<html>
<head>
	<title>WiseInsurance</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username"  placeholder="e.g festusbetd" value="<?php echo $username; ?>" autofocus>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="e.g festusbet@gmail.com" value="<?php echo $email; ?>" autofocus>
		</div>
		<div class="input-group">
			<label>Insurance type</label>
			<select name="user_policy" placeholder="Type of insurance" id="user_policy" autofocus >
				<option value=""></option>
				<option value="General Insurance">General Insurance</option>
				<option value="General Insurance">Life Assurance</option>
				<option value="Health Insurance">Health Insurance</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="***********" name="password_1" autofocus>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" placeholder="***********" name="password_2" autofocus>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
		<center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text--> 
		</p>
	</form>
</body>
</html>