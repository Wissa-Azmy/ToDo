<h3>List Edit Form</h3>
 <form action="<?php echo base_url(); ?>lists/update" method="post">
	<div class="form-group">
        <input type="text" class="form-control" id="list_name" name="list_name" value="<?php echo $list->list_name; ?>"> 
    </div>

    <input type="hidden" name="list_id" id="list_id" value="<?php echo $list->id; ?>"> 

    <div class="form-group">
        <textarea class="form-control" name="list_body" id="list_body" rows="4"><?php echo $list->list_body; ?></textarea>
    </div>

    <input type="submit" name="submit" class="btn btn-primary" value="Update"> 
</form>