<?php 
use app\auth\Session;
$auth = App::getAuth();

Session::getInstance();

if(isset($_GET['action'])){
	if($_GET['action'] === 'login'){
		if(!empty($_POST['login']) && !empty($_POST['password'])){
			$user = $auth->login($_POST['login'], $_POST['password']);
			$session = Session::getInstance();
			var_dump($_SESSION['auth']);
			if($user){
				var_dump($_SESSION['auth']);
				$session->setFalsh('success', "Bienvenue !");
				App::redirect('index.php?pwd=home');
			} else {
				$session->setFalsh('danger', "Utilisateur ou mot de passe incorrect.");
				var_dump($_SESSION['flash']);
			}
		}
	} elseif($_GET['action'] === 'logout'){
		$session = Session::getInstance();
		$session->delete('auth');
		App::redirect('index.php?pwd=login');
	}
}

?>

<div class="row quoma-padding-top">
	<div class="col-md-6 col-md-offset-3">
		<form action="index.php?action=login" method="POST" class="form-signin">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="inputEmail" class="sr-only">Utilisateur ou adresse mail</label>
					<input type="text" name="login" id="inputEmail" class="form-control" placeholder="Utilisateur ou adresse mail" required autofocus>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Se souvenir de moi
						</label>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Se connecter</button>
				</div>
			</div>
		</form>
	</div>
</div>

