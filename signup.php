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
			
			<h1 style="font-family:'Anton', sans-serif; color: #7a3b29;" class=" fw-semibold">Sign Up</h1>
		<label for="">Username</label>
		<input type="email" required >
		<label for="">Password</label>
		<input type="password" required>
		<label for="">Confirm Password</label>
		<input type="password" required>
		<label for="">Phone</label>
		<input type="number" required>
		<div class="d-grid gap-2">
  			<button class="btn btn-primary mt-3 btn-block pull-right" type="submit"><i class="fa-solid fa-user-check"></i>Register</button>
  			<a href="index.php" class="btn btn-outline-danger mt-3 btn-block pull-right" type="button">Cancle</a>
		</div>
		</form>
	</div>
</body>

</html>