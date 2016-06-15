<div class="register_form">
	<h1>Регистрация</h1>
	<form name="email_form" onsubmit="return validateRegister()" action="register/register" method="post">
		<div class="form-group">
			<p><input class="form-control" type="text" name="name" placeholder="Ваше имя">
			<span style="color:red" id="namef"></span></p>
		</div>
		<div class="form-group">
			<p><input class="form-control" type="email" name="email" placeholder="Ваш Email">
			<span style="color:red" id="emailf"></span></p>
		</div>
		<div class="form-group">
			<p><input class="form-control" type="password" name="password" placeholder="Ведите пароль"><span style="color:red" id="passwordf"></span></p>
		</div>
		<p><input class="btn btn-primary" id="reg" name= "reg" type="submit" value="Регистрация">
		<input class="btn btn-info" type="reset" value="Отменить"></p>
	</form>
</div>