<?php
    if (isset($_POST['resource_name']) && isset($_POST['csrfToken'])) {
        $resource = $_POST['resource_name'];
        $valid_request = false;
        if(isset($_COOKIE['tokenID'])){
            if($_COOKIE['tokenID'] == $_POST['csrfToken']){
                $$valid_request = true;
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<script>
</script>

<body>

    <?php include 'common.php';?>
	<div class="container">
		<div class="row">
            <?php
                if ($valid_request) {
                    echo '<p> Successfully Deleted </p>';
                } else {
                    echo '<p> Failed to delete resource </p>';
                }
            ?>
		</div>
	</div>

</body>

</html>