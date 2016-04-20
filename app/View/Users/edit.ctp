

<div class="col-md-7 col-md-offset-3">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center">
			<div>
				<h3 class="panel-title" >EDIT USERS</h3>
			</div>
		</div>
			<div class="panel-body">
				<div class="users form" >
					<?php echo $this->Form->create('User'); ?>
					<fieldset>
								
									<?php
										echo $this->Form->input('id',array("class"=>"form-control"));
										echo $this->Form->input('firstname' ,array("class"=>"form-control"));
										echo $this->Form->input('lastname',array("class"=>"form-control"));
										echo $this->Form->input('email',array("class"=>"form-control"));
										echo $this->Form->input('username',array("class"=>"form-control"));
										echo $this->Form->input('password',array("class"=>"form-control"));
									?>
							</fieldset>
					<h1></h1>
					<div class="col-md-8 col-md-offset-5 text:center">
						<?php echo $this->Form->button(__('Submit'), array('class'=>'btn btn-primary pull-center' ,'class'=>'btn btn-default'));?>
						
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<h1></h1>
				<div class="actions">
	
</div>


			</div>
	</div>
</div>
