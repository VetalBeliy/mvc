<?php
// контролер
Class Controller_Contacts Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {

		$this->template->view('index');
	}
	
}