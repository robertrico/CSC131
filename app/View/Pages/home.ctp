<div class="col-md-12">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Welcome to the Community Service Connection!</h3>
		</div>
		<div class="panel-body">
			<h3>Welcome to the MEP Community Service Connection!</h3>
			<p> With this platform, we make it easy for you to keep track of your hours and view the community service events you have attended! </p>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Upcoming Events</h3>
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
			<h3 class="panel-title">My Events</h3>
		</div>
		<div class="panel-body">
		<h2> Total Hours </h2>
		<table class="table">
			<tbody>
				<?php foreach($hours as $hour): ?>
					<tr>
						<td>
							<h3><?php echo $hour['Hour']['semester']; ?></h3>
						</td>
						<td>
							<h3><?php echo $hour['Hour']['year']; ?></h3>
						</td>
						<td>
							<h3><?php echo $hour['Hour']['total_hours']; ?> Hours</h3>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h2> My Upcoming Events </h2>
		<table class="table table-striped">
			<thead>
					<tr>
						<th> Event </th>
						<th> Day </th>
						<th> Job </th>
						<th> Hours </th>
					</tr>
			</thead>
			<tbody>
				<?php foreach($myjobs as $job): ?>
					<tr>
						<td>
							<?php echo $job['Event']['name']; ?>
						</td>
						<td>
							<?php echo date("m-d-Y",strtotime($job['Event']['time'])); ?>
						</td>
						<td>
							<?php echo $job['Job']['name']; ?>
						</td>
						<td>
							<?php echo $job['Job']['end_time'] - $job['Job']['start_time']; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
