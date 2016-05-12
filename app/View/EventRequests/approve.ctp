<div class="col-md-8 col-md-offset-2">
	<div class="eventRequests panel panel-default">
		<div class="panel-heading">
				<h3 class="panel-title"> <?php echo __('Event Request Approval'); ?> </h3>
		</div>
		<div class="panel-body">
			<div class="eventRequests form">
				<div class="eventRequests view">
				<h2><?php echo __('Event Request Information'); ?></h2>
					<dl>
						<div class="container col-md-12 col-md-offset-0">

							<div class="col-md-6">
								<dt><h3><?php echo __('Event Name'); ?></h3></dt>
								<dd><h4>
									<?php echo h($eventRequest['EventRequest']['name']); ?>
									&nbsp;
								</h4></dd>
							</div>
							<div class="col-md-6">
								<dt><h3><?php echo __('Time'); ?></h3></dt>
								<dd><h4>
									<?php echo h($eventRequest['EventRequest']['time']); ?>
									&nbsp;
								</h4></dd>
							</div>

							<div class="col-md-12">
							<br/>
							<dt><h3><?php echo __('Details'); ?></h3></dt>
							<dd><h4>
								<?php echo h($eventRequest['EventRequest']['details']); ?>
								&nbsp;
							</h4></dd>
							</div>

							<div class="col-md-6">
								<br/>
								<dt><h3><?php echo __('Contact Email'); ?></h3></dt>
								<dd><h4>
									<?php echo h($eventRequest['EventRequest']['Email']); ?>
									&nbsp;
								</h4></dd>
							</div>
							<div class="col-md-6">.
								<br/>
								<dt><h3><?php echo __('Contact Phone'); ?></h3></dt>
								<dd><h4>
									<?php echo h($eventRequest['EventRequest']['Phone']); ?>
									&nbsp;
								</h4></dd>
							</div>
						</div>
					</div>
					</dl>
				</div>
				<div class="actions container col-md-12 col-md-offset-0">
				<?php echo $this->Form->create('EventRequest'); ?>
					<fieldset>
						<legend><?php echo __('Approve Event Request'); ?></legend>
					<?php
						echo $this->Form->input('details',array('class'=>'form-control','rows'=>'10'));
						echo $this->Form->input('time',array('type'=>'text','class'=>'form-control'));
					?>
					</fieldset>
					<br/>
				<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-default pull-left')); ?>
				<?php echo $this->Form->button(__('Cancel'),array('class'=>'btn btn-default pull-right'));?>
				</div>
			</div>
		</div>
		<div class="container">
			<?php echo $this->Html->link(__('Add User'),array('controller'=>'users','action'=>'add',1)); ?>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#EventRequestTime').datetimepicker({ 
		step : 15,
		formatTime : 'g:i a',
		formatDate : 'm/d/Y',
		format : 'm/d/Y g:i a'
	});
});
</script>