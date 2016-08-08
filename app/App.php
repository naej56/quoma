<?php 
use app\database\MysqlDatabase;


class App{

	public static function load(){
		session_start();
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

}


 ?>