
<div class="col-md-6 col-md-offset-3">
<div class="main-panel panel panel-default">
<div class="panel-heading">
<h1 class="panel-title text-center" >EDIT ROLES</h1>
</div>

<div class="roles form text-center">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
	<table>	
	<!--<legend><?php echo __('Edit Role'); ?></legend>-->
	<?php
		echo $this->Form->input('id',array("class"=>"form-control"));
		echo $this->Form->input('name',array("class"=>"form-control", "label"=>"Name",'required'));
		echo $this->Form->input('full_control',array("class"=>"form-control", "label"=>"Full Control",'required'));
		echo $this->Form->input('student_control',array("class"=>"form-control", "label"=>"Student Control",'required'));
		echo $this->Form->input('event_control',array("class"=>"form-control", "label"=>"Event Control",'required'));
		echo $this->Form->input('user_control',array("class"=>"form-control", "label"=>"User Control",'required'));
	?>
	</fieldset>
	</table>
	<br></br>
<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-default pull-center'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Role.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Role.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
	</ul>
</div>


</div>
</div>
</div>