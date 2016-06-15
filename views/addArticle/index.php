<article class="module width_full">

<?php 
	if (isset($content)) {
		foreach ($content as $oneContent) {
			$title = $oneContent['title'];
			$content_text = $oneContent['content_text'];
			$category = $oneContent['category'];
			$meta = $oneContent['meta'];
			$id = $oneContent['id'];
		}
	}
?>

	<header><h3>Добавить статью</h3></header>
		<div class="module_content">
		<form action="<?php if (isset($content)) {
				echo 'addArticle/edit_article';
			} else { echo 'addArticle/save_article'; } ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<fieldset>
					<label>Заголовок</label>
					<input name="title" type="text" value="<?php if (isset($title)) {
						echo $title; } ?>">
				</fieldset>
				<fieldset>
					<h3>Статья</h3>
					<textarea name="text" rows="12"><?php if (isset($content_text)) {
						echo $content_text; } ?></textarea>
					<script type="text/javascript">
					CKEDITOR.replace('text');
					</script>
				</fieldset>
				<fieldset style="width:48%; float:left; margin-right: 3%;">
					<label>Категория</label>
					<select name="category" style="width:92%;">
						<?php if(isset($category)): ?>
							<option value="<?php if (isset($category)) {
						echo $category; } ?>">Категория</option>
						<?php endif; ?>
						<option value="1">Главная</option>
						<option value="2">Продукция</option>
						<option value="3">Новости</option>
					</select>
				</fieldset>
				<fieldset style="width:48%; float:left;">
					<label>Тэги</label>
					<input name="meta" type="text" value="<?php if (isset($meta)) {
						echo $meta; } ?>" style="width:92%;">
				</fieldset><div class="clear"></div>
		</div>
	<footer>
		<div class="submit_link">
			<input type="submit" id="add_post" name="add_post" value="Опубликовать" class="alt_btn">
			<input type="submit" value="Сбросить">
		</div>
	</footer>
		</form>
</article><!-- end of post new article -->