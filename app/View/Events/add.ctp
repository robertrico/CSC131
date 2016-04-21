<div class="col-md-8 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center"><h3 class="panel-title">Adding a New Event</h3>
		</div>
			<div class="panel-body">
				<div class="events form">
				<?php echo $this->Form->create('Event'); ?>
					<fieldset>
						<legend><?php echo __('Add Event'); ?></legend>
							<?php
								echo $this->Form->input('name',array("class"=>"form-control"));
								echo $this->Form->input('duties',array("class"=>"form-control"));
								echo $this->Form->input('location',array("class"=>"form-control"));
								echo $this->Form->input('time');
								echo $this->Form->input('details',array("class"=>"form-control", "rows"=>"10"));
							?>
					</fieldset>
					<div class="col-md-12 text-center">
					<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary pull-left')); ?>
					<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-primary pull-right'));?>
				</div>
					
				</div>
				<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>

						<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
					</ul>
				</div>

		</div>
	</div>
</div>

