<?php if($this->session->flashdata('registered')) : ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>


<?php endif; ?>	
<h1>Welcome to Scope ToDo App</h1>
<p>Scope ToDo is a simple and helpful application to help the IT staff finsih their tasks</p>