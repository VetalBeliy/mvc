<?php
// контролер
Class Controller_AddArticle Extends Controller_Base {
	
	// шаблон
	public $layouts = "admin_layouts";
	
	// экшен
	function index() {

		if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['status'] == '2') {
			
			if (isset($_GET['id'])) {
				$id = $_GET['id'];

				$select = array(
								'where' => "id = $id",
								);
				$model = new Model_Content($select); // создаем объект модели
				$content = $model->getAllRows(); // получаем статью
				
				$this->template->vars('content', $content);			
				$this->template->view('index');
			} else {
				$this->template->view('index');
			}			

		} else {
				echo "<script>document.location.href='/';</script>\n";
			}
	}
	
	function save_article() {

		if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['status'] == '2') {
			if (isset($_POST['add_post'])) {
				if(!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['meta'])) {
					$title = $_POST['title'];
					$content_text = $_POST['text'];
					$meta = $_POST['meta'];
					$category = $_POST['category'];
					$model = new Model_Content(); // создаем объект модели
					$content = $model->getByTitle($title); // получаем статью
					if (!$content) {
						// создаем объект
						$model = new Model_Content();
						// задаем значения для полей таблицы
						$model->title = $title;					
						$model->content_text = $content_text;
						$model->meta = $meta;
						$model->category = $category;
						$result = $model->save(); // создаем запись

						echo "<script>alert('Статья добавлена');</script>\n";
						echo "<script>document.location.href='/admin';</script>\n";
					} else {
						echo "<script>alert('Статья с таким названием уже есть!');</script>\n";
						echo "<script>document.location.href='/addArticle';</script>\n";
					}

				} else {
						echo "<script>alert('Статья не добавлена!');</script>\n";
						echo "<script>document.location.href='/addArticle';</script>\n";
				}
			}
		} else {
				echo "<script>document.location.href='/';</script>\n";
			}	

	}

	function edit_article() {

		if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['status'] == '2') {
			if (isset($_POST['add_post'])) {
				if(!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['meta'])) {
					$title = $_POST['title'];
					$content_text = $_POST['text'];
					$meta = $_POST['meta'];
					$category = $_POST['category'];
					$id = $_POST['id'];

					$select = array(
									'where' => "id = $id",
									);
					$model = new Model_Content($select); // создаем объект модели
					$model->fetchOne();
					$model->title = $title;					
					$model->content_text = $content_text;
					$model->meta = $meta;
					$model->category = $category;
					$result = $model->update();

					echo "<script>alert('Статья отредактирована');</script>\n";
					echo "<script>document.location.href='/admin';</script>\n";
				} else {
					echo "<script>alert('Статья не отредактирована!');</script>\n";
					echo "<script>document.location.href='/addArticle';</script>\n";
				}
			}

		} else {
				echo "<script>document.location.href='/';</script>\n";
			}

	}

	function delete_article() {

		if (isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['status'] == '2') {
			$id = $_GET['id'];

			$model = new Model_Content();
			$select = array('where' => "id = $id",);
			$content = $model->deleteBySelect($select); // получаем статью
			echo "<script>document.location.href='/admin';</script>\n";
		} else {
				echo "<script>document.location.href='/';</script>\n";
			}
	}
}