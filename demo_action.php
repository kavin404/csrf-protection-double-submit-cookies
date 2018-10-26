<!DOCTYPE html>
<html lang="en">

<head>
	<title>CSRF-Protection Demo Using Double Submit Cookies Pattern</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="jumbotron text-center">
		<h4>CSRF-Protection Demo Using Double Submit Cookies Pattern</h4>
	</div>

	<div class="container">
		<div class="row">

			<h4>Welcome Admin!</h4>

			<form action="result.php" method="POST">
				<button type="submit" class="btn btn-danger">Delete Resource</button>
			</form>
		</div>
	</div>

</body>

</html>
