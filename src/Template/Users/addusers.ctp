<div id = "form-add" class = "col-lg-12"> 
	<h1 class="text-center">Add Users</h1>
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

