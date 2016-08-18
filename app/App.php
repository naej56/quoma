<?php 
use app\database\MysqlDatabase;
use app\auth\Auth;
use app\auth\Session;
use app\Config;


class App{

	private static $_instance;
	private $db_instance;

	/**********************************
	Focntion relative à l'application
	**********************************/
	
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

	/**************************
	Focntion relative à la bdd
	**************************/
	/**
	 * @return object
	 */
	public function getDb(){
		$param = Config::getInstance(ROOT . '/app/config/param.php');
		if(is_null($this->db_instance)){
			$this->db_instance = new MysqlDatabase($param->get('db_name'), $param->get('db_user'), $param->get('db_pass'), $param->get('db_host'));	
		}
		return $this->db_instance;
	}

	/**
	 * @param  string
	 * @return object
	 */
	public function getTable($name){
		$classeName = '\\app\\table\\' . ucfirst($name) . 'Table';
		return new $classeName($this->getDb());
	}

	/**************************************
	Fonction relative à l'authentification
	**************************************/

	static function getAuth(){
		return new Auth(Session::getInstance());
	}

	static function redirect($page){
		header("Location: $page");
	}



}


 ?>