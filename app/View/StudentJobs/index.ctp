



<div class="col-md-6 col-md-offset-3">
<div class="main-panel panel panel-default">
<div class="panel-heading">
<h1 class=“panel-title text-center” >Specify topic</h1>
</div>

<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">List of Student Jobs</h3>
		</div>
		<div class="panel-body">
			<div class="studentJobs index">
				<h2><?php echo __('Student Jobs'); ?></h2>
				<table cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('event_id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('job_id'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($studentJobs as $studentJob): ?>
				<tr>
					<td><?php echo h($studentJob['StudentJob']['id']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($studentJob['Event']['name'], array('controller' => 'events', 'action' => 'view', $studentJob['Event']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($studentJob['User']['id'], array('controller' => 'users', 'action' => 'view', $studentJob['User']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Html->link($studentJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $studentJob['Job']['id'])); ?>
					</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentJob['StudentJob']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentJob['StudentJob']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $studentJob['StudentJob']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $studentJob['StudentJob']['id']))); ?>
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
					<li><?php echo $this->Html->link(__('New Student Job'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>

</div>
</div>
