<div id = "content" class = "well well-lg col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post">
	<h1 class="text-center">Admin Login</h1>
	<div class="users form">
	<?= $this->Form->create(); ?>
	<div class = "form-group">
		<label for = "usr">Email:</label>
		<input type ="text" class = "form-control" name = "email">
	</div>
	<div class = "form-group">
	    <label for = "pwd">Password:</label>
		<input type = "password" class = "form-control" name = "password">
	</div>
		<button type = "submit" class="btn btn-warning">Login</button>
	<?= $this->Form->end() ?>
    </div>
