<div class="col-md-12 col-md-offset-0">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">List of Jobs</h3>
		</div>
		<div class="panel-body">
			<div class="jobs index">
				<h2><?php echo __('All Available Jobs'); ?></h2>
				<table class="table table-striped" cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('details'); ?></th>
						<th><?php echo $this->Paginator->sort('event_id'); ?></th>
						<th><?php echo $this->Paginator->sort('available_positions'); ?></th>
						<th><?php echo $this->Paginator->sort('start_time'); ?></th>
						<th><?php echo $this->Paginator->sort('end_time'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($jobs as $job): ?>
				<tr>
					<td><?php echo $this->Html->link(__(h($job['Job']['name'])), array('action' => 'view', $job['Job']['id'])); ?>&nbsp;</td>
					<td><?php echo h($job['Job']['details']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link($job['Event']['name'], array('controller' => 'events', 'action' => 'view', $job['Event']['id'])); ?>
					</td>
					<td><?php echo h($job['Job']['available_positions']); ?>&nbsp;</td>
					<td><?php echo h($job['Job']['start_time']); ?>&nbsp;</td>
					<td><?php echo h($job['Job']['end_time']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $job['Job']['id']))); ?>
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
					<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
