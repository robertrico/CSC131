<div class="studentJobs view">
<h2><?php echo __('Student Job'); ?></h2>
	<dl>
		<dt><?php echo __('Hours'); ?></dt>
		<dd>
			<?php echo h($studentJob['StudentJob']['total_hours']); ?>
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
