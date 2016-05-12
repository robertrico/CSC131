<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Job</h3>
		</div>
		<div class="panel-body">
			<div class="jobs form">
			<?php echo $this->Form->create('Job'); ?>
				<fieldset>
					<legend><?php echo __('Edit Job');?></legend>
				<?php
					echo $this->Form->input('id',array("class"=>"form-control"));
					echo $this->Form->input('name',array("class"=>"form-control"));
					echo $this->Form->input('details',array("class"=>"form-control"));
					echo $this->Form->input('event_id',array("class"=>"form-control"));
				?>
				<br/>
				<?php
					echo $this->Form->input('available_positions');
					echo $this->Form->input('start_time');
					echo $this->Form->input('end_time');
				?>
				</fieldset>
			</div>
			<div class="col-md-12 text-center">
					<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
					<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>
				</div>
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>

					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Job.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Job.id')))); ?></li>
					<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>