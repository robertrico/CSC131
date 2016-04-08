<div class="eventRequests view">
<h2><?php echo __('Event Request'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventRequest['EventRequest']['id']); ?>
			&nbsp;
		</dd>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Request'), array('action' => 'edit', $eventRequest['EventRequest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Request'), array('action' => 'delete', $eventRequest['EventRequest']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $eventRequest['EventRequest']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Request'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Approve Event Request'), array('action' => 'approve', $eventRequest['EventRequest']['id'])); ?> </li>
	</ul>
</div>
