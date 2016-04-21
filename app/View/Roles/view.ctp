<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($role['Role']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Control'); ?></dt>
		<dd>
			<?php echo h($role['Role']['full_control']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Control'); ?></dt>
		<dd>
			<?php echo h($role['Role']['student_control']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Control'); ?></dt>
		<dd>
			<?php echo h($role['Role']['event_control']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Control'); ?></dt>
		<dd>
			<?php echo h($role['Role']['user_control']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $role['Role']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
	</ul>
</div>
