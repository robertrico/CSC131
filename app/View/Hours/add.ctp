<div class="hours form">
<?php echo $this->Form->create('Hour'); ?>
	<fieldset>
		<legend><?php echo __('Add Hour'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('total_hours');
		echo $this->Form->input('semester');
		echo $this->Form->input('year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Infos'), array('controller' => 'student_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Info'), array('controller' => 'student_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
