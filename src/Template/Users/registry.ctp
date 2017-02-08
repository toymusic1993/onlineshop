<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php echo $this->Html->css('bootstrap'); ?>
	<title>Đăng Kí Tài Khoản</title>
</head>
<body>
     <?php
          echo $this->Form->create
          ('registry', array('type' => 'post','url' => array('controller' => 'users', 'action' => 'registry'),));
	?>
	<h1 class="text-center">Đăng Kí Tài Khoản</h1>
	<div class="form-group">
     <label for="usr">Email:</label>
         <input type="text" class="form-control" name="email">
     </div>
     <div class="form-group">
         <label for="usr">Name:</label>
	    <input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" name="password">
     </div>
     <button type="submit" class="btn btn-warning">Đăng Kí</button>
     <?= $this->Form->end() ?>
</body>
</html>