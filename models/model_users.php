<?php

Class Model_Users Extends Model_Base {
	
	public $id;
	public $name;
	public $email;
	public $password;
	public $status;

	
	public function fieldsTable() {
		return array(
			
			'id' => 'id',
			'name' => 'name',
			'email' => 'email',
			'password' => 'password',
			'status' => 'status',

		);

	}
}