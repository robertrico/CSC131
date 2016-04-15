<div class="hours view">
<h2><?php echo __('Hour'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hour['User']['id'], array('controller' => 'users', 'action' => 'view', $hour['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Hours'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['total_hours']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semester'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['semester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hour'), array('action' => 'edit', $hour['Hour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hour'), array('action' => 'delete', $hour['Hour']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hour['Hour']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Infos'), array('controller' => 'student_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Info'), array('controller' => 'student_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Student Infos'); ?></h3>
	<?php if (!empty($hour['StudentInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Studentid'); ?></th>
		<th><?php echo __('Hour Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hour['StudentInfo'] as $studentInfo): ?>
		<tr>
			<td><?php echo $studentInfo['id']; ?></td>
			<td><?php echo $studentInfo['studentid']; ?></td>
			<td><?php echo $studentInfo['hour_id']; ?></td>
			<td><?php echo $studentInfo['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'student_infos', 'action' => 'view', $studentInfo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'student_infos', 'action' => 'edit', $studentInfo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'student_infos', 'action' => 'delete', $studentInfo['id']), array('confirm' => __('Are you sure you want to delete # %s?', $studentInfo['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Info'), array('controller' => 'student_infos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
