<?php
// контролер
Class Controller_Register Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {

		$this->template->view('index');

	}
	
	function register() {

		if (isset($_POST['reg'])) {
	    	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
	    		$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$model = new Model_Users(); // создаем объект модели
				$content = $model->getByEmail($email); // получаем пользователя
				if (!$content) {
					// создаем объект
					$model = new Model_Users();
					// задаем значения для полей таблицы
					$model->name = $name;
					$model->email = $email;
					$model->password = md5($password);
					$result = $model->save(); // создаем запись

					$_SESSION['email'] =  $email;
					$_SESSION['password'] =  $password;
					echo "<script>alert('Регистрация прошла успешно');</script>\n";
					echo "<script>document.location.href='/';</script>\n";
				} else {
					echo "<script>alert('На это имя уже зарегестрирован пользователь!');</script>\n";
					echo "<script>document.location.href='/register';</script>\n";
				}

			} else {
					echo "<script>alert('Регистрация не удалась!');</script>\n";
					echo "<script>document.location.href='/register';</script>\n";
			}
		}

	}
}