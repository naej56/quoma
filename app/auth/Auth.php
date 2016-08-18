<?php 
namespace app\auth;
use App;
use app\database\MysqlDatabase;

class Auth {

	private $session;

	public function __construct($session){
		$this->session = $session;
	}

	public function login($username, $password){
		$user = App::getInstance()->getTable('user')->query('SELECT * FROM t_user WHERE (login = :username OR mail = :username)', ['username' => $username], true);
		if($user){
			if(password_verify($password, $user->password)){
				$this->connect($user);
				return $user;
			}
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

