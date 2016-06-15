<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авто</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="/js/valid.js"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

</head>
<body>

<div class="container_content">
	<div class="header">
		<a href="/" title="Главная страница"><img id="logo" width="100%" src="images/avto.jpg" alt="логотип автосвет"></a>
	</div>
	<div class="navbar_top">
		<ul id="navbar_top">
			<li><a href="/">Главная</a></li>
			<li><a href="product">Продукция</a></li>
			<li><a href="contacts">Контакты</a></li>
			<?php if (isset($_SESSION['email']) && isset($_SESSION['password'])) : ?>
			<li><a href="login/logout" class="logout">Выход</a></li>
			<?php else : ?>
			<li><a href="register">Регистрация</a></li>
			<li><a href="login">Вход</a></li>
			<?php endif; ?>
		</ul>
	</div>
		<div class="box">
			<?php
				include ($contentPage);
			?>
		</div>
		<footer>
		<div class="col-md-12">
			<div class="footer">
				© 2016
			</div>
		</div>
	</footer>
</div>
</body>
</html>