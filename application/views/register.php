<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<form action="<?= base_url("login/do_register") ?>" method="POST" class="card card-body shadow"
	  style="max-width: 500px">
	<h1 class="text-center">Register</h1>
	<div class="form-group mb-3">
		<label for="username" class="form-label">Username</label>
		<input type="text" name="username" class="form-control" id="username" placeholder="username">
	</div>
	<div class="form-group mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="password">
	</div>
	<button type="submit" class="btn btn-block btn-primary">
		Register
	</button>
</form>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>

</body>
</html>
