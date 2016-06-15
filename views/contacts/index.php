<h1>Контакты</h1>
<div class="phone">
	<h1>Связатся с нами можно по телефону</h1>
	<p>(095)000-00-00</p>
	<p>(093)000-00-00</p>
	<p>(097)000-00-00</p>
</div>
<div class="contact_form">
	<h1>Или написать на электронную почту</h1>
	<form name="contact_form" onsubmit="return validateContact()" action="" method="post">
	<div class="form-group">
		<p><input class="form-control" type="text" name="name" placeholder="Ваше имя"></p>
		<span style="color:red" id="namef"></span></label></p>
	</div>
	<div class="form-group">
		<p><input class="form-control" type="text" name="email" placeholder="Ваш Email"></p>
		<span style="color:red" id="emailf"></span></label></p>
	</div>
	<div class="form-group">
		<p><textarea class="form-control" name="text_message" id="text_message" cols="30" rows="10" placeholder="Текст сообщения"></textarea></p>
		<span style="color:red" id="text_messagef"></span></label></p>
	</div>
		<p><input class="btn btn-primary" id="log" name= "log" type="submit" value="Опубликовать">
		<input class="btn btn-info" type="reset" value="Отменить"></p>
	</form>
</div>