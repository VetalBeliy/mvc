<?php
// контролер
Class Controller_Product  Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {
		$select = array(
						'where' => "category = 2",
						'order' => 'created DESC' // сортируем
						);
		$model = new Model_Content($select); // создаем объект модели
		$content = $model->getAllRows(); // получаем статью
		
		$this->template->vars('content', $content);
		$this->template->view('index');
	}
	
}