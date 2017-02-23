<div id = "content" class = "well well-lg col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post">
	<div id = "form-edit-users"> 
	<?php echo $this->Form->create(); ?>
	<h1 class="text-center">Registry</h1>
	<div class="form-group">
		<label for="usr">Email:</label>
		<input type="text" class="form-control" name="email" value = "<?php echo $users->email ?>">
	</div>
	<div class="form-group">
        <label for="usr">Name:</label>
	    <input type="text" class="form-control" name="name" value = "<?php echo $users->name ?>">
	</div>
	<div class="form-group">
	    <label for="pwd">Password:</label>
		<input type="password" class="form-control" name="password" value = "<?php echo $users->password ?>">
	</div>
		<button type="submit" class="btn btn-warning">Edit</button>
	<?= $this->Form->end() ?>
	</div>
</div>
