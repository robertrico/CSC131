<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <div class="navbar-brand gold-text">MEP - Community Service Connection</div>
    </div>

	<!-- Use of this code assumes agreement with the Google Custom Search Terms of Service. -->
	<!-- The terms of service are available at http://www.google.com//cse/docs/tos.html -->
	<?php if($this->Session->read('Auth.User')): ?>
	<form class="navbar-form navbar-left" role="search" name="cse" id="searchbox_demo" action="https://www.google.com/cse">
		<input type="hidden" name="cref" value="" />
		<input type="hidden" name="ie" value="utf-8" />
		<input type="hidden" name="hl" value="" />
		<div class="form-group">
			<input class="form-control"name="q" type="text" size="40" disabled="disabled"/><?php /*Disabled for now*/?>
		</div>
		<input class="btn btn-default" type="submit" name="sa" value="Search" disabled="disabled"/><?php /*Disabled for now*/?>
	</form>
	<script type="text/javascript" src="https%3A%2F%2Fcse.google.com%2Fcse/tools/onthefly?form=searchbox_demo&lang="></script>
	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quick Links <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><?php echo $this->Html->link('Home','/');?></li>
				<li><?php echo $this->Html->link('My Profile',array('controller'=>'users','action'=>'view',$this->Session->read('Auth.User.id')));?></li>
				<li><?php echo $this->Html->link('My Events','/myEvents');?></li>
				<li><?php echo $this->Html->link('All Events',array('controller'=>'events','action'=>'index'));?></li>
				<li role="separator" class="divider"></li>
				<li><?php echo $this->Html->link('Add Event',array('controller'=>'events','action'=>'add'));?></li>
				<li><?php echo $this->Html->link('Add Student',array('controller'=>'users','action'=>'add',1));?></li>
				<li><?php echo $this->Html->link('Users',array('controller'=>'users','action'=>'index'));?></li>
				<li><?php echo $this->Html->link('Event Requests',array('controller'=>'eventrequests','action'=>'index'));?></li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'));?></li>
	</ul>
	<?php endif; ?>
  </div><!-- /.container-fluid -->
</nav>

