<?php if($this->session->flashdata('list_created')) : ?>
        <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('list_created'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('list_updated')) : ?>
        <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('list_updated'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('list_deleted')) : ?>
        <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('list_deleted'); ?></p>
<?php endif; ?>

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
<p><a href="#" id="create_list" class="btn btn-primary create_task"> Create a List</a></p>







<!--***************** CREATE LIST MODAL ******************* -->
<div class="modal fade" tabindex="-1" role="dialog" id="create-modal">
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
                    <button type="button" class="btn btn-primary" id="list-create">Create</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div><!-- /.modal -->