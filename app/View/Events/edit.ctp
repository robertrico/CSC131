<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Event</h3>
		</div>
		<div class="panel-body">
			<div class="events form">
				<?php echo $this->Form->create('Event'); ?>
				<fieldset>
				<legend><?php echo __('Edit Event'); ?></legend>
				<?php
				echo $this->Form->input('id',array("class"=>"form-control"));
				echo $this->Form->input('name',array("class"=>"form-control"));
				echo $this->Form->input('location',array("class"=>"form-control"));
				echo $this->Form->input('time');
				echo $this->Form->input('details',array("class"=>"form-control","rows"=>"10"));
				?>
				</fieldset>
				<div class="col-md-12 text-center">
					<br/>
					<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
					<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>
