<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pointofSale</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include ("cdn.php");?>
	<style type="text/css">
		body{
			background: #c8c1aa;
			margin: 0;
		}
	</style>
</head>
<body>

	<div>
		<form>
			<img src="img/pos.png" class="img-fluid" width="180px" >
			<h1 style="font-family:'Anton', sans-serif; color: #7a3b29;" class=" fw-semibold">Point of Sale</h1>
		<label for="">Username</label>
		<input type="email" required >
		<label for="">Password</label>
		<input type="password" required>
		<div class="d-grid gap-2">
  			<button class="btn btn-outline-primary mt-3 loginbtn btn-block pull-right"><i class="fa-solid fa-person-walking-arrow-right"></i>Login</button>
		</div>
		<p class="signup">New user? <a href="signup.php">Sign up</a></p></button>
	</div>
	

</body>
</html>