<ul id='actions'>
	<h4>List Actions</h4>
	<li><a href="http://localhost/ToDo/index.php/tasks/add/<?php echo $list->id; ?>">Add Task</a></li>
	
	<li id="edit_list"><a id="edit_list" class="edit_list" href="#">Edit List</a></li>
	
	<li><a onclick="return confirm('Are you Sure?')" href="http:/localhost/ToDo/index.php/tasks/delete/<?php echo $list->id; ?>">Delete List</a></li>
</ul>

<p><a href="#" id="edit_list" class="btn btn-primary edit_list"> Create a New List</a></p>

<h1><?php echo $list->list_name; ?></h1>
Created on <strong><?php echo date('n-j-y', strtotime($list->create_date)); ?></strong>
<br /><br />
<div style='max-width: 500px;'><?php echo $list->list_body; ?></div>
<br /><br />
<?php echo 'Hello World!' ?>



<!--***************** EDIT LIST MODAL ******************* -->
<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Create New List</h4>
                </div>
                <div class="modal-body">
                    <form>
                    	<div class="form-group">
                            <input type="text" class="form-control" id="list_name" name="list_name" placeholder="List Name"> 
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="list_body" id="list_body" rows="4" placeholder="List Body..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="list-update">Update</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div><!-- /.modal -->