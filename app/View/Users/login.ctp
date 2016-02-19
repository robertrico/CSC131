<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->button(__('Login'),array('type'=>'submit','class'=>'btn btn-success')); ?>
<?php echo $this->Form->button(__('Add User'),array('type'=>'button','class'=>'btn btn-primary')); ?>
</div>

