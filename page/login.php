<?php 
use app\auth\Session;
$auth = App::getAuth();

Session::getInstance();

if(!empty($_POST['login']) && !empty($_POST['password'])){
	$user = $auth->login($_POST['login'], $_POST['password']);
	$session = Session::getInstance();
	if($user){
		$session->setFalsh('success', "Bienvenu $user->first_name !");
		App::redirect('index.php?pwd=home');
	}
}

?>

<div class="row quoma-padding-top">
	<div class="col-md-6 col-md-offset-3">
		<form action="" method="POST" class="form-signin">
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

