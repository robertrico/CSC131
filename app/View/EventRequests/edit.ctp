<div class="eventRequests form">
<?php echo $this->Form->create('EventRequest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('details');
		echo $this->Form->input('time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventRequest.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('EventRequest.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Event Requests'), array('action' => 'index')); ?></li>
	</ul>
</div>
