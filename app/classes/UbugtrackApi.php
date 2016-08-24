<?php 
namespace app\classes;
use stdClass;
use app\auth\Session;

class UbugtrackApi{

	function sendNewTicket($title, $description){
		$session = Session::getInstance();
		$user = $session->read('auth');
		$userApiKey = $user->ubugtrack_user_key;
		$url = "https://ubugtrack.com/api/$userApiKey/project/751/newticket/";
		$ticket = new stdClass();
		$ticket->title = $title;
		$ticket->description = $description;
		$ticket->markdown = true;
		$ticket->status = 0;
		$ticket->priority = 0;
		$ticket->external_id = "";
		$postData = json_encode($ticket);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($postData))                                                                       
		);      
		$response = curl_exec($ch);
		return $response;
	}

	function formatContent($content){
		$content = str_replace("\n", "\n\r", $content);
		return $content;
	}

}


 ?>