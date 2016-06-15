<?php

Class Model_Content Extends Model_Base {
	
	public $id;
	public $title;
	public $content_text;
	public $category;
	public $meta;
	
	public function fieldsTable(){
		return array(
			
			'id' => 'id',
			'title' => 'title',
			'content_text' => 'content_text',
			'category' => 'category',
			'meta' => 'meta',

		);
	}

	public function getByTitle($title){
		try{
			$db = $this->db;
			$stmt = $db->prepare("SELECT * from $this->table WHERE title = :title");
			$stmt->execute(array('title' => $title));
			$row = $stmt->fetchAll();
		}catch(PDOException $e) {
			echo $e->getMessage();
			exit;
		}
		return $row;
	}
	
}