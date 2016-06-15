<div class="comment-preview">
<?php if($content): ?>
	<?php foreach($content as $oneContent): ?>
		<div class="comment-preview">
			<?php if (!empty($oneContent['name'])): ?>
				<p><i>Пользователь: </i><b><?=$oneContent['name'];?></b></p>
			<?php else: ?>
					<p><i>Пользователь: </i><b>Гость</b></p>  <!--имя-->
				<?php endif; ?>
			<p><?=$oneContent['message'];?></p>
			<?php if (!empty($oneContent['images'])): ?>
			<p><img src="<?=$oneContent['images'];?>" alt="logo" width="10%" height="10%"></p>
			<?php endif ?>
			<p><?=$oneContent['created'];?></p>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<h2>Коментариев пока нет</h2>
<?php endif; ?>

	<div class="container_comment">
		<h1>Оставить коментарий</h1>
		<!--Форма для отправки коментария-->
		<form action="comment/massage" onsubmit="return validateComment()" id="commentform" method="post" name="commentform" enctype="multipart/form-data">
		<div class="form-group">
			<p><label for="comment_text">Коментарий<br>
			<textarea class="form-control" name="comment_text" id="comment_text" cols="30" rows="10"></textarea>
			<span style="color:red" id="comment_textf"></span></label></p>
		</div>
			<p>Загрузить изображение<br><input type="file" name="image" value="loadImage"></p>
			<div class="g-recaptcha" data-sitekey="6LeEMCITAAAAADfQnJrzSqUao4C_EY39h7DjasSW">Подтвердите что Вы не робот</div> <!--Защита от роботов-->
			<p><input class="btn btn-primary" id="comment" name= "comment" type="submit" value="Опубликовать">
			<input class="btn btn-info" type="reset" value="Отменить"></p>
		</form>
	</div>