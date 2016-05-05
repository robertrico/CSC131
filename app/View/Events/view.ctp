<div class="col-md-10 col-md-offset-1">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Event Information</h3>
		</div>
		<div class="panel-body">
							<div class="events view">
				<h2><?php echo __('Event Information for ' . $event['Event']['name']); ?></h2>
					<br/>
					<dl>
						<div class="container col-md-14 col-md-offset-1">
      <!-- Example row of columns -->
				        <div class="col-md-3">
				          <h3>Date</h3>
				          <p><h4><?php echo date('m/d/Y', strtotime(h($event['Event']['date'])));?> &nbsp;</h4></p>
				       </div>
				        <div class="col-md-3">
				          <h3>Time</h3>
				          <p><h4><i><?php echo date('g:i a', strtotime(h($event['Event']['start_time']))).' - '.date('g:i a', strtotime(h($event['Event']['end_time']))); ?> &nbsp;</i></h4></p>
				        </div>
				        <div class="col-md-3">
				          <h3>Location</h3>
				          <p><h4><?php echo h($event['Event']['location']); ?>&nbsp;</h4></p>
				        </div>
				      </div>
				      <div class="container col-md-12 col-md-offset-1">
						<br/>
						<dt><h3><?php echo __('Details'); ?></h3></dt>
						<dd><h4>
							<?php echo h($event['Event']['details']); ?>
							&nbsp;
						</h4>
						</dd>
					  </div>
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
				<?php if($this->Session->read('Auth.Role.event_control')): ?>
					<h3><?php echo __('Faculty Actions'); ?></h3>
					<ul>
						<li><?php echo $this->Html->link(__('Generate Event Report'), array('controller'=>'events','action' => 'generateReport', $event['Event']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('Add Job to Event'), array('controller'=>'jobs','action' => 'add', $event['Event']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?> </li>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
