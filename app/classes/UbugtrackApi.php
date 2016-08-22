<?php 
namespace app\classes;
use stdClass;
use app\auth\Session;

class UbugtrackApi{

	function sendNewTicket($title, $description){
		$session = Session::getInstance();
		$user = $session->read('auth');
		$userApiKey = $user->ubugtrack_user_key;
		$url = "https://ubugtrack.com/api/$userApiKey/project/1/newticket/";
		$ticket = new stdClass();
		$ticket->title = $title;
		$ticket->description = $description;
		$ticket->markdown = true;
		$ticket->status = 0;
		$ticket->priority = 1;
		$ticket->external_id = "";
		$postData = json_encode($ticket);

		var_dump($postData);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($postData))                                                                       
		);      
		$response = curl_exec($ch);
		//$reponse = json_decode($response);
		var_dump($response);
	}

	function getProjectList(){
		$session = Session::getInstance();
		$user = $session->read('auth');
		$userApiKey = $user->ubugtrack_user_key;
		$url = "https://ubugtrack.com/api/$userApiKey/projects/";
		var_dump($url);
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$result = json_decode($response);
		var_dump($response);
		if ($result->success)
		{
			foreach ($result->projects as $project)
				echo $project->id.' - '.$project->name;
		}
	}

}


 ?>