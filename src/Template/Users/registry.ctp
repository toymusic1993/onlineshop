<div id = "content" class = "col-lg-12">
	<div id = "form-registry" class = "col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post"> 
	<?php echo $this->Form->create('registry'); ?>
	<h1 class="text-center">Registry</h1>
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
		<button type="submit" class="btn btn-warning">Registry</button>
	<?= $this->Form->end() ?>
	</div>
</div>