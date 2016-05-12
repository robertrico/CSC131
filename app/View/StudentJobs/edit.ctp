


<div class="col-md-7 col-md-offset-3">
<div class="main-panel panel panel-default">
<div class="panel-heading text-center">
<h2 class=“panel-title ” >Edit Student Job</h2>
</div>


<div class="studentJobs form">
<br></br>
<?php echo $this->Form->create('StudentJob'); ?>
	<fieldset>
		<!--<legend><?php echo __('Edit Student Job'); ?></legend>-->
	<div class="col-md-6 col-md-offset-1">
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('job_id');
	?>
	</div>
	</fieldset>
<div class= "text-center">
</br>
<?php echo $this->Form->button(__('Submit'), array('class'=>'btn btn-primary pull-center' ,'class'=>'btn btn-default'));?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StudentJob.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('StudentJob.id')))); ?></li>
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