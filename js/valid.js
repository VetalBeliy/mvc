function validateRegister() {

	//Значения полей заносятся в переменные
	var x = document.forms["email_form"]["name"].value;
	var y = document.forms["email_form"]["email"].value;
	var z = document.forms["email_form"]["password"].value;

		if (x.length==0) {
			document.getElementById("namef").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'имя' пустое - выводится сообщение

		if (y.length==0) {
			document.getElementById("emailf").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'email' пустое - выводится сообщение

		if (z.length==0) {
			document.getElementById("passwordf").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'коментарии' пустое - выводится сообщение

	at = y.indexOf("@");
	dot = y.indexOf(".");
		if (at<1 || dot<1) {
			document.getElementById("emailf").innerHTML="*email введён неверно";
		return false;
		}  //Проверяется поле 'email' на правильность заполнения

		if(/^[a-zA-Z0-9-_\.]{3,20}$/.test(z) === false) {
			document.getElementById("passwordf").innerHTML="*Пароль должен содержать буквы или цифры, не меньше 4х символов";
		return false;
		}

}

function validateComment() {

	//Значения полей заносятся в переменные
	var x = document.forms["commentform"]["comment_text"].value;

		if (x.length==0) {
			document.getElementById("comment_textf").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'имя' пустое - выводится сообщение

}

function validateLogin() {

	//Значения полей заносятся в переменные
	var x = document.forms["email_form"]["email"].value;
	var y = document.forms["email_form"]["password"].value;

		if (x.length==0) {
			document.getElementById("emailf").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'имя' пустое - выводится сообщение

		if (y.length==0) {
			document.getElementById("passwordf").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'имя' пустое - выводится сообщение

		at = x.indexOf("@");
	dot = x.indexOf(".");
		if (at<1 || dot<1) {
			document.getElementById("emailf").innerHTML="*email введён неверно";
		return false;
		}  //Проверяется поле 'email' на правильность заполнения

		if(/^[a-zA-Z0-9-_\.]{3,20}$/.test(y) === false) {
			document.getElementById("passwordf").innerHTML="*Пароль должен содержать буквы или цифры, не меньше 4х символов";
		return false;
		}

}

function validateContact() {

	//Значения полей заносятся в переменные
	var x = document.forms["contact_form"]["name"].value;
	var y = document.forms["contact_form"]["email"].value;
	var z = document.forms["contact_form"]["text_message"].value;

		if (x.length==0) {
			document.getElementById("namef").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'имя' пустое - выводится сообщение

		if (y.length==0) {
			document.getElementById("emailf").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'email' пустое - выводится сообщение

		if (z.length==0) {
			document.getElementById("text_messagef").innerHTML="*данное поле обязательно для заполнения";
		return false;
		}  //Если поле 'коментарии' пустое - выводится сообщение

	at = y.indexOf("@");
	dot = y.indexOf(".");
		if (at<1 || dot<1) {
			document.getElementById("emailf").innerHTML="*email введён неверно";
		return false;
		}  //Проверяется поле 'email' на правильность заполнения

}