<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Add a Student Job</h3>
		</div>
		<div class="panel-body">
			<div class="studentJobs form">
			<?php echo $this->Form->create('StudentJob'); ?>
				<fieldset>
					<legend><?php echo __('Add Student Job'); ?></legend>
				<?php
					echo $event['Event']['name'];
					echo $this->Form->input('job_id');
				?>
				</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
			</div>
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>

					<li><?php echo $this->Html->link(__('List Student Jobs'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
