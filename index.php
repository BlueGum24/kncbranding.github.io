
<!-- Include Header -->
<?php include 'includes/header.php'; ?>



<!-- Include Pages -->
<?php 
	if (isset($_GET['home'])) {
		include 'includes/home.php';
	} elseif (isset($_GET['services'])) {
		include 'includes/services.php';
	} elseif (isset($_GET['gallery'])) {
		include 'includes/gallery.php';
	} elseif (isset($_GET['contact'])) {
		include 'includes/contact.php';
	} elseif (isset($_GET['services2'])) {
		include 'includes/services2.php';
	} else {
		include 'includes/home.php';
	}
?>


<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Include Footer -->
<?php include 'includes/footer.php' ?>