<?php if($this->session->flashdata('registered')) : ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>


<?php if($this->session->flashdata('login_failed')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('no_access')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('no_access'); ?></p>
<?php endif; ?>

<div class="container">
	<h1>Welcome to Scope ToDo App</h1>
	<p>Scope ToDo is a simple and helpful application to help the IT staff finsih their tasks</p>
</div>	
      
<?php if($this->session->userdata('logged_in')) : ?>

	<?php if($this->session->flashdata('login_success')) : ?>
		<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
	<?php endif; ?>

<div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="wissa-azmy-b0a1a768">
<a class="LI-simple-link" href='https://eg.linkedin.com/in/wissa-azmy-b0a1a768?trk=profile-badge'>Wissa Azmy</a>
</div>

<?php endif; ?>