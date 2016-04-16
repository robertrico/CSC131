<div class="hours form">
<?php echo $this->Form->create('Hour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hour'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hour.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Hour.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Hours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Infos'), array('controller' => 'student_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Info'), array('controller' => 'student_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
