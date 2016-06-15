	<h1>Авторизация</h1>
	<form name="email_form" onsubmit="return validateLogin()" action="login/login" method="post">
		<div class="form-group">
			<p><input class="form-control" type="text" name="email" placeholder="Ваш Email"></p>
			<span style="color:red" id="emailf"></span></label></p>
		</div>
		<div class="form-group">
			<p><input class="form-control" type="password" name="password" placeholder="Ведите пароль"></p>
			<span style="color:red" id="passwordf"></span></label></p>
		</div>
		<p><input class="btn btn-primary" id="log" name= "log" type="submit" value="Войти">
		<input class="btn btn-info" type="reset" value="Отменить"></p>
	</form>