<div class="col-md-7 col-md-offset-3 text-center">
	<div class="login-panel panel panel-default">
		<div class="panel-heading">
				<h3 class="panel-title"> <?php echo __('Please enter your username and password'); ?> </h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('User'); ?>
				<div class="form-group">
					<?php echo $this->Form->input('username',array("class"=>"form-control")); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password',array("class"=>"form-control")); ?>
				</div>
				<?php echo $this->Form->button(__('Login'),array('type'=>'submit','class'=>'btn btn-default')); ?>
			<?php echo $this->Form->end(); ?>
		</div>
		<?php echo $this->Html->link(__('Add User'),array('controller'=>'users','action'=>'add')); ?>
	</div>
</div>
		
