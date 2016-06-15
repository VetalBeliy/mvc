<?php
// контролер
Class Controller_Admin Extends Controller_Base {
	
	// шаблон
	public $layouts = "admin_layouts";
	
	// экшен
	public function index() {

		if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['status'] == '2') {
			$select = array(
							'order' => "id DESC",
							);
			$model = new Model_Content($select); // создаем объект модели
			$content = $model->getAllRows(); // получаем статью

			$model = new Model_Messages($select); // создаем объект модели
			$comment = $model->getMessages(); // получаем коментарии
			
			$this->template->vars('comment', $comment);
			$this->template->vars('content', $content);
			$this->template->view('index');
		} else {
				echo "<script>document.location.href='/';</script>\n";
			}		

	}

}