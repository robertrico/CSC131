<div class="events form">
<?php echo $this->Form->create('event_requests'); ?>
	<fieldset>
		<legend><?php echo __('Request for Event'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('time');
		echo $this->Form->input('details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
