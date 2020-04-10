
<!DOCTYPE html>
<html>
<head>
  <title>Log-in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">
  	<h2>Already a student?
	 <u> Login!</u>
	</h2>
  </div>
	 
  <form method="post" action="home.php">

  	<div class="input-group">
  		<input type="text" name="username" placeholder="Username">
  	</div>

  	<div class="input-group">
  		<input type="password" name="password" placeholder="Password">
  	</div>
	<input type="checkbox" checked="checked"> Remember me?
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button></br>
	</div>	
	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
