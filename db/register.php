<?php
         $code = "";
         $color = "red";
         if(isset($_GET['code']) && !empty($_GET['code']))
         {
                  switch($_GET['code'])
                  {
                           case 1: $msg = "403 Forbidden! Directly access is denied!";                                   break;           
                           case 2: $msg = "Passwords don't match!"; break;           
                           case 3: $msg = "Email already in our database!"; break;           
                           case 4: $msg = 'Successfully registered. Now you can log in to your account using <a href="login.php">here</a>!'; $color = "green"; break;  
                           case 5: $msg = "Error occured while registering!"; break;
                  }
         }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="doRegister.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>