<div class="col-md-8 col-md-offset-1">
	<div class="main-panel panel panel-default">
		<div class="panel-heading text-center">
			<div>
				<h3 class="panel-title" >User Details</h3>
			</div>
		</div>
			<div class="panel-body">
				<div class="users form" >
					<?php echo $this->Form->create('User'); ?>
					<fieldset>
						<div class="users view" text-center>
<h2><?php echo __('Details About User'); ?></h2>
	<table  border-spacing: 15px text-align:center style="width:100%">
	<tr>
		<td><?php echo __('Id'); ?></td>
		<td><?php echo h($user['User']['id']); ?>
			&nbsp;</td>
	</tr>
	<tr>
		<td><?php echo __('First name'); ?></td>
		<td><?php echo h($user['User']['firstname']); ?>
			&nbsp;</td>
	</tr>

	<tr>
		<td><?php echo __('Last name'); ?></td>
		<td><?php echo h($user['User']['lastname']); ?>
			&nbsp;</td>
	</tr>

	<tr>
		<td><?php echo __('Email'); ?></td>
		<td><?php echo h($user['User']['email']); ?>
			&nbsp;</td>
	</tr>

	<tr>
		<td><?php echo __('Created'); ?></td>
		<td><?php echo h($user['User']['created']); ?>
			&nbsp;</td>
	</tr>

	<tr>
		<td><?php echo __('Username'); ?></td>
		<td><?php echo h($user['User']['username']); ?>
			&nbsp;</td>
	</tr>

	<tr>
		<td><?php echo __('Password'); ?></td>
		<td><?php echo h($user['User']['password']); ?>
			&nbsp;</td>
	</tr>

	</table>
	
</div>
			</fieldset>
					
				
					
				</div>
			</div>
	</div>
</div>
