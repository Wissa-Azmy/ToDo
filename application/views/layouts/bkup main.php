<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://localhost/ToDo/public/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/custom.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<title>ToDo Task Manager</title>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="#">Scoe ToDo</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						RIGHT TOP CONTENT
					</p>
					<ul class="nav">
						<li><a href="#">Home</a></li>
					</ul>
				</div><!-- nav-collapse
			</div><!-- container-fluid -->
		</div><!-- nav-inner -->

		
	</div><!-- navbar -->


	<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
					<div style="margin:0 0 10px 10px;">
						<!-- SIDEBAR CONTENT -->
					</div><!-- Styler -->
					</div><!-- well -->
				</div><!-- span -->

				<div class="span9">


					<!-- MAIN CONTENT -->
					<?php $this->load->view($main_content); ?>
					

				</div><!-- span9 -->
			</div><!-- row-fluid -->
			
			<hr>

			<footer>
				<p>&copy; Copyrights Wissa Azmy 2017</p>
			</footer>

		</div><!-- container-fluid --> 
</body>

</html> 