


<div class="col-md-6 col-md-offset-2 text-center">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center">
			<div>
				<h3 class="panel-title" >Create A New User</h3>
			</div>
		</div>
			<div class="panel-body">
				<div class="users form" >
					<?php echo $this->Form->create('User'); ?>
					<fieldset>
						<?php
							echo $this->Form->input('firstName',array("class"=>"form-control", "label"=>"First Name",'required'));
							echo $this->Form->input('lastname',array("class"=>"form-control", "label"=>"Last Name",'required'));
							echo $this->Form->input('id',array("class"=>"form-control", "label"=>"Student Id",'required'));
							echo $this->Form->input('email',array("class"=>"form-control", "label"=>"Email",'required'));
							echo $this->Form->input('major',array("class"=>"form-control", "label"=>"Major" ,'required'));
							echo $this->Form->input('username',array("class"=>"form-control", "label"=>"Userame",'required'));
							echo $this->Form->input('password',array("class"=>"form-control", "label"=>"Password",'required'));
						?>
					</fieldset>
					<h1></h1>
					<div class="col-md-6 col-md-offset-3">
						<?php //echo $this->Form->button(__('Clear'), array('class'=>'btn btn-default pull-left'));?>
						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-default pull-center'));?>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
	</div>
</div>