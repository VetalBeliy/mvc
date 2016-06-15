<?php

Class Model_Messages Extends Model_Base {
	
	public $id;
	public $user_id;
	public $message;
	public $images;
	public $created;

	
	public function fieldsTable() {
		return array(
			
			'id' => 'id',
			'user_id' => 'user_id',
			'message' => 'message',
			'images' => 'images',
			'created' => 'created',

		);

	}

	function getMessages(){
		try{
			$db = $this->db;
			$stmt = $db->prepare("SELECT * from $this->table AS m LEFT JOIN users AS u ON(m . user_id = u . user_id)");
			$stmt->execute();
			$row = $stmt->fetchAll();
		}catch(PDOException $e) {
			echo $e->getMessage();
			exit;
		}
		return $row;
	}
}