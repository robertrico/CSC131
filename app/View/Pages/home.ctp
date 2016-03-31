<div class="col-md-6">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Current Events</h3>
		</div>
		<div class="panel-body">
			<ul>	
				<li><?php echo $this->Html->link('All Events',array('controller'=>'events','action'=>'index')); ?></li>	
				<?php foreach ($events as $event): ?>
					<li>
						<?php echo $this->Html->link(__($event['Event']['name']), array('controller'=>'events','action' => 'view', $event['Event']['id'])); ?>
					</li>	
				<?php endforeach; ?>
			</ul>	
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">panel title</h3>
		</div>
		<div class="panel-body">
			panel content
		</div>
	</div>
</div>
