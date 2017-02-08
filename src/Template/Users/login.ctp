<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php echo $this->Html->css('bootstrap'); ?>
	<title>Đăng Nhập Tài Khoản</title>
</head>
<body>
	<h1 class="text-center">Đăng Nhập Tài Khoản</h1>
	<div class="users form">
	     <?= $this->Form->create
          ('login', array('type' => 'post','url' => array('controller' => 'users', 'action' => 'login'),)); ?>
    	 <fieldset>
	          <?= $this->Form->input('email') ?>
	          <?= $this->Form->input('password') ?>
    	 </fieldset>
		 <?= $this->Form->submit('Login',array('class'=>'button')); ?>
		 <?= $this->Form->end() ?>
    </div>
</body>
</html>