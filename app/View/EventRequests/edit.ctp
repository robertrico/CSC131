<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Event Request</h3>
		</div>
		<div class="panel-body">
			<div class="eventRequests form">
			<?php echo $this->Form->create('EventRequest'); ?>
				<fieldset>
					<legend><?php echo __('Edit Event Request'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name',array('class'=>'form-control'));
					echo $this->Form->input('Email',array('class'=>'form-control'));
					echo $this->Form->input('Phone',array('class'=>'form-control'));
					echo $this->Form->input('time',array('type'=>'text','class'=>'form-control'));						
					echo $this->Form->input('details',array('class'=>'form-control','rows'=>'15'));
				?>
				</fieldset>
			<br/>
			<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
			<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>
			</div>
			<br/>
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventRequest.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('EventRequest.id')))); ?></li>
					<li><?php echo $this->Html->link(__('List Event Requests'), array('action' => 'index')); ?></li>
				</ul>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<!--
<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Welcome to the Community Service Connection!</h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('EventRequest'); ?>
				<div class="col-md-12 col-md-offset-0">
					<legend><?php echo __('Request Event'); ?></legend>
					<p> Welcome to the MESA Engineering Community service event request form.  </p>
					<p> To send a community event request to the MEP Office, simply fill out the form below, and press submit. </p>
					<p> Be sure to be as detailed as possible, including potential jobs/tasks at the event, time slots for each of the jobs/tasks, and anything else that is important.</p>
					<?php
						echo $this->Form->input('name',array('class'=>'form-control'));
						echo $this->Form->input('Email',array('class'=>'form-control'));
						echo $this->Form->input('Phone',array('class'=>'form-control'));
						echo $this->Form->input('time',array('type'=>'text','class'=>'form-control'));						
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
	$('#EventRequestTime').datetimepicker({ 
		step : 15,
		formatTime : 'g:i a',
		formatDate : 'm/d/Y',
		format : 'm/d/Y g:i a'
	});
});
</script> -->