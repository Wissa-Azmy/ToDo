<?php if($this->session->flashdata('registered')) : ?>
	<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>


<?php if($this->session->flashdata('login_failed')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('no_access')) : ?>
	<p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('no_access'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('login_success')) : ?>
		<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('list_created')) : ?>
		<p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('list_created'); ?></p>
<?php endif; ?>

<div class="container">
	
<br />
<?php if($this->session->userdata('logged_in')) : ?>









    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				


	<div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="wissa-azmy-b0a1a768">
	<a class="LI-simple-link" href='https://eg.linkedin.com/in/wissa-azmy-b0a1a768?trk=profile-badge'>Wissa Azmy</a>
	</div>

				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div> <!-- USER MENU -->
				
			</div> <!-- PROFILE-SIDEBAR -->
		</div> <!-- COL-MD-3 -->








<div class="col-md-9">
<div class="profile-content">


<!-- ADD NEW TASK WIDGET -->

	<section class="row new-post">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="widget-area no-padding blank">
                    
                    <div class="status-upload">
                        <form action="" method="post">

                        	<div class="form-group form-inline">
                        	<style type="text/css">
                        		#task_name{width: 65%;} #list{ margin-left: 3%; width: 30%;}
                        	</style>
                        		<input type="text" id="task_name" class="form-control" placeholder="What are you Up To?" name="task_name">	
                        	
								<select name="list" class="form-control" id="list">
                                    <option value="0">List</option>

                                    <?php foreach ($lists as $list) :?>
                                        <option value="<?php echo $list->id ?>"><?php echo $list->list_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                        	</div>

                        
                        	
                            <textarea class="form-control" name="task_body" id="task_body" rows="2" placeholder="Add a description..." ></textarea>
                            <ul>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="SubTasks"><i class="fa fa-tasks"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Media"><i class="fa fa-picture-o"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Due Date"><i class="fa fa-calendar"></i></a></li>                                
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Reminder"><i class="fa fa-bell"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Location"><i class="fa fa-location-arrow"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Description"><i class="fa fa-info"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Participants"><i class="fa fa-user-plus"></i></a></li>
                                <li>
                                    <!-- <button class="btn btn-link"> -->
                                        <div class="rating" data-toggle="tooltip" data-placement="bottom" data-original-title="Priority">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                    <!-- </button> -->
                                </li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Privacy"><i class="fa fa-user-secret fa-2x"></i></a></li>

                            </ul>
                            <input type="hidden" id="list_id" name="list_id" value="1">
                            <button type="submit" id="add_task" class="btn btn-primary"><i class="fa fa-thumb-tack"></i> Pin</button>
                        </form>
                    </div><!-- Status Upload  -->
                </div><!-- Widget Area -->
            </div>
        </div>
        <hr>
    </section>







<!-- VERTICAL TIME LINE CODE -->



	<section id="cd-timeline" class="cd-container">
	<?php foreach ($tasks as $task): ?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="<?php echo base_url();?>public/imgs/vertical-timeline-img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><?php echo $task->task_name; ?></h2>
				<p><?php echo $task->task_body; ?></p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date"><?php echo $task->create_date; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	<?php endforeach; ?>	
	</section> <!-- cd-timeline -->



</div><!-- profile-content -->
</div><!-- col-md-9 -->
</div><!-- row profile -->
</div>	<!-- CONTAINER -->

	
	<?php endif; ?>					




<script type="text/javascript">
    var add_task_url = "<?php echo base_url(); ?>tasks/add";

</script>
