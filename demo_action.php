<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

 	<?php include 'common.php'; ?>
	<div class="container">
		<div class="row">

			<h4>Welcome Admin!</h4>

			<form action="result.php" method="POST">
				<input type="hidden" name="csrfToken" value="token">
				<div class="form-group">
					<label for="resource_name">Resource Name</label> 
					<input type="text" name="resource_name" value="Resource one">
				</div> 
				<button type="submit" class="btn btn-danger">Delete Resource</button>
			</form>
		</div>
	</div>

</body>

</html>
