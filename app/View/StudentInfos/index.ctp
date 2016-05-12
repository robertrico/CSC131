

<div class="col-md-12 col-md-offset-0">
<div class="main-panel panel panel-default">
<div class="panel-heading">
<h1 class=“panel-title text-center” >Student Infos</h1>
</div>

<div class="studentInfos index">
	<!--<h2><?php echo __('Student Infos'); ?></h2>-->
	<table class="table" cellpadding="1" cellspacing="0" border="1">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('studentid'); ?></th>
			<th><?php echo $this->Paginator->sort('hour_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($studentInfos as $studentInfo): ?>
	<tr>
		<td><?php echo h($studentInfo['StudentInfo']['id']); ?>&nbsp;</td>
		<td><?php echo h($studentInfo['StudentInfo']['studentid']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($studentInfo['Hour']['id'], array('controller' => 'hours', 'action' => 'view', $studentInfo['Hour']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($studentInfo['User']['id'], array('controller' => 'users', 'action' => 'view', $studentInfo['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentInfo['StudentInfo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentInfo['StudentInfo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentInfo['StudentInfo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $studentInfo['StudentInfo']['id']))); ?>
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
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Student Info'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div>
</div>
