<?php 
namespace app\database;
use app\database\Database;
use \PDO;

class MysqlDatabase extends Database{
	private $db_name;
	private $db_user;
	private $db_pwd;
	private $db_host;
	private $db;

	public function __construct($db_name, $db_user, $db_pwd, $db_host){
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pwd = $db_pwd;
		$this->db_host = $db_host;
	}

	private function getDb(){
		if ($this->db === null){
			$db = new PDO('mysql:dbname=' . $this->db_name . ';host=' .$this->db_host, $this->db_user, $this->db_pwd);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db = $db;	
		}
		return $this->db;
	}

	public function query($rqte, $class_name = null, $one = false){
		$requete = $this->getDb()->query($rqte);
		if($class_name === null){
			$requete->setFetchMode(PDO::FETCH_OBJ);
		} else {
			$requete->setFetchMode(PDO::FETCH_CLASS, $class_name);
		}
		if($one){
			$data = $requete->fetch();
		} else {
			$data = $requete->fetchAll();
		}
		return $data;
	}

	public function prepare($rqte, $attribues, $className, $one = false){
		$requete = $this->getDb()->prepare($rqte);
		$requete->execute($attribues);
		$requete->setFetchMode(PDO::FETCH_CLASS, $className);
		if($one){
			$data = $requete->fetch();
		} else {
			$data = $requete->fetchAll();	
		}
		return $data;
	}
}

 ?>