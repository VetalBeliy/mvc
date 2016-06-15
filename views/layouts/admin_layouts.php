<!Doctype html>
<html lang="ru">

<head>
	<meta charset="utf-8"/>
	<title>Панель администратора</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin">Админка</a></h1>
			<h2 class="section_title">Панель инструментов</h2><div class="btn_view_site"><a href="../">На сайт</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Виталий (<a href="#">3 сообщения</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin">админка</a> <div class="breadcrumb_divider"></div> <a class="current">Панель приборов</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Поиск" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Контент</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="addArticle">Добавить статью</a></li>
			<li class="icn_edit_article"><a href="#">Редактировать статью</a></li>
		</ul>
		<h3>Пользователи</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#">Добавить пользователя</a></li>
			<li class="icn_view_users"><a href="#">Все пользователи</a></li>
			<li class="icn_profile"><a href="#">Ваш профиль</a></li>
		</ul>
		<h3>Медиа</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">Файловый менеджер</a></li>
			<li class="icn_photo"><a href="#">Галерея</a></li>
			<li class="icn_audio"><a href="#">Аудио</a></li>
			<li class="icn_video"><a href="#">Видео</a></li>
		</ul>
		<h3>Админ</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Настройки</a></li>
			<li class="icn_security"><a href="#">Защита</a></li>
			<li class="icn_jump_back"><a href="login/logout">Выход</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>&copy; 2016 Админка</strong></p>
		</footer>
	</aside><!-- end of sidebar -->
	
		<section id="main" class="column">
		<div class="box">
			<?php
				include ($contentPage);
			?>
		</div>
		<div class="spacer"></div>
	</section>
</body>
</html>