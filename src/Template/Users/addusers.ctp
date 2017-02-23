<div id = "content" class = "col-lg-12">
	<div id = "form-registry" class = "well well-lg col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post">
		<h1 class="text-center">Add Users</h1>
		<?php echo $this->Form->create(); ?>
		<div class="form-group">
			<label for="usr">Name</label>
			<input type="text" class="form-control" name = "name">
		</div>
		<div class="form-group">
			<label for="usr">Email</label>
			<input type="text" class="form-control" name = "email">
		</div>
		<div class="form-group">
			<label for="usr">Password</label>
			<input type="password" class="form-control" name = "password">
		</div>
		<button type="submit" class="btn btn-warning">Add Users</button>
		<?php echo $this->Form->end();?>
	</div>
</div>

