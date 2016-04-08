<div class="eventRequests form">
<div class="eventRequests view">
<h2><?php echo __('Event Request'); ?></h2>
	<dl>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($eventRequest['EventRequest']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($eventRequest['EventRequest']['time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->Form->create('EventRequest'); ?>
	<fieldset>
		<legend><?php echo __('Approve Event Request'); ?></legend>
	<?php
		echo $this->Form->input('details');
		echo $this->Form->input('time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
