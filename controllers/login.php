<?php
// контролер
Class Controller_Login Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {

		$this->template->view('index');

	}

	function login() {

		if (isset($_POST['log'])) {
	    	if(!empty($_POST['email']) && !empty($_POST['password'])) {
				$email = $_POST['email'];
				$password = md5($_POST['password']);
				$model = new Model_Users(); // создаем объект модели
				$content = $model->getByEmailPass($email,$password); // получаем пользователя
				if ($content) {

					$_SESSION['email'] =  $email;
					$_SESSION['password'] =  $password;
					foreach ($content as $oneContent) {
						$_SESSION['status'] =  $oneContent['status'];
					}
					
					echo "<script>alert('Авторизация прошла успешно');</script>\n";
					echo "<script>document.location.href='/';</script>\n";
				} else {
					echo "<script>alert('Не верно email или пароль!');</script>\n";
					echo "<script>document.location.href='/login';</script>\n";
				}

			} else {
					echo "<script>alert('Не все поля заполнены!');</script>\n";
					echo "<script>document.location.href='/login';</script>\n";
			}

		}
	}

	function logout() {

		unset($_SESSION['email']); // разрегистрировали переменную
		unset($_SESSION['password']);
		session_destroy(); // разрушаем сессию
		echo "<script>document.location.href='/';</script>\n";

	}
	
}