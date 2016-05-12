

<div class="col-md-8 col-md-offset-3">
<div class="main-panel panel panel-default">
<div class="panel-heading text-center">
<h1 class=“panel-title ” >Add Student Info</h1>
</div>
<br></br>
<div class="studentInfos form text-center">
<?php echo $this->Form->create('StudentInfo'); ?>
	<fieldset>
		<!--<legend><?php echo __('Add Student Info'); ?></legend>-->
	<?php
		echo $this->Form->input('studentid',array("class"=>"form-control", "label"=>"Student ID",'required'));
		echo $this->Form->input('hour_id',array("class"=>"form-control", "label"=>"Hours",'required'));
		echo $this->Form->input('user_id',array("class"=>"form-control", "label"=>"User ID",'required'));
	?>
	</fieldset>
	<br></br>

<?php echo $this->Form->button(__('Submit'), array('class'=>'btn btn-primary pull-center' ,'class'=>'btn btn-default'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Student Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>


</div>
</div>