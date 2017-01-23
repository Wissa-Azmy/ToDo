<div id="bg">
	<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
</div>
<?php $data = ['id' => 'form']; ?>
<?php echo form_open('users/register', $data); ?>
  <label for=""></label>
  <input type="text" name="first_name" id="" placeholder="First Name" class="first_name">

  <label for=""></label>
  <input type="text" name="last_name" id="" placeholder="Last Name" class="last_name">

  <label for=""></label>
  <input type="email" name="email" id="" placeholder="Email" class="email">

  <label for=""></label>
  <input type="text" name="username" id="" placeholder="Username" class="username">
    
  <label for=""></label>
  <input type="password" name="password" id="" placeholder="password" class="pass">

  <label for=""></label>
  <input type="password" name="password2" id="" placeholder="Confirm Password" class="pass2">
    
  <button class= "btn btn-primary" type="submit">Sign Up</button>
    
<?php echo form_close(); ?>



