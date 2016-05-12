
<div class="col-md-7 col-md-offset-2">
	<div class="main-panel panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title text-center" >ROLES</h1>
			</div>

			<div class="roles view text-center">
				<!--<h2><?php echo __('Role'); ?></h2>-->
				<br></br>
					<dl>
						<dt><?php echo __('Id'); ?></dt>
						<dd>
							<?php echo h($role['Role']['id']); ?>
							&nbsp;
							<br></br>
						</dd>
						<dt><?php echo __('Name'); ?></dt>
						<dd>
							<?php echo h($role['Role']['name']); ?>
							&nbsp;
							<br></br>
						</dd>
						<dt><?php echo __('Full Control'); ?></dt>
						<dd>
							<?php echo h($role['Role']['full_control']); ?>
							&nbsp;
							<br></br>
						</dd>
						<dt><?php echo __('Student Control'); ?></dt>
						<dd>
							<?php echo h($role['Role']['student_control']); ?>
							&nbsp;
							<br></br>
						</dd>
						<dt><?php echo __('Event Control'); ?></dt>
						<dd>
							<?php echo h($role['Role']['event_control']); ?>
							&nbsp;
							<br></br>
						</dd>
						<dt><?php echo __('User Control'); ?></dt>
						<dd>
							<?php echo h($role['Role']['user_control']); ?>
							&nbsp;
							<br></br>
						</dd>
					</dl>
				</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $role['Role']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
	</ul>
</div>



	</div>
</div>