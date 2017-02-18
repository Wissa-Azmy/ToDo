<ul id='actions'>
	<h4>List Actions</h4>
	<li><a href="<?php echo base_url();?>tasks/add/<?php echo $list->id; ?>">Add Task</a></li>
	
	<li id="edit_list"><a id="edit_list" class="edit_list" href="#">Edit List</a></li>
	
	<li>
        <a onclick="return confirm('Are you Sure?')" href="<?php echo base_url();?>lists/delete/<?php echo $list->id; ?>">
        Delete List</a>
    </li>
</ul>


<h1><?php echo $list->list_name; ?></h1>

<br /><br />
<div style='max-width: 500px;'><?php echo $list->list_body; ?></div>
<br /><br />




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
                            <input type="text" class="form-control" id="list_name" name="list_name" value="<?php echo $list->list_name; ?>"> 
                        </div>

                        <input type="hidden" name="list_id" id="list_id" value="<?php echo $list->id; ?>"> 

                        <div class="form-group">
                            <textarea class="form-control" name="list_body" id="list_body" rows="4"><?php echo $list->list_body; ?></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" id="list-update" class="btn btn-primary update_list">Update</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    var edit_url = "<?php echo base_url(); ?>lists/update";
    var show_url = "<?php echo base_url(); ?>lists/show/<?php echo $list->id; ?>";
</script>