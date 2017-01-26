<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/bootstrap.css">-->
<link rel="stylesheet" type="text/css" href="http://localhost/ToDo/public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://localhost/ToDo/public/css/custom.css">

<!-- <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/custom.css">-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://localhost/ToDo/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<title>ToDo Task Manager</title>
</head>


	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/ToDo/index.php/home">Scope ToDo App</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <?php if ($this->session->userdata('logged_in')) : ?>
		<ul class="nav navbar-nav">
        <li class="active"><a href="#">Active</a></li>
        <li><a href="#">Finished</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="http://localhost/ToDo/index.php/lists">Lists</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

		<ul class="nav navbar-nav navbar-right">
	        <li><p class="navbar-text">Welcome</p></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $this->session->userdata('username'); ?></b> <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li>
						 <div class="row">
								<div class="col-md-12">
									
									 <form class="form" role="form" method="post" action="users/logout" id="login-nav">
									
											
											<div class="form-group">
												 <button type="submit" class="btn btn-primary btn-block">Log out</button>
											</div>
											
									 </form>
									
								</div>
								<div class="bottom text-center">
									New here ? <a href="http://localhost/ToDo/index.php/users/register"><b>Join Us</b></a>
								</div>
						 </div>
					</li>
				</ul>
	        </li>
      	</ul>
	  	
      <?php else : ?>

		<ul class="nav navbar-nav navbar-right">
	        <li><p class="navbar-text">Already have an account?</p></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li>
						 <div class="row">
								<div class="col-md-12">
									Login via
									<div class="social-buttons">
										<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
										<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
									</div>
	                                or
									 <form class="form" role="form" method="post" action="users/login" id="login-nav">
									
											<div class="form-group">
												 <label class="sr-only" for="exampleInputEmail2">Username</label>
												 <input type="text" name="username" class="form-control" id="exampleInputEmail2" placeholder="Username" required>
											</div>
											<div class="form-group">
												 <label class="sr-only" for="exampleInputPassword2">Password</label>
												 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
	                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
											</div>
											<div class="form-group">
												 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
											</div>
											<div class="checkbox">
												 <label>
												 <input type="checkbox"> keep me logged-in
												 </label>
											</div>
									 </form>
									
								</div>
								<div class="bottom text-center">
									New here ? <a href="http://localhost/ToDo/index.php/users/register"><b>Join Us</b></a>
								</div>
						 </div>
					</li>
				</ul>
	        </li>
      	</ul>

      <?php endif; ?>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="span9">


					<!-- MAIN CONTENT -->
					<?php $this->load->view($main_content); ?>
					

</div><!-- span9 -->

</body>
<script src="http://localhost/ToDo/public/js/app.js"></script>

</html> 


