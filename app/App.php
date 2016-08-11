<?php 
use app\database\MysqlDatabase;
use app\auth\Auth;
use app\auth\Session;


class App{

	public static function load(){
		require ROOT . '/app/Autoloader.php';
		app\Autoloader::register();
	}

	public static function getInstance()
	{
		if(is_null(self::$_instance)){
			self::$_instance = new App();
		}
		return self::$_instance;
	}

	public function getDb()
	{
		$param = Config::getInstance(ROOT . '/config/param.php');
		if(is_null($this->db_instance)){
			$this->db_instance = new MysqlDatabase($param->get('db_name'), $param->get('db_user'), $param->get('dn_pass'), $param->get('db_host'));	
		}
		return $this->db_instance;
	}

	static function getAuth(){
		return new Auth(Session::getInstance());
	}

	static function redirect($page){
		header("Location: $page");
	}



}


 ?>