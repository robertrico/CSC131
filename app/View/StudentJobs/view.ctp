



<div class="col-md-8 col-md-offset-2">
<div class="main-panel panel panel-default">
<div class="panel-heading text-center">
<h1 class=“panel-title” >Student Job Info</h1>

</div>


<div class="studentJobs view">
	 <!--<h1><?php echo __('Student Job Info'); ?></h1>-->
	 <br></br>
	<dl>
		<div class="col-md--6 col-md-offset-4">
				<dt><?php echo __('Hours'); ?></dt>
		</div>
				<dd>
				<div class="col-md--3 col-md-offset-4">
					<?php echo h($studentJob['StudentJob']['total_hours']); ?>
					&nbsp;
				</div>
				</dd>
				<dt><?php echo __('Event'); ?></dt>
				<dd>
					<?php echo $this->Html->link($studentJob['Event']['name'], array('controller' => 'events', 'action' => 'view', $studentJob['Event']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('User'); ?></dt>
				<dd>
					<?php echo $this->Html->link($studentJob['User']['id'], array('controller' => 'users', 'action' => 'view', $studentJob['User']['id'])); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Job'); ?></dt>
				<dd>
					<?php echo $this->Html->link($studentJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $studentJob['Job']['id'])); ?>
					&nbsp;
		</dd>
	</dl>
</div>


</div>
</div>