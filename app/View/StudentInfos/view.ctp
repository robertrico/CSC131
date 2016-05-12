
<div class="col-md-6 col-md-offset-3">
<div class="main-panel panel panel-default">
<div class="panel-heading">
<h1 class=“panel-title text-center” >Student Info</h1>
</div>

<div class="studentInfos view">
<!--<h2><?php echo __('Student Info'); ?></h2>-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($studentInfo['StudentInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Studentid'); ?></dt>
		<dd>
			<?php echo h($studentInfo['StudentInfo']['studentid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentInfo['Hour']['id'], array('controller' => 'hours', 'action' => 'view', $studentInfo['Hour']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($studentInfo['User']['id'], array('controller' => 'users', 'action' => 'view', $studentInfo['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student Info'), array('action' => 'edit', $studentInfo['StudentInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student Info'), array('action' => 'delete', $studentInfo['StudentInfo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $studentInfo['StudentInfo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>


</div>
</div>