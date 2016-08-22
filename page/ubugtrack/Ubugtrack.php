<?php 
use app\classes\UbugtrackApi;
use app\auth\Session;
Session::getInstance();
if(isset($_GET['action'])){
	if($_GET['action'] === 'send'){
		$api = new UbugtrackApi();
		$api->getProjectList();
		$title = $_POST['title'];
		//var_dump($title);
		$description = $_POST['description'];
		//var_dump($description);
		$api->sendNewTicket($title, $description);
		
	}
}

?>

<div class="row quoma-padding-top">
	<div class="col-md-6 col-md-offset-3">
		<form action="index.php?pwd=ubugtrack&action=send" method="POST" class="form-signin">
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="title" class="sr-only">Titre de la demande.</label>
					<input type="text" name="title" id="title" class="form-control" placeholder="Titre de la demande." required autofocus>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<label for="description" class="sr-only">Description de la demande</label>
					<textarea cols="80" rows="6" name="description" id="description" class="form-control" placeholder="Saisissez votre demande ici" required></textarea>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer la demande.</button>
				</div>
			</div>
		</form>
	</div>
</div>
