<div class="col-md-6 col-md-offset-3">
	<div class="login-panel panel panel-default">
		<div class="panel-heading">
				<h3 class="panel-title"> <?php echo __('Add Hours'); ?> </h3>
		</div>
		<div class="panel-body">
			<div class="hours form">
			<?php echo $this->Form->create('Hour'); ?>
				<fieldset>
					<legend><?php echo __('Add Hours for User'); ?></legend>

						<dl>
							<div class="container col-md-6 col-md-offset-0">
						    	<div class="col-md-3">
						        <p><?php echo $this->Form->input('user_id'); ?></p>
						        </div>

								<div class="col-md-4">
						        <p><?php echo $this->Form->input('semester'); ?></p>
						        </div>

						        <div class="col-md-2">
						        <p><?php echo $this->Form->input('year'); ?></p>
						        </div>

						        <div class="col-md-6">
						        <p><?php echo $this->Form->input('total_hours'); ?></p>
						        </div>

						        
						        
						    </div>
						</dl>


				</fieldset>
			<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
			<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>
			<br/>
			</div>
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>

					<li><?php echo $this->Html->link(__('List Hours'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Student Infos'), array('controller' => 'student_infos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Student Info'), array('controller' => 'student_infos', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		</div>
		 <?php echo $this->Html->link(__('Add User'),array('controller'=>'users','action'=>'add',1)); ?>
	</div>
</div>
