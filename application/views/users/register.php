<h1>Register</h1>
<p>Please fill out the form below to create an account</p>
<!--Display Error -->
<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<?php echo form_open('users/register'); ?>
<!-- Field: First Name -->
<p>
<?php echo form_label('First Name:'); ?>
<?php
$data = array(
	'name'	=> 'first_name',
	'value' => set_value('first_name')
	);
?>

<?php echo form_input($data); ?>
</p>

<!--Field: Last Name -->
<p>
<?php echo form_label('Last Name:'); ?>
<?php
$data = array(
	'name'	=> 'last_name',
	'value' => set_value('last_name')
	);
?>

<?php echo form_input($data); ?>
</p>

<!--Field: Email -->
<p>
<?php echo form_label('Email:'); ?>
<?php
$data = array(
	'name'	=> 'email',
	'value' => set_value('email')
	);
?>

<?php echo form_input($data); ?>
</p>

<!--Field: Username -->
<p>
<?php echo form_label('Username:'); ?>
<?php
$data = array(
	'name'	=> 'username',
	'value' => set_value('username')
	);
?>

<?php echo form_input($data); ?>
</p>

<!--Field: Password -->
<p>
<?php echo form_label('Password:'); ?>
<?php
$data = array(
	'name'	=> 'password',
	'value' => set_value('password')
	);
?>

<?php echo form_password($data); ?>
</p>


<!--Field: Confirm Password -->
<p>
<?php echo form_label('Confirm Password:'); ?>
<?php
$data = array(
	'name'	=> 'password2',
	'value' => set_value('password2')
	);
?>

<?php echo form_password($data); ?>
</p>


<!--Button: Submit -->
<p>
<?php
$data = array(
	'value' => 'Regiter',
	'name'	=> 'submit',
	'class' => set_value('btn btn-primary')
	);
?>

<?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>
