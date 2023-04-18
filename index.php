<?php


?>

<!DOCTYPE html>

<html>

<head>
	<style>
		body {
			background-image: url(images/9.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			object-fit: cover;
		}

		form {
			background-color: #cd853f;
		}
	</style>
	<title>Street Food Management System</title>
	<!-- <link rel="stylesheet" type="text/css" href="w3.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>



	<div class="container my-5 d-flex justify-content-center">
		<form method="POST" action="router.php" class="w-30 p-3 mb-2 opacity-75 text-white">
			<h1>Login to the System</h1>
			<div class="mb-3">
				<label class="form-label">Username</label>
				<input type="text" class="form-control" required="" placeholder="Username">
			</div>

			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" required="" placeholder="Password">
			</div>
			<div class="mb-3">
				<select class="form-select" aria-label="Default select example" required="">
					<option value="" disabled selected>User Type</option>
					<option value="Customer">Customer</option>
					<option value="Vendor">Vendor</option>
					<option value="Delivery_boy">Delivery boy</option>
					<option value="Administrator">Administrator</option>
				</select>
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-light" name="login_user">Login</button>
				<a class="text-decoration-none link-primary mx-5" href="register.php">Create an account!</a></p>

			</div>

			<a class="text-decoration-none link-danger" href="reset.php">Reset Password</a>

	</div>


	</form>




</body>

</html>