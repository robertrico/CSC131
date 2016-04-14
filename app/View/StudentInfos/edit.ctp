<div class="studentInfos form">
<?php echo $this->Form->create('StudentInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Student Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('studentid');
		echo $this->Form->input('hour_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StudentInfo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('StudentInfo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Student Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
