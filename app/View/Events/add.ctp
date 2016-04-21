<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center"><h3 class="panel-title">Adding a New Event</h3>
		</div>
			<div class="panel-body">
				<div class="events form">
				<?php echo $this->Form->create('Event'); ?>
					<fieldset>
						<legend><?php echo __('Add Event'); ?></legend>
							<?php
								echo $this->Form->input('name',array("class"=>"form-control"));
								echo $this->Form->input('date',array("type"=>"text","class"=>"form-control"));
								echo $this->Form->input('start_time',array("type"=>"text","class"=>"form-control"));
								echo $this->Form->input('end_time',array("type"=>"text","class"=>"form-control"));
								echo $this->Form->input('semester',array("options"=>$semesters,"class"=>"form-control"));
								echo $this->Form->input('year',array("options"=>$years,"class"=>"form-control"));
								echo $this->Form->input('location',array("class"=>"form-control"));
								echo $this->Form->input('details',array("class"=>"form-control", "rows"=>"10"));
							?>
					</fieldset>
					<div class="col-md-12 text-center">
						<br/>
						<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
						<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>

					</div>
					
				</div>


		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#EventDate').datetimepicker({ 
		timepicker : false, 
		step : 15,
		formatDate : 'm/d/Y',
		format : 'm/d/Y'
	});
	$('#EventStartTime,#EventEndTime').datetimepicker({ 
		datepicker : false, 
		step : 15,
		formatTime : 'g:i a',
		format : 'g:i a'
	});
});
</script>
