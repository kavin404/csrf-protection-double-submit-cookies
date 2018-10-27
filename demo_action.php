<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<body>

 	<?php include 'common.php';?>

	<script>
		$(function() {
			// Get the csrf token from the cookie
			const token = getCookie('tokenID');
			console.log(token);
			// 3) Add a new hidden field that has the value of the received CSRF token
			document.getElementById('csrfToken').value = token;
		});
		/***
			This function gets the value from cookie
			Taken from https://www.w3schools.com/js/js_cookies.asp
		 */
		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}
	</script>

	
	<div class="container">
		<div class="row">

			<h4>Welcome Admin!</h4>

			<form action="result.php" method="POST">
				<input type="hidden" name="csrfToken" id="csrfToken" value="token">
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
