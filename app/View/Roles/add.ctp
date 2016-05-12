
<div class="col-md-6 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title text-center" >Add Roles</h1>
				</div>

					<div class="roles form text-center">
						<?php echo $this->Form->create('Role'); ?>
						<br></br>
							<fieldset>
								<?php
									echo $this->Form->input('name',array("class"=>"form-control", "label"=>"Name",'required'));
									echo $this->Form->input('full_control',array("class"=>"form-control", "label"=>"Full Control",'required'));
									echo $this->Form->input('student_control',array("class"=>"form-control", "label"=>"Student Control",'required'));
									echo $this->Form->input('event_control',array("class"=>"form-control", "label"=>"Event Control",'required'));
									echo $this->Form->input('user_control',array("class"=>"form-control", "label"=>"User Control",'required'));
								?>
							</fieldset>
							<br></br>

						<?php echo $this->Form->submit(__('Submit'), array('class'=>'btn btn-default pull-center'));?>
					</div>
			<div class="actions text-center">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>

					<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
				</ul>
			</div>


	</div>
	
</div>