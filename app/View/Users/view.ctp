<div class="col-md-10 col-md-offset-1">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center">
			<div>
				<h3 class="panel-title" >User Details</h3>
			</div>
		</div>
		<div class="panel-body">
		<div class="users form" >
			<?php echo $this->Form->create('User'); ?>
				<div class="users view">
					<table  class="table" cellpadding="1" cellspacing="0" border="6">
						<tr>
							<td><?php echo __('First name'); ?></td>
							<td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
						</tr>

						<tr>
							<td><?php echo __('Last name'); ?></td>
							<td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
						</tr>

						<tr>
							<td><?php echo __('Email'); ?></td>
							<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						</tr>

						<tr>
							<td><?php echo __('Created'); ?></td>
							<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
						</tr>

						<tr>
							<td><?php echo __('Username'); ?></td>
							<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						</tr>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

