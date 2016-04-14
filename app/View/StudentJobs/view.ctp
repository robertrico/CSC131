<div class="studentJobs view">
<h2><?php echo __('Student Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentJob['StudentJob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentJob['Event']['name'], array('controller' => 'events', 'action' => 'view', $studentJob['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentJob['User']['id'], array('controller' => 'users', 'action' => 'view', $studentJob['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $studentJob['Job']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Job'), array('action' => 'edit', $studentJob['StudentJob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Job'), array('action' => 'delete', $studentJob['StudentJob']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $studentJob['StudentJob']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
