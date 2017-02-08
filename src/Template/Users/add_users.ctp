<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <?php 
        echo $this->Html->css('bootstrap');
        echo $this->Html->script('jquery'); 
    ?>
</head>
<body>
	<div class="container">	
		<h1 class="text-primary">Thêm Tài Khoản</h1>
		<?php
			echo $this->Form->create($users);
			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
			echo $this->Form->button(__('Tạo Tài Khoản '));
			echo $this->Form->button(__('Hủy '));
			echo $this->Form->end();
		?>
</div>
</body>
</html>