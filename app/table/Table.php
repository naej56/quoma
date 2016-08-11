<?php 
namespace app\table;


class Table {

	protected $table;

	public function __construct(\app\database\Database $db){
		$this->db =$db;
		if(is_null($this->table)){
			$expl = explode('\\', get_class($this));
			$className = end($expl);
			$this->tableName = strtolower(str_replace('Table', '', $className));
		}
	}

	public function query($stmt, $attr = null, $one = false){
		if($attr){
			$entity = str_replace('Table', 'Entity', get_class($this));
			$entity = str_replace('table', 'entity', $entity);
			return $this->db->prepare(
				$stmt, 
				$attr,
				$entity, 
				$one
			);
		} else {
			$entity = str_replace('Table', 'Entity', get_class($this));
			$entity = str_replace('table', 'entity', $entity);
			return $this->db->query(
				$stmt,
				$entity, 
				$one
			);
		}
	}
}

