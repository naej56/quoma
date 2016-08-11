<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="quotation manager">
		<meta name="author" content="Naej">
		<link rel="icon" href="../../favicon.ico">

		<!-- jQuery -->
		<script src="lib/jquery/jquery.min.js"></script>
		<!-- Bootstrap -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<!-- FontAwesome -->
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap custom 
		<link href="css/bootstrap-kowa.css" rel="stylesheet"> -->
		<!-- quoma -->
		<link href="css/quoma.css" rel="stylesheet">
		<!-- kowa 
		<link href="css/kowa.css" rel="stylesheet">  -->

		<title>Quoma</title>

	</head>

	<body>
		<!-- NavBar -->
		<?php include_once 'navBar.php'; ?>
		<!-- /NavBar -->

		<div class="container">
			<?= $content; ?>
		</div><!-- /.container -->
	</body>
</html>
