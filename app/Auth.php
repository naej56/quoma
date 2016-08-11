<?php 
namespace app;

class Auth {

	public static function isAuth(){
		if (isset($_SESSION['auth'])){
			return true;
		} else {
			return false;
		}
	}


}

