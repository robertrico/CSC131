


<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title" text-center>Create A New User</h3>
		</div>
		<div class="panel-body">
<div class="users form" >
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add a New User'); ?></legend>
	<?php
		echo $this->Form->input('First Name',array("class"=>"form-control"));
		echo $this->Form->input('last name',array("class"=>"form-control"));
		echo $this->Form->input('email',array("class"=>"form-control"));
		echo $this->Form->input('username',array("class"=>"form-control"));
		echo $this->Form->input('password',array("class"=>"form-control"));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>		</div>
	</div>
</div>