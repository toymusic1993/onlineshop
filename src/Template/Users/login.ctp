<div id = "content" class = "well well-lg col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post">
	<h1 class="text-center">User Login</h1>
	<div class="users form">
	<?= $this->Form->create() ?>
	<?= $this->Form->input('email') ?>
	<?= $this->Form->input('password') ?>
	<?= $this->Form->button(__('Login')); ?>
	<?= $this->Form->end() ?>
    </div>
</div>
