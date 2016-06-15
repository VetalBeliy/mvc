<div class="product">	
	<?php if($content): ?>
		<?php foreach($content as $oneContent): ?>
			<h2><?=$oneContent['title'];?></h2>
			<p><?=$oneContent['content_text'];?></p>
		<?php endforeach; ?>
	<?php else: ?>
		<h2>Статья не найдена</h2>
	<?php endif; ?>	
	<a href="#"><h3>Скачать прайс-лист</h3></a>
</div>