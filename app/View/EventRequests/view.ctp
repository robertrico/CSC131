<div class="col-md-8 col-md-offset-2">
	<div class="eventRequests panel panel-default">
		<div class="panel-heading">
				<h3 class="panel-title"> <?php echo __('View Event Request'); ?> </h3>
		</div>
		<div class="panel-body">
			<div class="eventRequests view">
			<h2><?php echo __('View Event Request'); ?></h2>
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
									<?php echo h($eventRequest['EventRequest']['email']); ?>
									&nbsp;
								</h4></dd>
							</div>
							<div class="col-md-6">.
								<br/>
								<dt><h3><?php echo __('Contact Phone'); ?></h3></dt>
								<dd><h4>
									<?php echo h($eventRequest['EventRequest']['phone']); ?>
									&nbsp;
								</h4></dd>
							</div>
						</div>
					</div>
					<div class="actions container col-md-12 col-md-offset-0">
						<h3><?php echo __('Actions'); ?></h3>
						<ul>
							<li><?php echo $this->Html->link(__('Edit Event Request'), array('action' => 'edit', $eventRequest['EventRequest']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Event Request'), array('action' => 'delete', $eventRequest['EventRequest']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $eventRequest['EventRequest']['id']))); ?> </li>
							<li><?php echo $this->Html->link(__('List Event Requests'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Event Request'), array('action' => 'add')); ?> </li>
							<li><?php echo $this->Html->link(__('Approve Event Request'), array('action' => 'approve', $eventRequest['EventRequest']['id'])); ?> </li>
						</ul>
					</div>
				</dl>
			</div>
			
		</div>
	</div>
</div>
