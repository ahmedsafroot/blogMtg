<h1>Edit Your data</h1>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Edit'); ?></legend>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'writer' => 'Writer')
        ));
        echo $this->Form->input('id', array('type' => 'hidden'));

    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>