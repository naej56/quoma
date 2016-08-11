<?php 
namespace app\entity;
use app\entity\Entity;

class UserEntity  extends Entity{
	
	protected $id;
	protected $name;
	protected $first_name;
	protected $phone;
	protected $cellphone;
	protected $mail;
	protected $login;
	protected $password;

	/*public function __construct(){
		var_dump($this);
		var_dump($this->password);
	}*/

	/*
	Getter
	 */
	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getFirst_name(){
		return $this->first_name;
	}
	public function getPhone(){
		return $this->phone;
	}
	public function getCellphone(){
		return $this->cellphone;
	}
	public function getMail(){
		return $this->mail;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getPassword(){
		return $this->password;
	}


}

