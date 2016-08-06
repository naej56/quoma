<?php 
class App{

	public static function load(){
		session_start();
		require ROOT . '/app/Autoloader.php';
		app\Autoloader::register();
	}
}


 ?>