<?php 
use app\auth\Auth;

 ?>

 <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php?pwd=home"><strong><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>  Quoma</strong></a>
				</div>
				<div class="collapse navbar-collapse">
					<?php if (Auth::isAuth()): ?>
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
					<?php endif; ?>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-home fa-2x" aria-hidden="true"></i>
							</a>
							<?php if (Auth::isAuth()): ?>
							<ul class="dropdown-menu">
								<li><a href="#"><strong><i class="fa fa-child fa-w" aria-hidden="true"></i> Mon compte</strong></a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-gear fa-w fa-spin" aria-hidden="true"></i>   Paramètres</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-sign-out fa-w" aria-hidden="true"></i> Me déconnecter</a></li>
							</ul>
							<?php else: ?>
							<ul class="dropdown-menu">
								<li><a href="#"><strong><i class="fa fa-at fa-w fa-spin" aria-hidden="true"></i> Contacter l'administrateur</strong></a></li>
							</ul>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>