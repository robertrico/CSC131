
<div class="main-panel panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title text-center" >Users</h1>
			</div>
				<div class="panel-body">
					<table class="table" cellpadding="1" cellspacing="0" border="1">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('firstname','First ').$this->Paginator->sort('lastname', 'Last Name'); ?></th>
								<th><?php echo $this->Paginator->sort('email'); ?></th>
								<th><?php echo $this->Paginator->sort('username'); ?></th>

							</tr>
						</thead>
							<tbody>
									<?php foreach ($users as $user): ?>
									<tr>
										<td><?php echo $this->Html->link(__(h($user['User']['firstname']." ").h($user['User']['lastname'])), array('action' => 'view', $user['User']['id']));?>&nbsp; </td>
										<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
										<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
									</tr>
									<?php endforeach; ?>
							</tbody>
					</table>
						<p>
							<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
							</p>
					<div class="paging">
						<?php
							echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
							echo $this->Paginator->numbers(array('separator' => ''));
							echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled'));
						?>
					</div>
				</div>
</div>

