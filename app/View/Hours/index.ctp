<div class="hours index">
	<h2><?php echo __('Hours'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('total_hours'); ?></th>
			<th><?php echo $this->Paginator->sort('semester'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hours as $hour): ?>
	<tr>
		<td><?php echo h($hour['Hour']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hour['User']['id'], array('controller' => 'users', 'action' => 'view', $hour['User']['id'])); ?>
		</td>
		<td><?php echo h($hour['Hour']['total_hours']); ?>&nbsp;</td>
		<td><?php echo h($hour['Hour']['semester']); ?>&nbsp;</td>
		<td><?php echo h($hour['Hour']['year']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hour['Hour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hour['Hour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hour['Hour']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hour['Hour']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Infos'), array('controller' => 'student_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Info'), array('controller' => 'student_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
