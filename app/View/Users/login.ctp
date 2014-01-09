<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
<div class="fb-root"></div>
<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
<?php echo $this->Form->end(__('Sign in'));
echo $this->Html->link(
    'Create account',
    array('controller' => 'Users', 'action' => 'add')
);?>
</div>