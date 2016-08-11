<?php 
namespace app\auth;
use app\database\MysqlDatabase;

class Auth {

	private $session;

	public function __construct($session){
		$this->session = $session;
	}

	public function login($username, $password){
		$user = MysqlDatabase->query('SELECT * FROM user WHERE (login = :username OR email = :username)', ['username' => $username]);
		if($password === $user->password){
			$this->connect($user);
			return $user;
		} else {
			return false;
		}

	}

	public function connect($user){
		$this->session->write('auth', $user);
	}

	static function isAuth(){
		if(!isset($_SESSION['auth'])){
			return false;
		}
		return true;
	}


}

