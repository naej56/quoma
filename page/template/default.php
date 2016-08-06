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
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php?pwd=home"><strong><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>  Quoma</strong></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-list fa-2x" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.php?pwd=quotation"><strong><i class="fa fa-list fa-w" aria-hidden="true"></i>   Devis</strong></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-pencil-square-o fa-w" aria-hidden="true"></i>   Céer</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-search fa-w" aria-hidden="true"></i>   Chercher</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-file-text fa-2x" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><strong><i class="fa fa-file-text fa-w" aria-hidden="true"></i>   Facture</strong></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-pencil-square fa-w" aria-hidden="true"></i>   Facturer</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-search fa-w" aria-hidden="true"></i>   Chercher</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user fa-2x" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.php?pwd=customer"><strong><i class="fa fa-user fa-w" aria-hidden="true"></i>   Clients</strong></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-user-plus fa-w" aria-hidden="true"></i>   Nouveau</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-search fa-w" aria-hidden="true"></i>   Chercher</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-folder-open fa-2x" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><strong><i class="fa fa-folder-open fa-w" aria-hidden="true"></i>   Administratif</strong></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-credit-card-alt fa-w" aria-hidden="true"></i>   Réglement</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-institution fa-w" aria-hidden="true"></i>   Remise en banque</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-gear fa-w fa-spin" aria-hidden="true"></i>   Paramètres</a></li>
							</ul>
						</li>
					</ul>
					<p></p>
					<form class="navbar-form navbar-right">
						<form class="form-inline">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Recherche">
									<div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
									<div class="input-group-addon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
								</div>
							</div>
						</form>
					</form>
				</div>
			</div>
		</nav>

		<div class="container">
			<?= $content; ?>
		</div><!-- /.container -->
	</body>
</html>
