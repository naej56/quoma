<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="quotation manager">
		<meta name="author" content="Naej">
		<!-- Favicon -->
		<link rel="shortcut icon" href="../public/css/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../public/css/favicon/favicon.png" type="image/png">
		<link rel="icon" sizes="32x32" href="../public/css/favicon/favicon-32.png" type="image/png">
		<link rel="icon" sizes="64x64" href="../public/css/favicon/favicon-64.png" type="image/png">
		<link rel="icon" sizes="96x96" href="../public/css/favicon/favicon-96.png" type="image/png">
		<link rel="icon" sizes="196x196" href="../public/css/favicon/favicon-196.png" type="image/png">
		<link rel="apple-touch-icon" sizes="152x152" href="../public/css/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../public/css/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../public/css/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../public/css/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../public/css/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../public/css/favicon/apple-touch-icon-144x144.png">
		<meta name="msapplication-TileImage" content="../public/css/favicon/favicon-144.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">


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
		<link href="css/bootstarp-black-and-green.min.css" rel="stylesheet"> -->

		<title>Quoma</title>

	</head>

	<body>
		<!-- NavBar -->
		<?php include_once 'navBar.php'; ?>

		<!-- Contener -->
		<div class="container">

			<!-- Affichage des messages flash -->
			<?php use app\auth\Session; ?>
			<?php if(Session::getInstance()->hasFlash()): ?>
	   		    <?php foreach(Session::getInstance()->getFlash() as $type => $message): ?>
	   		        <div class="alert alert-<?= $type; ?>">
	   		            <?= $message; ?>
	   		        </div>
	   		    <?php endforeach; ?>
	   		<?php endif; ?>
	   		

	   		<!-- Affichage du corps de la page -->
			<?= $content; ?>
		</div>
	</body>
</html>
