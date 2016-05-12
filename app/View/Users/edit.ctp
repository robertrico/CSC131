<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center">
			<h3 class="panel-title" >EDIT USER</h3>
				</div>
					<div class="panel-body">
						<?php echo $this->Form->create('User'); ?>
						<?php
						echo $this->Form->input('id',array("class"=>"form-control"));
						echo $this->Form->input('firstname' ,array("class"=>"form-control"));
						echo $this->Form->input('lastname',array("class"=>"form-control"));
						echo $this->Form->input('email',array("class"=>"form-control"));
						echo $this->Form->input('username',array("class"=>"form-control"));
						echo $this->Form->input('role_id',array("options"=>$roles,"class"=>"form-control"));
						?>
						
						<div class="col-md-8 col-md-offset-5 text:center">
							<br/>
							<?php echo $this->Form->button(__('Submit'), array('class'=>'btn btn-primary pull-center' ,'class'=>'btn btn-default'));?>
						</div>
						<?php echo $this->Form->end(); ?>
					</div>
	</div>
</div>
