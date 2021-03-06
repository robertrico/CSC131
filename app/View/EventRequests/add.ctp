<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Welcome to the Community Service Connection!</h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('EventRequest'); ?>
				<div class="">
					<legend><?php echo __('Request Event'); ?></legend>
					<p> Welcome to the MESA Engineering Community service event request form.  </p>
					<p> To send a community event request to the MEP Office, simply fill out the form below, and press submit. </p>
					<p> Be sure to be as detailed as possible, including potential jobs/tasks at the event, time slots for each of the jobs/tasks, and anything else that is important.</p>
					<?php
						echo $this->Form->input('time',array('label'=>'Start Time','type'=>'text','class'=>'form-control'));
						echo $this->Form->input('end_time',array('type'=>'text','class'=>'form-control'));
						echo $this->Form->input('name',array('label'=>'Event Name','class'=>'form-control'));
						echo $this->Form->input('email',array('class'=>'form-control'));
						echo $this->Form->input('phone',array('class'=>'form-control'));
						echo $this->Form->input('details',array('class'=>'form-control','rows'=>'15'));
					?>
				</div>
				<div class="col-md-12 text-center">
						<br/>
						<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
						<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#EventRequestTime,#EventRequestEndTime').timepicker({ 
		step : 15,
		formatTime : 'g:i a',
		formatDate : 'm/d/Y',
		format : 'm/d/Y g:i a'
	});
});
</script>
