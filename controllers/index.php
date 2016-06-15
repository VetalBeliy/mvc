<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {

		$select = array(
						'where' => "category = 1",
						);
		$model = new Model_Content($select); // создаем объект модели
		$content = $model->getAllRows(); // получаем статью
		
		$this->template->vars('content', $content);
		$this->template->view('index');

	}
	
}