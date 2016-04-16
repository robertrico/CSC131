<?php echo $this->Form->create('Report'); ?>
<?php echo $this->Form->input('range'); ?>
<?php echo $this->Form->submit('Get Report'); ?>
<?php echo $this->Form->end(); ?>
<script>
$(document).ready(function(){
	$('#ReportRange').daterangepicker();
});
</script>

