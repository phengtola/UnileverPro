<?php 
	class DtoOutletTypes {
		private $id;
		private $name;
		private $description;
		private $created_date;
		private $created_by;
		private $updated_date;
		private $status;
		private $deleted_at;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getCreated_date(){
		return $this->created_date;
	}

	public function setCreated_date($created_date){
		$this->created_date = $created_date;
	}

	public function getCreated_by(){
		return $this->created_by;
	}

	public function setCreated_by($created_by){
		$this->created_by = $created_by;
	}

	public function getUpdated_date(){
		return $this->updated_date;
	}

	public function setUpdated_date($updated_date){
		$this->updated_date = $updated_date;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getDeleted_at(){
		return $this->deleted_at;
	}

	public function setDeleted_at($deleted_at){
		$this->deleted_at = $deleted_at;
	}

	}

?>