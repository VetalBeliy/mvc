	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="navbar">
			<ul id="navbar">
				<li><a href="/">Главная</a></li>
				<li><a href="#">Скачать прайс-лист</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="comment">Коментарии</a></li>
			</ul>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-9">
		<div class="content">
			<?php if($content): ?>
				<?php foreach($content as $oneContent): ?>
					<h2><?=$oneContent['title'];?></h2>
					<p><?=$oneContent['content_text'];?></p>
				<?php endforeach; ?>
			<?php else: ?>
				<h2>Статья не найдена</h2>
			<?php endif; ?>
		</div>
	</div>