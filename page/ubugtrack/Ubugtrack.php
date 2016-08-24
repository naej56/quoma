<?php 
use app\classes\UbugtrackApi;
use app\auth\Session;
$session = Session::getInstance();

$title = '';
$description = '';
if(isset($_GET['action'])){
	if($_GET['action'] === 'send'){
		$api = new UbugtrackApi();
		$title = $_POST['title'];
		$user = $session->read('auth');
		$author = $user->name;
		$description = $_POST['description'];
		$description = $api->formatContent($description);
		$body = $author . "\n\r" . $description;
		$response = $api->sendNewTicket($title, $body);
		if($response){
			$response = json_decode($response);
			if($response->success){
				$session->setFlash('success', $response->message);
				App::redirect('index.php?pwd=home');
			} else {
				$session->setFlash('danger', $response->message);
			}
		} else {
			echo "Aie !!";
		}
	}
}

?>


<div class="row quoma-padding-top">
	<div class="col-md-6 col-md-offset-3">
		<form action="index.php?pwd=ubugtrack&action=send" method="POST" class="form-signin">
			<div class="col-md-12">
			<div class="quoma-interligne"></div>
				<div class="form-group">
					<label for="title">Titre de la demande :</label>
					<input type="text" name="title" id="title" class="form-control" placeholder="Titre de la demande." required autofocus value="<?= $title ?>">
				</div>
			</div>
			<div class="col-md-12">
			<div class="quoma-interligne"></div>
				<div class="form-group">
					<label for="description">Description de la demande :</label>
					<textarea rows="8" name="description" id="description" class="form-control" placeholder="Saisissez votre demande ici" style="resize: vertical;" required><?= $description ?></textarea>
				</div>
			</div>
			<div class="col-md-6 col-md-offset-3">
			<div class="quoma-interligne"></div>
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer la demande.</button>
				</div>
			</div>
		</form>
	</div>
</div>
