<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Add Job</h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('Job'); ?>
				<legend><?php echo __('Add Job to ' . $event['Event']['name']); ?></legend>
				<div class="col-md-6 col-md-offset-0">
					<?php echo $this->Form->input('start_time',array('class'=>'form-control','type'=>'text')); ?>
				</div>
				<div class="col-md-6">
					<?php echo $this->Form->input('end_time',array('class'=>'form-control','type'=>'text')); ?>
				</div>
				<div class="col-md-6 col-md-offset-0">
					<?php echo $this->Form->input('name',array('class'=>'form-control','label'=>'Job Title')); ?>
				</div>
				<div class="col-md-6">
					<?php echo $this->Form->input('available_positions',array('class'=>'form-control')); ?>
				</div>
				<div class="col-md-12 col-md-offset-0">
					<?php echo $this->Form->input('details',array('class'=>'form-control','rows'=>'15')); ?>
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
	$('#JobStartTime, #JobEndTime').datetimepicker({ 
		datepicker : false,
		step : 15,
		formatTime : 'g:i a',
		format : 'g:i a'
	});
});
</script>