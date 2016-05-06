
<div class="col-md-10 col-md-offset-1">
	<div class="login-panel panel panel-default">
		<div class="panel-heading">
				<h3 class="panel-title"> <?php echo __('My Events'); ?> </h3>
		</div>
		<div class="panel-body">
			<div class="studentJobs index">
			<h2><?php echo __('My Events'); ?></h2>
			<table class="table table-striped" cellpadding="0" cellspacing="0">
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('event_id'); ?></th>
					<th><?php echo $this->Paginator->sort('job_id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($studentJobs as $studentJob): ?>
			<tr>
				<td>
					<?php echo $this->Html->link($studentJob['Event']['name'], array('controller' => 'events', 'action' => 'view', $studentJob['Event']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($studentJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $studentJob['Job']['id'])); ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $studentJob['StudentJob']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $studentJob['StudentJob']['id'])); ?>
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
		</div>
	</div>
</div>

