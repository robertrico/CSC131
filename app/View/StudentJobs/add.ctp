
<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Add a Student Job</h3>
		</div>
		<div class="panel-body">
			<div class="studentJobs form">
			<?php echo $this->Form->create('StudentJob'); ?>
				<fieldset>
				<br></br>
				<div class="col-md-6 col-md-offset-3">
					<table class="table" cellpadding="1" cellspacing="0" border="1">
					<!--<legend><?php echo __('Add Student Job'); ?></legend>-->
					<?php
						echo $event['Event']['name'];
						echo $this->Form->input('job_id');
					?>
					</table>
				</div>
				</fieldset>
				<br></br>
			<div class="text-center">
			<?php echo $this->Form->button(__('Submit'), array('class'=>'btn btn-primary pull-center' ,'class'=>'btn btn-default'));?>
			</div>
			</div>
			<div class="actions">
			<br></br>
			</div>
		</div>
	</div>
</div>


