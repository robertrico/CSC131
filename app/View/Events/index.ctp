<div class="col-md-12 col-md-offset-0">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Events</h3>
		</div>
		<div class="panel-body">
						<div class="events index">
				<h2><?php echo __('List of Community Service Events'); ?></h2>
				<table class="table table-striped" cellpadding="0" cellspacing="0">
				<thead>
				<tr>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('details'); ?></th>
						<th><?php echo $this->Paginator->sort('date'); ?></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($events as $event): ?>
				<tr>
					<td><?php echo $this->Html->link(__(h($event['Event']['name'])), array('action' => 'view', $event['Event']['id'])); ?>&nbsp;</td>
					<td><?php echo h($event['Event']['details']); ?>&nbsp;</td>
					<td><?php echo h($event['Event']['date']); ?>&nbsp;</td>
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
					<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
