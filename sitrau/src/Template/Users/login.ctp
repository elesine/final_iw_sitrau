<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('institutional_mail') ?>
<?= $this->Form->control('password') ?>
<?php echo $this->Html->link('Forgot Password',['action'=>'forgotpassword'],['class'=>'btn btn-info']); ?>
<p></p>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>

