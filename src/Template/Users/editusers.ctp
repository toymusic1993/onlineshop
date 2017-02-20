<div class="container">
<h1 class="text-primary">Edit Users</h1>
<?php
    echo $this->Form->create($users);
    echo $this->Form->input('name');
	echo $this->Form->input('email');
	echo $this->Form->input('password');
	echo $this->Form->button(__('Edit '));
	echo $this->Form->button(__('Hủy '));
	echo $this->Form->end();
?>
</div>