<h4 class="alert_info">Добро пожаловать в панель администратора.</h4>		
<article class="module width_full">
	<header><h3>Статус</h3></header>
	<div class="module_content">
		<article class="stats_graph">
			<img src="http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30" width="520" height="140" alt="" />
		</article>
		
		<article class="stats_overview">
			<div class="overview_today">
				<p class="overview_day">Today</p>
				<p class="overview_count">1,876</p>
				<p class="overview_type">Hits</p>
				<p class="overview_count">2,103</p>
				<p class="overview_type">Views</p>
			</div>
			<div class="overview_previous">
				<p class="overview_day">Yesterday</p>
				<p class="overview_count">1,646</p>
				<p class="overview_type">Hits</p>
				<p class="overview_count">2,054</p>
				<p class="overview_type">Views</p>
			</div>
		</article>
		<div class="clear"></div>
	</div>
</article><!-- end of stats article -->

<article class="module width_3_quarter">
<header><h3 class="tabs_involved">Контент менеджер</h3>
<ul class="tabs">
		<li><a href="#tab1">Статьи</a></li>
	<li><a href="#tab2">Коментарии</a></li>
</ul>
</header>

<div class="tab_container">
	<div id="tab1" class="tab_content">
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th></th> 
			<th>id</th> 
			<th>Название</th> 
			<th>Категория</th> 
			<th>Создана</th> 
			<th>Действия</th> 
		</tr> 
	</thead> 
	<tbody>
		<?php if($content): ?>
			<!--Выбираются данные из базы данных и и выводятся в цикле-->
			<?php foreach($content as $oneContent): ?>
		<tr> 
			<td><input type="checkbox"></td>
				<td><?=$oneContent['id'];?></td>
				<td><?=$oneContent['title'];?></td>
				<td><?=$oneContent['category'];?></td>
				<td><?=$oneContent['created'];?></td>			 
			<td><a href="addArticle?<?= "id=".$oneContent['id'];?>"><img src="images/image/icn_edit.png" title="редактировать"></a>  <a href="addArticle/delete_article?<?= "id=".$oneContent['id'];?>"><img src="images/image/icn_trash.png" title="удалить"></a></td>
		</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<h2>Нет ни одной статьи</h2>
		<?php endif; ?>
	</tbody>
	</table>
	</div><!-- end of #tab1 -->

	<div id="tab2" class="tab_content">
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th></th>
			<th>id</th>
			<th>Автор</th> 
			<th>Текст</th> 
			<th>Создал</th> 
			<th>Действия</th> 
		</tr> 
	</thead> 
	<tbody>		
		<?php if($comment): ?>
			<?php foreach($comment as $oneComment): ?>
				<tr> 
					<td><input type="checkbox"></td>
					<td><?=$oneComment['id'];?></td>
					<?php if (!empty($oneComment['name'])): ?>
						<td><i>Пользователь: </i><b><?=$oneComment['name'];?></b></td>
					<?php else: ?>
							<td><i>Пользователь: </i><b>Гость</b></td>  <!--имя-->
						<?php endif; ?>
					<td><?//=$oneContent['message'];?></td>
					<td><?=$oneComment['created'];?></td>
					<td><a href=""><img src="images/image/icn_edit.png" title="редактировать"></a>  <a href="comment/delete_comment?<?= "id=".$oneComment['id'];?>"><img src="images/image/icn_trash.png" title="удалить"></a></td>
				</tr>			
			<?php endforeach; ?>
		<?php else: ?>
			<h2>Коментариев пока нет</h2>
		<?php endif; ?>		  
	</tbody> 
	</table>

	</div><!-- end of #tab2 -->
	
</div><!-- end of .tab_container -->

</article><!-- end of content manager article -->

<article class="module width_quarter">
	<header><h3>Сообщения</h3></header>
	<div class="message_list">
		<div class="module_content">
			<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
			<p><strong>Виталий</strong></p></div>
		</div>
	</div>
	<footer>
		<form class="post_message">
			<input type="text" value="Message" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
			<input type="submit" class="btn_post_message" value=""/>
		</form>
	</footer>
</article><!-- end of messages article -->

<div class="clear"></div>