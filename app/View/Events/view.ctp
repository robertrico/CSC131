<div class="col-md-12 col-md-offset-0">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Event Information</h3>
		</div>
		<div class="panel-body">
							<div class="events view">
				<h2><?php echo __('Event Information for ' . $event['Event']['name']); ?></h2>
					<dl>
						<dt><?php echo __('ID#'); ?></dt>
						<dd>
							<?php echo h($event['Event']['id']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Name'); ?></dt>
						<dd>
							<?php echo h($event['Event']['name']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Time'); ?></dt>
						<dd>
							<?php echo h($event['Event']['time']); ?>
							&nbsp;
						</dd>
						<dt><?php echo __('Details'); ?></dt>
						<dd>
							<?php echo h($event['Event']['details']); ?>
							&nbsp;
						</dd>
					</dl>
				</div>
				<!-- start event jobs table -->
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo (__('Job Name')); ?></th>
			<th><?php echo (__('Positions left')); ?></th>
			<th><?php echo (__('Time')); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($jobs as $event_job) : ?>
		<tr>
			<td><?php echo $this->Html->link(__(h($event_job['name'])), array('controller'=>'jobs','action' => 'view', $event_job['id']),array('target'=>'_blank')); ?> </td>
			<td><?php echo h($event_job['available_positions']); ?>&nbsp;</td>
			<td><?php echo date('g:i a', strtotime(h($event_job['start_time']))).' - '.date('g:i a', strtotime(h($event_job['end_time']))); ?>&nbsp;</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>

<!-- start student jobs table -->
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo (__('Student')); ?></th>
			<th><?php echo (__('Job/Duty')); ?></th>
			<th><?php echo (__('Time')); ?></th>
			<th><?php echo (__('hours')); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($student_jobs as $student_job) : ?>
		<tr>
			<td><?php echo $this->Html->link(__(h($student_job['user']['name'])), array('controller'=>'users','action' => 'view', $student_job['user']['id']),array('target'=>'_blank')); ?> </td>
			<td><?php echo $this->Html->link(__(h($student_job['job']['name'])), array('controller'=>'jobs','action' => 'view', $student_job['job']['id']),array('target'=>'_blank')); ?> </td>
			<td><?php echo date('g:i a', strtotime(h($student_job['start']))).' - '.date('g:i a', strtotime(h($student_job['end']))); ?>&nbsp;</td>
			<td><?php echo h($student_job['hours']); ?>&nbsp;</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
		<div class="actions">
	<h3><?php echo __('Student Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Sign up for Event'), array('controller'=>'studentjobs','action' => 'add', $event['Event']['id'])); ?> </li>
		</ul>
		<h3><?php echo __('Faculty Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Add Job to Event'), array('controller'=>'jobs','action' => 'add', $event['Event']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?> </li>
		</ul>
</div>
		</div>

	</div>

</div>
