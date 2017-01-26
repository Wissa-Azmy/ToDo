<ul id='actions'>
	<h4>List Actions</h4>
	<li><a href="http://localhost/ToDo/index.php/tasks/add/<?php echo $list->id; ?>">Add Task</a></li>
	<li><a href="http://localhost/ToDo/index.php/lists/edit/<?php echo $list->id; ?>">Edit List</a></li>
	<li><a onclick="return confirm('Are you Sure?')" href="http:/localhost/ToDo/index.php/tasks/delete/<?php echo $list->id; ?>">Delete List</a></li>
</ul>
<h1><?php echo $list->list_name; ?></h1>
Created on <strong><?php echo date('n-j-y', strtotime($list->create_date)); ?></strong>
<br /><br />
<div style='max-width: 500px;'><?php echo $list->list_body; ?></div>
<br /><br />
