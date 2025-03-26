<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<?php
	 include "links.php" ?>
</head>
<body>
	<header>
	<div class="container center-div shadow ">
		<div class="container row ">
			<h2>Admin Login Page</h2>
			<div class="admin-form shadow p-2">
				<form action="logincheck.php" method="POST" name="login" >
					<div class="form-group">
						<label for="username">Email</label>
						<input type="text" name="user" value="" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="pass" value="" class="form-control" autocomplete="off">
					</div>
					<input type="submit" value="Login" class="btn btn-secondary" name="submit" style="background-color: #80609c">
					
				</form>
			</div>
		</div>
	</div>
	</header>

</body>
</html>