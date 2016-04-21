<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Event</h3>
		</div>
		<div class="panel-body">
			<div class="events form">
				<?php echo $this->Form->create('Event'); ?>
				<fieldset>
				<legend><?php echo __('Edit Event'); ?></legend>
				<?php
				echo $this->Form->input('id',array("class"=>"form-control"));
				echo $this->Form->input('name',array("class"=>"form-control"));
				echo $this->Form->input('duties',array("class"=>"form-control"));
				echo $this->Form->input('location',array("class"=>"form-control"));
				echo $this->Form->input('time');
				echo $this->Form->input('details',array("class"=>"form-control","rows"=>"10"));
				?>
				</fieldset>
				<!--<table class="table table-striped" cellpadding="0" cellspacing="0">
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
				<td><?php echo h($student_job['start'].' - '.$student_job['end']); ?>&nbsp;</td>
				<td><?php echo h($student_job['hours']); ?>&nbsp;</td>
				</tr>
				<?php endforeach; ?>
				</tbody>
				</table>-->
				<div class="col-md-12 text-center">
					<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary pull-left')); ?>
					<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-primary pull-right'));?>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>
