<?php
session_start();
if(isset($_SESSION['user']))
{
  header("Location: /sdf/index.php");
         die();
}
         $code = "";
         $color = "red";
         if(isset($_GET['code']) && !empty($_GET['code']))
         {
                  switch($_GET['code'])
                  {
                           case 1: $msg = "403 Forbidden! Directly access is denied!";  break;           
                           case 2: $msg = "Connection problem occured with database!"; break;           
                           case 3: $msg = "Email or password is incorrect!"; break;           
                           case 4: $msg = "Successfully logged out!"; $color = "green"; break;           
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

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="doLogin.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>