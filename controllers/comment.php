<?php
// контролер
Class Controller_Comment Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {

		$select = array(
						'order' => "id DESC",
						);
		$model = new Model_Messages($select); // создаем объект модели
		$content = $model->getMessages(); // получаем коментарии
		
		$this->template->vars('content', $content);
		$this->template->view('index');

	}
	
	function massage() {

		if (isset($_POST["comment"])) {
			
			//Записываем значения полей из формы в переменные если поля заполнены
			if (!empty($_POST['comment_text']) && !empty($_POST['g-recaptcha-response'])) {
				$message = $_POST['comment_text'];
				$captcha = $_POST['g-recaptcha-response'];
				$size = $_FILES['image']['size'];
				$type = $_FILES['image']['type'];
				$name = $_FILES['image']['name'];
				//проверка защиты от роботов
				$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeEMCITAAAAABwhR8F0bJ5biLvq4EAr0WjkLuPp-QxeRCthR&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

				if (isset($_SESSION['email'])) {
					$email = $_SESSION['email'];
					$model = new Model_Users();
					$user = $model->getByEmail($email);					
				}

				// создаем объект
				$model = new Model_Messages();
				// задаем значения для полей таблицы
				$model->message = $message;

				//если изображение передано
				if (is_uploaded_file($_FILES['image']['tmp_name'])) {
					//проверка файла изображения
						if (preg_match("/$[^\.]+\.(?:php|html|phtml)\$/i", $name))  exit;
						if (($type != "image/jpg") && ($type != "image/jpeg") && ($type != "image/png") && ($type != "image/gif")) exit;
						if ($size > 4096000) exit;

					//Записываем изображение в папку
					$image = uniqid();
					$filename = end(explode(".", $name));
					$upload = "images/".$image.".".$filename;
					move_uploaded_file($_FILES['image']['tmp_name'], $upload);
					$model->images = $upload;

				}	

					if (isset($_SESSION['email'])) {
					foreach ($user as $value) {
						$model->user_id = $value['user_id'];
					}					
				}				

					$result = $model->save(); // создаем запись

					echo "<script>alert('Коментарий добавлен');</script>\n";
					echo "<script>document.location.href='/comment';</script>\n";

			} else {
				echo "<script>alert('Коментарий не добавлен');</script>\n";
				echo "<script>document.location.href='/comment';</script>\n";
			}

		}

						
	}

	function delete_comment(){


		$id = $_GET['id'];

		$model = new Model_Messages();
		$select = array('where' => "id = $id",);
		$content = $model->deleteBySelect($select); // получаем статью
		echo "<script>document.location.href='/admin';</script>\n";

	}
}