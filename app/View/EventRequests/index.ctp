<div class="col-md-10 col-md-offset-1">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title text-center" >EVENT REQUESTS</h1>
				</div>
					<div class="eventRequests index">
							
							<table class="table table-striped" cellpadding="1" cellspacing="0">
								<thead text:center>
									<tr>
										<th><?php echo $this->Paginator->sort('Name'); ?></th>
										<th><?php echo $this->Paginator->sort('details'); ?></th>
										<th><?php echo $this->Paginator->sort('time'); ?></th>
										<th class="actions"><?php echo __('Actions'); ?></th>
									</tr>
								</thead>
									<tbody>
										<?php foreach ($eventRequests as $eventRequest): ?>
										<tr>
											<td><?php echo $this->Html->link(__($eventRequest['EventRequest']['name']), array('action' => 'view', $eventRequest['EventRequest']['id'])); ?>&nbsp;</td>
											<td><?php echo h($eventRequest['EventRequest']['details']); ?>&nbsp;</td>
											<td><?php echo h($eventRequest['EventRequest']['time']); ?>&nbsp;</td>
											<td class="actions">
												
												<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventRequest['EventRequest']['id'])); ?>
												<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventRequest['EventRequest']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $eventRequest['EventRequest']['id']))); ?>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
							</table>
								
						<div class="container">
							<p>
									<?php
									echo $this->Paginator->counter(array(
										'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
									));
									?>	
							</p>
							<div class="paging">
								<?php
									echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
									echo $this->Paginator->numbers(array('separator' => ''));
									echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
								?>
							</div>
							<div class="actions">
								<h3><?php echo __('Actions'); ?></h3>
								<ul>
									<li><?php echo $this->Html->link(__('New Event Request'), array('action' => 'add')); ?></li>
								</ul>
							</div>
						</div>
					</div>
	</div>
</div>
