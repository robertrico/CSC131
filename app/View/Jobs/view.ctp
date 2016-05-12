<div class="col-md-12">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Job Description</h3>
		</div>
		<div class="panel-body">
			<div class="jobs view">
			<h2><?php echo __('Description of Job: ' .$job['Job']['name']); ?></h2>
				<!--THIS IS THE NEW CODE-->
				<dl>
					<div class="container col-md-12 col-md-offset-0">
				        <div class="col-md-3">
				          <h3>Event with this Job</h3>
				          <p><h4><?php echo $this->Html->link($job['Event']['name'], array('controller' => 'events', 'action' => 'view', $job['Event']['id'])); ?>&nbsp;</h4></p>
				        </div>

				        <div class="col-md-3">
				          <h3>Start Time</h3>
				          <p>
				          <h4><i><?php echo h(date('g:i a',strtotime($job['Job']['start_time']))); ?>&nbsp;</i></h4>
				          </p>
				        </div>
				        
				        <div class="col-md-3">
				          <h3>End Time</h3>
				          <p>
				          <h4><i><?php echo h(date('g:i a',strtotime($job['Job']['end_time']))); ?>&nbsp;</i></h4>
				          </p>
				        </div>

				        <div class="col-md-3">
				          <h3>Available Positions</h3>
				          <p>
				          <h4><strong><?php echo h($job['Job']['available_positions']); ?>&nbsp;</strong></h4>
				          </p>
				        </div> 
				    </div>    
				</dl>

				<div class="container col-md-12 col-md-offset-0">
						<br/>
						<dt><h3><?php echo __('Details'); ?></h3></dt>
						<dd><h4>
							<?php echo h($job['Job']['details']); ?>
							&nbsp;
						</h4>
						</dd>
						<br/>
				</div>

			</div>
		</div>
	</div>
</div>
