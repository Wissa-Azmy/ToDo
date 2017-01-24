<ul class="list_items">
<?php foreach ($lists as $list) : ?>
	
	<li>

	<div class="list_name">
	<a href="http://localhost/ToDo/index.php/lists/show/<?php echo $list->id; ?>">
	<?php echo $list->list_name; ?>
	</a>
	</div>
	<div class="list_body"><?php echo $list->list_body; ?></div>
		
	</li>

<?php endforeach; ?>
</ul>
</br>
<p><a href="lists/add"> Create a New List</a></p>